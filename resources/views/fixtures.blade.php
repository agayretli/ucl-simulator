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
            <h1>Generated Fixtures</h1>
        </div>
        <div class="row align-items-center justify-content-md-center">
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
                    <div class="col-sm">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Week 1</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($fixtures->where('week',1)->where('group','A') as $fixture)
                                    <tr>                                        
                                        <td>{{ $fixture->home }}</td>
                                        <td>{{ $fixture->away }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="col-sm">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Week 2</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($fixtures->where('week',2)->where('group','A') as $fixture)
                                    <tr>                                        
                                        <td>{{ $fixture->home }}</td>
                                        <td>{{ $fixture->away }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="col-sm">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Week 3</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($fixtures->where('week',3)->where('group','A') as $fixture)
                                    <tr>                                        
                                        <td>{{ $fixture->home }}</td>
                                        <td>{{ $fixture->away }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="col-sm">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Week 4</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($fixtures->where('week',4)->where('group','A') as $fixture)
                                    <tr>                                        
                                        <td>{{ $fixture->home }}</td>
                                        <td>{{ $fixture->away }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="col-sm">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Week 5</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($fixtures->where('week',5)->where('group','A') as $fixture)
                                    <tr>                                        
                                        <td>{{ $fixture->home }}</td>
                                        <td>{{ $fixture->away }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="col-sm">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Week 6</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($fixtures->where('week',6)->where('group','A') as $fixture)
                                    <tr>                                        
                                        <td>{{ $fixture->home }}</td>
                                        <td>{{ $fixture->away }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="tab-pane" id="B" role="tabpanel">
                    <div class="col-sm">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Week 1</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($fixtures->where('week',1)->where('group','B') as $fixture)
                                    <tr>                                        
                                        <td>{{ $fixture->home }}</td>
                                        <td>{{ $fixture->away }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="col-sm">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Week 2</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($fixtures->where('week',2)->where('group','B') as $fixture)
                                    <tr>                                        
                                        <td>{{ $fixture->home }}</td>
                                        <td>{{ $fixture->away }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="col-sm">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Week 3</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($fixtures->where('week',3)->where('group','B') as $fixture)
                                    <tr>                                        
                                        <td>{{ $fixture->home }}</td>
                                        <td>{{ $fixture->away }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="col-sm">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Week 4</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($fixtures->where('week',4)->where('group','B') as $fixture)
                                    <tr>                                        
                                        <td>{{ $fixture->home }}</td>
                                        <td>{{ $fixture->away }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="col-sm">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Week 5</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($fixtures->where('week',5)->where('group','B') as $fixture)
                                    <tr>                                        
                                        <td>{{ $fixture->home }}</td>
                                        <td>{{ $fixture->away }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="col-sm">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Week 6</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($fixtures->where('week',6)->where('group','B') as $fixture)
                                    <tr>                                        
                                        <td>{{ $fixture->home }}</td>
                                        <td>{{ $fixture->away }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="tab-pane" id="C" role="tabpanel">
                    <div class="col-sm">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Week 1</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($fixtures->where('week',1)->where('group','C') as $fixture)
                                    <tr>                                        
                                        <td>{{ $fixture->home }}</td>
                                        <td>{{ $fixture->away }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="col-sm">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Week 2</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($fixtures->where('week',2)->where('group','C') as $fixture)
                                    <tr>                                        
                                        <td>{{ $fixture->home }}</td>
                                        <td>{{ $fixture->away }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="col-sm">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Week 3</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($fixtures->where('week',3)->where('group','C') as $fixture)
                                    <tr>                                        
                                        <td>{{ $fixture->home }}</td>
                                        <td>{{ $fixture->away }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="col-sm">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Week 4</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($fixtures->where('week',4)->where('group','C') as $fixture)
                                    <tr>                                        
                                        <td>{{ $fixture->home }}</td>
                                        <td>{{ $fixture->away }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="col-sm">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Week 5</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($fixtures->where('week',5)->where('group','C') as $fixture)
                                    <tr>                                        
                                        <td>{{ $fixture->home }}</td>
                                        <td>{{ $fixture->away }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="col-sm">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Week 6</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($fixtures->where('week',6)->where('group','C') as $fixture)
                                    <tr>                                        
                                        <td>{{ $fixture->home }}</td>
                                        <td>{{ $fixture->away }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="tab-pane" id="D" role="tabpanel">
                    <div class="col-sm">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Week 1</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($fixtures->where('week',1)->where('group','D') as $fixture)
                                    <tr>                                        
                                        <td>{{ $fixture->home }}</td>
                                        <td>{{ $fixture->away }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="col-sm">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Week 2</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($fixtures->where('week',2)->where('group','D') as $fixture)
                                    <tr>                                        
                                        <td>{{ $fixture->home }}</td>
                                        <td>{{ $fixture->away }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="col-sm">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Week 3</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($fixtures->where('week',3)->where('group','D') as $fixture)
                                    <tr>                                        
                                        <td>{{ $fixture->home }}</td>
                                        <td>{{ $fixture->away }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="col-sm">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Week 4</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($fixtures->where('week',4)->where('group','D') as $fixture)
                                    <tr>                                        
                                        <td>{{ $fixture->home }}</td>
                                        <td>{{ $fixture->away }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="col-sm">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Week 5</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($fixtures->where('week',5)->where('group','D') as $fixture)
                                    <tr>                                        
                                        <td>{{ $fixture->home }}</td>
                                        <td>{{ $fixture->away }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="col-sm">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Week 6</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($fixtures->where('week',6)->where('group','D') as $fixture)
                                    <tr>                                        
                                        <td>{{ $fixture->home }}</td>
                                        <td>{{ $fixture->away }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="tab-pane" id="E" role="tabpanel">
                    <div class="col-sm">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Week 1</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($fixtures->where('week',1)->where('group','E') as $fixture)
                                    <tr>                                        
                                        <td>{{ $fixture->home }}</td>
                                        <td>{{ $fixture->away }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="col-sm">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Week 2</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($fixtures->where('week',2)->where('group','E') as $fixture)
                                    <tr>                                        
                                        <td>{{ $fixture->home }}</td>
                                        <td>{{ $fixture->away }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="col-sm">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Week 3</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($fixtures->where('week',3)->where('group','E') as $fixture)
                                    <tr>                                        
                                        <td>{{ $fixture->home }}</td>
                                        <td>{{ $fixture->away }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="col-sm">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Week 4</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($fixtures->where('week',4)->where('group','E') as $fixture)
                                    <tr>                                        
                                        <td>{{ $fixture->home }}</td>
                                        <td>{{ $fixture->away }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="col-sm">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Week 5</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($fixtures->where('week',5)->where('group','E') as $fixture)
                                    <tr>                                        
                                        <td>{{ $fixture->home }}</td>
                                        <td>{{ $fixture->away }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="col-sm">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Week 6</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($fixtures->where('week',6)->where('group','E') as $fixture)
                                    <tr>                                        
                                        <td>{{ $fixture->home }}</td>
                                        <td>{{ $fixture->away }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="tab-pane" id="F" role="tabpanel">
                    <div class="col-sm">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Week 1</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($fixtures->where('week',1)->where('group','F') as $fixture)
                                    <tr>                                        
                                        <td>{{ $fixture->home }}</td>
                                        <td>{{ $fixture->away }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="col-sm">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Week 2</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($fixtures->where('week',2)->where('group','F') as $fixture)
                                    <tr>                                        
                                        <td>{{ $fixture->home }}</td>
                                        <td>{{ $fixture->away }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="col-sm">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Week 3</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($fixtures->where('week',3)->where('group','F') as $fixture)
                                    <tr>                                        
                                        <td>{{ $fixture->home }}</td>
                                        <td>{{ $fixture->away }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="col-sm">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Week 4</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($fixtures->where('week',4)->where('group','F') as $fixture)
                                    <tr>                                        
                                        <td>{{ $fixture->home }}</td>
                                        <td>{{ $fixture->away }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="col-sm">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Week 5</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($fixtures->where('week',5)->where('group','F') as $fixture)
                                    <tr>                                        
                                        <td>{{ $fixture->home }}</td>
                                        <td>{{ $fixture->away }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="col-sm">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Week 6</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($fixtures->where('week',6)->where('group','F') as $fixture)
                                    <tr>                                        
                                        <td>{{ $fixture->home }}</td>
                                        <td>{{ $fixture->away }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="tab-pane" id="G" role="tabpanel">
                    <div class="col-sm">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Week 1</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($fixtures->where('week',1)->where('group','G') as $fixture)
                                    <tr>                                        
                                        <td>{{ $fixture->home }}</td>
                                        <td>{{ $fixture->away }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="col-sm">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Week 2</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($fixtures->where('week',2)->where('group','G') as $fixture)
                                    <tr>                                        
                                        <td>{{ $fixture->home }}</td>
                                        <td>{{ $fixture->away }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="col-sm">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Week 3</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($fixtures->where('week',3)->where('group','G') as $fixture)
                                    <tr>                                        
                                        <td>{{ $fixture->home }}</td>
                                        <td>{{ $fixture->away }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="col-sm">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Week 4</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($fixtures->where('week',4)->where('group','G') as $fixture)
                                    <tr>                                        
                                        <td>{{ $fixture->home }}</td>
                                        <td>{{ $fixture->away }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="col-sm">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Week 5</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($fixtures->where('week',5)->where('group','G') as $fixture)
                                    <tr>                                        
                                        <td>{{ $fixture->home }}</td>
                                        <td>{{ $fixture->away }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="col-sm">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Week 6</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($fixtures->where('week',6)->where('group','G') as $fixture)
                                    <tr>                                        
                                        <td>{{ $fixture->home }}</td>
                                        <td>{{ $fixture->away }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="tab-pane" id="H" role="tabpanel">
                    <div class="col-sm">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Week 1</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($fixtures->where('week',1)->where('group','H') as $fixture)
                                    <tr>                                        
                                        <td>{{ $fixture->home }}</td>
                                        <td>{{ $fixture->away }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="col-sm">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Week 2</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($fixtures->where('week',2)->where('group','H') as $fixture)
                                    <tr>                                        
                                        <td>{{ $fixture->home }}</td>
                                        <td>{{ $fixture->away }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="col-sm">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Week 3</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($fixtures->where('week',3)->where('group','H') as $fixture)
                                    <tr>                                        
                                        <td>{{ $fixture->home }}</td>
                                        <td>{{ $fixture->away }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="col-sm">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Week 4</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($fixtures->where('week',4)->where('group','H') as $fixture)
                                    <tr>                                        
                                        <td>{{ $fixture->home }}</td>
                                        <td>{{ $fixture->away }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="col-sm">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Week 5</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($fixtures->where('week',5)->where('group','H') as $fixture)
                                    <tr>                                        
                                        <td>{{ $fixture->home }}</td>
                                        <td>{{ $fixture->away }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="col-sm">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Week 6</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($fixtures->where('week',6)->where('group','H') as $fixture)
                                    <tr>                                        
                                        <td>{{ $fixture->home }}</td>
                                        <td>{{ $fixture->away }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="row align-items-end justify-content-md-center">
            <a role="button" href="{{route('start.simulation')}}" class="btn btn-primary">Start Simulation</a>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>