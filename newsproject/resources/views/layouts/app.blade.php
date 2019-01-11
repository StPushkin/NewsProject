<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Articles</title>
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
    <link href="{{URL::to('bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>
    <div id="app" class="container">
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark">               
                    <ul class="navbar-nav">                 
                        <li class="nav-item"><a class="nav-link" href="{{ url('/welcom') }}">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ url('/categories') }}">Categories</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ url('/articletop') }}">Top News</a></li>
                    </ul>
                    <ul class="nav navbar-nav ml-auto">
                        @if (Auth::guest())
                            <li class="nav-item"><a class="nav-link" href="{{ url('/login') }}">Login</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ url('/register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ url('/logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>
                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>               
            </nav>
        </div>
    <div class="container">
        @yield('content')
    </div>
    <script src="/js/app.js"></script>
</body>
</html>
