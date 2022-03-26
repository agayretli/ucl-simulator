<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>UCL Simulator</title>
  </head>
  <body>
    <div class="container">
        <div class="row align-items-start justify-content-md-center">
            <div class="row">
                <div class="col">
                    <h1>Simulation</h1>
                </div>
            </div>
        </div>
        <div class="row align-items-center justify-content-md-center">
            <div class="row">
                <div class="col">
                    <div class="nav-tabs-horizontal" data-plugin="tabs">
                        <ul class="nav nav-tabs nav-tabs-solid" role="tablist">
                        <li class="nav-item" role="presentation"><a class="nav-link active" data-toggle="tab" href="#A" aria-controls="A" role="tab" aria-selected="true">A</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" data-toggle="tab" href="#B" aria-controls="B" role="tab" aria-selected="false">B</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" data-toggle="tab" href="#C" aria-controls="C" role="tab" aria-selected="false">C</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" data-toggle="tab" href="#D" aria-controls="D" role="tab" aria-selected="false">D</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" data-toggle="tab" href="#E" aria-controls="E" role="tab" aria-selected="false">E</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" data-toggle="tab" href="#F" aria-controls="F" role="tab" aria-selected="false">F</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" data-toggle="tab" href="#G" aria-controls="G" role="tab" aria-selected="false">G</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" data-toggle="tab" href="#H" aria-controls="H" role="tab" aria-selected="false">H</a></li>
                        </ul>
                        <div class="tab-content">
                        <div class="tab-pane active" id="A" role="tabpanel">
                            <div class="col">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">Team Name</th>
                                            <th scope="col">P</th>
                                            <th scope="col">W</th>
                                            <th scope="col">D</th>
                                            <th scope="col">L</th>
                                            <th scope="col">GD</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($points->where('group','A') as $point)
                                            <tr>                                        
                                                <td>{{ $point->name }}</td>
                                                <td>{{ $point->points }}</td>
                                                <td>{{ $point->won }}</td>
                                                <td>{{ $point->drawn }}</td>
                                                <td>{{ $point->lost }}</td>
                                                <td>{{ $point->goal_difference }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="col">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">Match Results</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($fixtures->where('group','A') as $fixture)
                                            <tr>                                        
                                                <td>{{ $fixture->home }}</td>
                                                <td>{{ $fixture->home_score }}</td>
                                                <td>{{ $fixture->away_score }}</td>
                                                <td>{{ $fixture->away }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="col">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">Championship Predictions</th>
                                            <th scope="col">%</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($points->where('group','A') as $point)
                                            <tr>                                        
                                                <td>{{ $point->name }}</td>
                                                <td>{{ $point->prediction }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="tab-pane" id="B" role="tabpanel">
                            <div class="col">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">Team Name</th>
                                            <th scope="col">P</th>
                                            <th scope="col">W</th>
                                            <th scope="col">D</th>
                                            <th scope="col">L</th>
                                            <th scope="col">GD</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($points->where('group','B') as $point)
                                            <tr>                                        
                                                <td>{{ $point->name }}</td>
                                                <td>{{ $point->points }}</td>
                                                <td>{{ $point->won }}</td>
                                                <td>{{ $point->drawn }}</td>
                                                <td>{{ $point->lost }}</td>
                                                <td>{{ $point->goal_difference }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="col">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">Match Results</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($fixtures->where('group','B') as $fixture)
                                            <tr>                                        
                                                <td>{{ $fixture->home }}</td>
                                                <td>{{ $fixture->home_score }}</td>
                                                <td>{{ $fixture->away_score }}</td>
                                                <td>{{ $fixture->away }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="col">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">Championship Predictions</th>
                                            <th scope="col">%</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($points->where('group','B') as $point)
                                            <tr>                                        
                                                <td>{{ $point->name }}</td>
                                                <td>{{ $point->prediction }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="tab-pane" id="C" role="tabpanel">
                            <div class="col">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">Team Name</th>
                                            <th scope="col">P</th>
                                            <th scope="col">W</th>
                                            <th scope="col">D</th>
                                            <th scope="col">L</th>
                                            <th scope="col">GD</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($points->where('group','C') as $point)
                                            <tr>                                        
                                                <td>{{ $point->name }}</td>
                                                <td>{{ $point->points }}</td>
                                                <td>{{ $point->won }}</td>
                                                <td>{{ $point->drawn }}</td>
                                                <td>{{ $point->lost }}</td>
                                                <td>{{ $point->goal_difference }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="col">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">Match Results</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($fixtures->where('group','C') as $fixture)
                                            <tr>                                        
                                                <td>{{ $fixture->home }}</td>
                                                <td>{{ $fixture->home_score }}</td>
                                                <td>{{ $fixture->away_score }}</td>
                                                <td>{{ $fixture->away }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="col">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">Championship Predictions</th>
                                            <th scope="col">%</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($points->where('group','C') as $point)
                                            <tr>                                        
                                                <td>{{ $point->name }}</td>
                                                <td>{{ $point->prediction }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="tab-pane" id="D" role="tabpanel">
                            <div class="col">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">Team Name</th>
                                            <th scope="col">P</th>
                                            <th scope="col">W</th>
                                            <th scope="col">D</th>
                                            <th scope="col">L</th>
                                            <th scope="col">GD</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($points->where('group','D') as $point)
                                            <tr>                                        
                                                <td>{{ $point->name }}</td>
                                                <td>{{ $point->points }}</td>
                                                <td>{{ $point->won }}</td>
                                                <td>{{ $point->drawn }}</td>
                                                <td>{{ $point->lost }}</td>
                                                <td>{{ $point->goal_difference }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="col">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">Match Results</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($fixtures->where('group','D') as $fixture)
                                            <tr>                                        
                                                <td>{{ $fixture->home }}</td>
                                                <td>{{ $fixture->home_score }}</td>
                                                <td>{{ $fixture->away_score }}</td>
                                                <td>{{ $fixture->away }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="col">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">Championship Predictions</th>
                                            <th scope="col">%</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($points->where('group','D') as $point)
                                            <tr>                                        
                                                <td>{{ $point->name }}</td>
                                                <td>{{ $point->prediction }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="tab-pane" id="E" role="tabpanel">
                            <div class="col">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">Team Name</th>
                                            <th scope="col">P</th>
                                            <th scope="col">W</th>
                                            <th scope="col">D</th>
                                            <th scope="col">L</th>
                                            <th scope="col">GD</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($points->where('group','E') as $point)
                                            <tr>                                        
                                                <td>{{ $point->name }}</td>
                                                <td>{{ $point->points }}</td>
                                                <td>{{ $point->won }}</td>
                                                <td>{{ $point->drawn }}</td>
                                                <td>{{ $point->lost }}</td>
                                                <td>{{ $point->goal_difference }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="col">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">Match Results</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($fixtures->where('group','E') as $fixture)
                                            <tr>                                        
                                                <td>{{ $fixture->home }}</td>
                                                <td>{{ $fixture->home_score }}</td>
                                                <td>{{ $fixture->away_score }}</td>
                                                <td>{{ $fixture->away }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="col">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">Championship Predictions</th>
                                            <th scope="col">%</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($points->where('group','E') as $point)
                                            <tr>                                        
                                                <td>{{ $point->name }}</td>
                                                <td>{{ $point->prediction }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="tab-pane" id="F" role="tabpanel">
                            <div class="col">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">Team Name</th>
                                            <th scope="col">P</th>
                                            <th scope="col">W</th>
                                            <th scope="col">D</th>
                                            <th scope="col">L</th>
                                            <th scope="col">GD</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($points->where('group','F') as $point)
                                            <tr>                                        
                                                <td>{{ $point->name }}</td>
                                                <td>{{ $point->points }}</td>
                                                <td>{{ $point->won }}</td>
                                                <td>{{ $point->drawn }}</td>
                                                <td>{{ $point->lost }}</td>
                                                <td>{{ $point->goal_difference }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="col">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">Match Results</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($fixtures->where('group','F') as $fixture)
                                            <tr>                                        
                                                <td>{{ $fixture->home }}</td>
                                                <td>{{ $fixture->home_score }}</td>
                                                <td>{{ $fixture->away_score }}</td>
                                                <td>{{ $fixture->away }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="col">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">Championship Predictions</th>
                                            <th scope="col">%</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($points->where('group','F') as $point)
                                            <tr>                                        
                                                <td>{{ $point->name }}</td>
                                                <td>{{ $point->prediction }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="tab-pane" id="G" role="tabpanel">
                            <div class="col">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">Team Name</th>
                                            <th scope="col">P</th>
                                            <th scope="col">W</th>
                                            <th scope="col">D</th>
                                            <th scope="col">L</th>
                                            <th scope="col">GD</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($points->where('group','G') as $point)
                                            <tr>                                        
                                                <td>{{ $point->name }}</td>
                                                <td>{{ $point->points }}</td>
                                                <td>{{ $point->won }}</td>
                                                <td>{{ $point->drawn }}</td>
                                                <td>{{ $point->lost }}</td>
                                                <td>{{ $point->goal_difference }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="col">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">Match Results</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($fixtures->where('group','G') as $fixture)
                                            <tr>                                        
                                                <td>{{ $fixture->home }}</td>
                                                <td>{{ $fixture->home_score }}</td>
                                                <td>{{ $fixture->away_score }}</td>
                                                <td>{{ $fixture->away }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="col">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">Championship Predictions</th>
                                            <th scope="col">%</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($points->where('group','G') as $point)
                                            <tr>                                        
                                                <td>{{ $point->name }}</td>
                                                <td>{{ $point->prediction }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="tab-pane" id="H" role="tabpanel">
                            <div class="col">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">Team Name</th>
                                            <th scope="col">P</th>
                                            <th scope="col">W</th>
                                            <th scope="col">D</th>
                                            <th scope="col">L</th>
                                            <th scope="col">GD</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($points->where('group','H') as $point)
                                            <tr>                                        
                                                <td>{{ $point->name }}</td>
                                                <td>{{ $point->points }}</td>
                                                <td>{{ $point->won }}</td>
                                                <td>{{ $point->drawn }}</td>
                                                <td>{{ $point->lost }}</td>
                                                <td>{{ $point->goal_difference }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="col">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">Match Results</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($fixtures->where('group','H') as $fixture)
                                            <tr>                                        
                                                <td>{{ $fixture->home }}</td>
                                                <td>{{ $fixture->home_score }}</td>
                                                <td>{{ $fixture->away_score }}</td>
                                                <td>{{ $fixture->away }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="col">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">Championship Predictions</th>
                                            <th scope="col">%</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($points->where('group','H') as $point)
                                            <tr>                                        
                                                <td>{{ $point->name }}</td>
                                                <td>{{ $point->prediction }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <a role="button" href="{{route('play.all.weeks')}}" class="btn btn-primary">Play All Weeks</a>
            </div>
            <div class="col">
                <a role="button" href="{{route('play.next.week')}}" class="btn btn-primary">Play Next Week</a>
            </div>
            <div class="col">
                <a role="button" href="{{route('reset.data')}}" class="btn btn-danger">Reset Data</a>
            </div>
        </div>
    </div>
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>