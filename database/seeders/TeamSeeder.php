<?php

namespace Database\Seeders;

use App\Models\Team;
use Illuminate\Database\Seeder;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //TODO
        Team::updateOrCreate(['id' => 1], ['id' => 1, 'name' => 'Ajax', 'short_name' => '', 'country' => 'Netherlands', 'coefficient' => 82, 'pot' => 3, 'group' => 'C']);
        Team::updateOrCreate(['id' => 2], ['id' => 2, 'name' => 'Atalanta', 'short_name' => '', 'country' => 'Italy', 'coefficient' => 50, 'pot' => 3, 'group' => 'F']);
        Team::updateOrCreate(['id' => 3], ['id' => 3, 'name' => 'Atletico Madrid', 'short_name' => '', 'country' => 'Spain', 'coefficient' => 115, 'pot' => 1, 'group' => 'B']);
        Team::updateOrCreate(['id' => 4], ['id' => 4, 'name' => 'Barcelona', 'short_name' => '', 'country' => 'Spain', 'coefficient' => 122, 'pot' => 2, 'group' => 'E']);
        Team::updateOrCreate(['id' => 5], ['id' => 5, 'name' => 'Bayern Munich', 'short_name' => '', 'country' => 'Germany', 'coefficient' => 134, 'pot' => 1, 'group' => 'E']);
        Team::updateOrCreate(['id' => 6], ['id' => 6, 'name' => 'Benfica', 'short_name' => '', 'country' => 'Portugal', 'coefficient' => 58, 'pot' => 3,  'group' => 'E']);
        Team::updateOrCreate(['id' => 7], ['id' => 7, 'name' => 'Besiktas', 'short_name' => '', 'country' => 'Turkey', 'coefficient' => 49, 'pot' => 4,  'group' => 'C']);
        Team::updateOrCreate(['id' => 8], ['id' => 8, 'name' => 'Borussia Dortmund', 'short_name' => '', 'country' => 'Germany', 'coefficient' => 90, 'pot' => 2, 'group' => 'C']);
        Team::updateOrCreate(['id' => 9], ['id' => 9, 'name' => 'Chelsea', 'short_name' => '', 'country' => 'England', 'coefficient' => 98, 'pot' => 1,  'group' => 'H']);
        Team::updateOrCreate(['id' => 10], ['id' => 10, 'name' => 'Club Brugge', 'short_name' => '', 'country' => 'Belgium', 'coefficient' => 35, 'pot' => 4,  'group' => 'A']);
        Team::updateOrCreate(['id' => 11], ['id' => 11, 'name' => 'Dynamo Kiev', 'short_name' => '', 'country' => 'Ukraine', 'coefficient' => 47, 'pot' => 4,  'group' => 'E']);
        Team::updateOrCreate(['id' => 12], ['id' => 12, 'name' => 'Inter Milan', 'short_name' => '', 'country' => 'Italy', 'coefficient' => 53, 'pot' => 1,  'group' => 'D']);
        Team::updateOrCreate(['id' => 13], ['id' => 13, 'name' => 'Juventus', 'short_name' => '', 'country' => 'Italy', 'coefficient' => 120, 'pot' => 2,  'group' => 'H']);
        Team::updateOrCreate(['id' => 14], ['id' => 14, 'name' => 'Lille', 'short_name' => '', 'country' => 'France', 'coefficient' => 14, 'pot' => 1,  'group' => 'G']);
        Team::updateOrCreate(['id' => 15], ['id' => 15, 'name' => 'Liverpool', 'short_name' => '', 'country' => 'England', 'coefficient' => 101, 'pot' => 2,  'group' => 'B']);
        Team::updateOrCreate(['id' => 16], ['id' => 16, 'name' => 'Malmo FF', 'short_name' => '', 'country' => 'Sweden', 'coefficient' => 18, 'pot' => 4,  'group' => 'H']);
        Team::updateOrCreate(['id' => 17], ['id' => 17, 'name' => 'Manchester City', 'short_name' => '', 'country' => 'England', 'coefficient' => 125, 'pot' => 1,  'group' => 'A']);
        Team::updateOrCreate(['id' => 18], ['id' => 18, 'name' => 'Manchester United', 'short_name' => '', 'country' => 'England', 'coefficient' => 112, 'pot' => 2,  'group' => 'F']);
        Team::updateOrCreate(['id' => 19], ['id' => 19, 'name' => 'AC Milan', 'short_name' => '', 'country' => 'Italy', 'coefficient' => 31, 'pot' => 4,  'group' => 'B']);
        Team::updateOrCreate(['id' => 20], ['id' => 20, 'name' => 'Paris Saint-Germain', 'short_name' => '', 'country' => 'France', 'coefficient' => 113, 'pot' => 2,  'group' => 'A']);
        Team::updateOrCreate(['id' => 21], ['id' => 21, 'name' => 'Porto', 'short_name' => '', 'country' => 'Portugal', 'coefficient' => 87, 'pot' => 3,  'group' => 'B']);
        Team::updateOrCreate(['id' => 22], ['id' => 22, 'name' => 'RB Leipzig', 'short_name' => '', 'country' => 'Germany', 'coefficient' => 66, 'pot' => 3,  'group' => 'A']);
        Team::updateOrCreate(['id' => 23], ['id' => 23, 'name' => 'RB Salzburg', 'short_name' => '', 'country' => 'Austria', 'coefficient' => 59, 'pot' => 3,  'group' => 'G']);
        Team::updateOrCreate(['id' => 24], ['id' => 24, 'name' => 'Real Madrid', 'short_name' => '', 'country' => 'Spain', 'coefficient' => 127, 'pot' => 2,  'group' => 'D']);
        Team::updateOrCreate(['id' => 25], ['id' => 25, 'name' => 'Sevilla', 'short_name' => '', 'country' => 'Spain', 'coefficient' => 98, 'pot' => 2,  'group' => 'G']);
        Team::updateOrCreate(['id' => 26], ['id' => 26, 'name' => 'Shakhtar Donetsk', 'short_name' => '', 'country' => 'Ukraine', 'coefficient' => 79, 'pot' => 3,  'group' => 'D']);
        Team::updateOrCreate(['id' => 27], ['id' => 27, 'name' => 'Sheriff Tiraspol', 'short_name' => '', 'country' => 'Moldova', 'coefficient' => 14, 'pot' => 4, 'group' => 'D']);
        Team::updateOrCreate(['id' => 28], ['id' => 28, 'name' => 'Sporting CP', 'short_name' => '', 'country' => 'Portugal', 'coefficient' => 45, 'pot' => 1,  'group' => 'C']);
        Team::updateOrCreate(['id' => 29], ['id' => 29, 'name' => 'VfL Wolfsburg', 'short_name' => '', 'country' => 'Germany', 'coefficient' => 14, 'pot' => 4,  'group' => 'G']);
        Team::updateOrCreate(['id' => 30], ['id' => 30, 'name' => 'Villarreal', 'short_name' => '', 'country' => 'Spain', 'coefficient' => 63, 'pot' => 1,  'group' => 'F']);
        Team::updateOrCreate(['id' => 31], ['id' => 31, 'name' => 'Young Boys', 'short_name' => '', 'country' => 'Switzerland', 'coefficient' => 35, 'pot' => 4,  'group' => 'F']);
        Team::updateOrCreate(['id' => 32], ['id' => 32, 'name' => 'Zenit St. Petersburg', 'short_name' => '', 'country' => 'Russia', 'coefficient' => 50, 'pot' => 3, 'group' => 'H']);
    }
}
