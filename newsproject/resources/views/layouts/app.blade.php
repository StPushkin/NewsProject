<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
 
    <title>Articles</title>
    <!-- Styles -->
    <!--<link href="/css/app.css" rel="stylesheet">-->
    <link href="{{URL::to('bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Scripts -->
 
</head>
<body>
    <div id="app" class="container">
        <nav class="navbar navbar-inverse navbar-static-top container-fluid">
                   
                    <ul class="nav navbar-nav">                 
                        <li><a href="{{ url('/welcom') }}">Home</a></li>
                        <li><a href="{{ url('/articles') }}">Articles</a></li>
                        
                 
                    </ul>
                   
                   
            </nav>
        </div>
    <div class="container">
        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="/js/app.js"></script>
</body>
</html>
