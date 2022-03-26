<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Fixture;
use App\Models\GameManager;
use App\Models\Point;
use App\Models\Team;

class SimulatorController extends Controller
{
    public function __construct()
    {
    }

    //getting all teams
    public function teams()
    {
        try {
            $teams = Team::all();

            return view('teams', ['teams' => $teams]);
        } catch (\Exception $e) {
            abort(404);
        }
    }

    //getting all fixtures
    public function fixtures()
    {
        try {
            if (Fixture::find(1)) {
                $fixtures = Fixture::all();
            } else {
                $this->generateFixtures();
                $fixtures = Fixture::all();
            }

            return view('fixtures', ['fixtures' => $fixtures]);
        } catch (\Exception $e) {
            abort(404);
        }
    }

    //generate fixtures
    public function generateFixtures()
    {
        $groups = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H'];

        foreach ($groups as $group) {
            $input = Team::select('name', 'group')->where('group', $group)->get();
            foreach ($input as $teamI) {
                foreach ($input as $teamJ) {
                    if ($teamI->name != $teamJ->name) {
                        $fixture = new Fixture();
                        $fixture->home = $teamI->name;
                        $fixture->away = $teamJ->name;
                        $fixture->group = $teamI->group;
                        $fixture->save();
                    }
                }
            }

            //separate weeks
            $fixtures = Fixture::where('group', $group)->get();
            for ($i = 1; $i <= 6; ++$i) {
                if ($i < 4) {
                    $week = (2 * $i) - 1;
                } else {
                    $week = 2 * ($i - 3);
                }
                $firstMatch = null;
                foreach ($fixtures as $match) {
                    if ($match->week == null) {
                        if ($firstMatch == null) {
                            $match->week = $week;
                            $match->save();
                            $firstMatch = $match;
                        } else {
                            if ($match->home != $firstMatch->home && $match->away != $firstMatch->home && $match->home != $firstMatch->away && $match->away != $firstMatch->away) {
                                $match->week = $week;
                                $match->save();
                                break;
                            }
                        }
                    }
                }
            }
        }

        return Fixture::all();
    }

    //play current week's matches
    public function playNextWeek()
    {
        try {
            $game_manager = GameManager::find(1);
            if ($game_manager->current_week > 6) {
                $lastPoints = Point::orderBy('group', 'ASC')->orderBy('points', 'DESC')->orderBy('goal_difference', 'DESC')->get();
                $lastFixtures = Fixture::where('week', 6)->get();

                return view('simulation', ['points' => $lastPoints, 'fixtures' => $lastFixtures]);
            }
            $this->playWeeklyMatches($game_manager->current_week);
            $game_manager->current_week = $game_manager->current_week + 1;
            $game_manager->save();

            $points = Point::orderBy('group', 'ASC')->orderBy('points', 'DESC')->orderBy('goal_difference', 'DESC')->get();
            $fixtures = Fixture::where('week', $game_manager->current_week - 1)->get();

            return view('simulation', ['points' => $points, 'fixtures' => $fixtures]);
        } catch (\Exception $e) {
            abort(404);
        }
    }

    //play all week's matches
    public function playAllWeeks()
    {
        try {
            $game_manager = GameManager::find(1);
            if ($game_manager->current_week > 6) {
                $lastPoints = Point::orderBy('group', 'ASC')->orderBy('points', 'DESC')->orderBy('goal_difference', 'DESC')->get();
                $lastFixtures = Fixture::where('week', 6)->get();

                return view('simulation', ['points' => $lastPoints, 'fixtures' => $lastFixtures]);
            }

            //play all remaining matches
            for ($i = $game_manager->current_week; $i <= 6; ++$i) {
                $this->playWeeklyMatches($i);
                $game_manager->current_week = $game_manager->current_week + 1;
                $game_manager->save();
            }

            $points = Point::orderBy('group', 'ASC')->orderBy('points', 'DESC')->orderBy('goal_difference', 'DESC')->get();
            $fixtures = Fixture::where('week', $game_manager->current_week - 1)->get();

            return view('simulation', ['points' => $points, 'fixtures' => $fixtures]);
        } catch (\Exception $e) {
            abort(404);
        }
    }

    //reset all data
    public function resetData()
    {
        try {
            Fixture::truncate();
            Point::truncate();
            $game_manager = GameManager::find(1);
            $game_manager->current_week = 1;
            $game_manager->save();

            return redirect()->route('teams');
        } catch (\Exception $e) {
            abort(404);
        }
    }

    //play weekly matches
    public function playWeeklyMatches($week)
    {
        $fixtures = Fixture::where('week', $week)->get();

        foreach ($fixtures as $match) {
            //score calculation
            $home = Team::select('coefficient', 'group')->where('name', $match->home)->first();
            $home_score = (int) ($home->coefficient * random_int(1, 10) / 200);
            $away = Team::select('coefficient', 'group')->where('name', $match->away)->first();
            $away_score = (int) ($away->coefficient * random_int(1, 10) / 200);
            $match->home_score = $home_score;
            $match->away_score = $away_score;
            $match->save();

            //point calculation
            if ($week == 1) {
                $pointHome = new Point();
                $pointHome->name = $match->home;
                $pointHome->group = $home->group;
                $pointAway = new Point();
                $pointAway->name = $match->away;
                $pointAway->group = $away->group;
            } else {
                $pointHome = Point::where('name', $match->home)->first();
                $pointAway = Point::where('name', $match->away)->first();
            }
            if ($match->home_score > $match->away_score) {
                $pointHome->won = $pointHome->won + 1;
                $pointAway->lost = $pointAway->lost + 1;
                $pointHome->points = $pointHome->points + 3;
            } elseif ($match->home_score < $match->away_score) {
                $pointAway->won = $pointAway->won + 1;
                $pointHome->lost = $pointHome->lost + 1;
                $pointAway->points = $pointAway->points + 3;
            } else {
                $pointAway->drawn = $pointAway->drawn + 1;
                $pointHome->drawn = $pointHome->drawn + 1;
                $pointHome->points = $pointHome->points + 1;
                $pointAway->points = $pointAway->points + 1;
            }
            $pointHome->goal_difference = $pointHome->goal_difference + $match->home_score - $match->away_score;
            $pointAway->goal_difference = $pointAway->goal_difference + $match->away_score - $match->home_score;
            $pointHome->save();
            $pointAway->save();
        }
        if ($week > 1) {
            $this->calculatePrediction($week);
        }
    }

    //championship prediction calculation
    public function calculatePrediction($week)
    {
        $groups = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H'];

        foreach ($groups as $group) {
            $points = Point::where('group', $group)->orderBy('points', 'DESC')->orderBy('goal_difference', 'DESC')->get();
            //calculation of remaining points
            $remain_points = (6 - $week) * 3;

            //static probability assignment on a case-by-case basis
            if ($week == 6) {
                $points[0]->prediction = 100;
                $points[1]->prediction = 0;
                $points[2]->prediction = 0;
                $points[3]->prediction = 0;
            } elseif ($points[0]->points - $points[1]->points > $remain_points) {
                $points[0]->prediction = 100;
                $points[1]->prediction = 0;
                $points[2]->prediction = 0;
                $points[3]->prediction = 0;
            } elseif ($points[0]->points - $points[2]->points > $remain_points) {
                if ($points[0]->points != $points[1]->points) {
                    $points[0]->prediction = 65;
                    $points[1]->prediction = 35;
                    $points[2]->prediction = 0;
                    $points[3]->prediction = 0;
                } else {
                    $points[0]->prediction = 50;
                    $points[1]->prediction = 50;
                    $points[2]->prediction = 0;
                    $points[3]->prediction = 0;
                }
            } elseif ($points[0]->points - $points[3]->points > $remain_points) {
                if (($points[0]->points == $points[1]->point) && ($points[0]->points == $points[2]->points)) {
                    $points[0]->prediction = 35;
                    $points[1]->prediction = 33;
                    $points[2]->prediction = 32;
                    $points[3]->prediction = 0;
                } elseif ($points[0]->points == $points[1]->points) {
                    $points[0]->prediction = 40;
                    $points[1]->prediction = 40;
                    $points[2]->prediction = 20;
                    $points[3]->prediction = 0;
                } elseif ($points[1]->points == $points[2]->points) {
                    $points[0]->prediction = 40;
                    $points[1]->prediction = 30;
                    $points[2]->prediction = 30;
                    $points[3]->prediction = 0;
                } else {
                    $points[0]->prediction = 50;
                    $points[1]->prediction = 35;
                    $points[2]->prediction = 15;
                    $points[3]->prediction = 0;
                }
            } else {
                if (($points[0]->points == $points[1]->points) && ($points[0]->points == $points[2]->points) && ($points[0]->points == $points[3]->points)) {
                    $points[0]->prediction = 25;
                    $points[1]->prediction = 25;
                    $points[2]->prediction = 25;
                    $points[3]->prediction = 25;
                } elseif (($points[0]->points == $points[1]->points) && ($points[0]->points == $points[2]->points)) {
                    $points[0]->prediction = 30;
                    $points[1]->prediction = 30;
                    $points[2]->prediction = 30;
                    $points[3]->prediction = 10;
                } elseif ($points[0]->points == $points[1]->points) {
                    if ($points[2]->points == $points[3]->points) {
                        $points[0]->prediction = 35;
                        $points[1]->prediction = 35;
                        $points[2]->prediction = 20;
                        $points[3]->prediction = 20;
                    } else {
                        $points[0]->prediction = 35;
                        $points[1]->prediction = 35;
                        $points[2]->prediction = 25;
                        $points[3]->prediction = 15;
                    }
                } elseif (($points[1]->points == $points[2]->points) && ($points[1]->points == $points[3]->points)) {
                    $points[0]->prediction = 40;
                    $points[1]->prediction = 20;
                    $points[2]->prediction = 20;
                    $points[3]->prediction = 20;
                } elseif (($points[1]->points == $points[2]->points)) {
                    $points[0]->prediction = 40;
                    $points[1]->prediction = 25;
                    $points[2]->prediction = 25;
                    $points[3]->prediction = 10;
                } elseif (($points[2]->points == $points[3]->points)) {
                    $points[0]->prediction = 40;
                    $points[1]->prediction = 30;
                    $points[2]->prediction = 15;
                    $points[3]->prediction = 15;
                } else {
                    $points[0]->prediction = 40;
                    $points[1]->prediction = 25;
                    $points[2]->prediction = 20;
                    $points[3]->prediction = 15;
                }
            }
            foreach ($points as $point) {
                $point->save();
            }
        }
    }
}
