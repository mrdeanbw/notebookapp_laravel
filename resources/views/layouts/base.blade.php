<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>NoteBook App</title>
    <link rel="stylesheet" href="{{ asset('dist/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/css/bootstrap.css') }}">
</head>
<body>
    <div class="container-fluid">
        <nav class="navbar  navbar-dark bg-primary">
            <button class="navbar-toggler hidden-sm-up" type="button" data-toggle="collapse" data-target="#navbar-header" aria-controls="navbar-header">
                &#9776;
            </button>
            <div class="collapse navbar-toggleable-xs pull-xs-left" id="navbar-header">
                <a class="navbar-brand" href="{{ route('notebooks.frontpage') }}">NoteBook App</a>
            </div>
            <div  class="navholder dropdown pull-xs-right">
                    @if (Auth::guest())
                    
                        <a style="color:white" href="{{ url('/login') }}">
                            Login
                        </a>

                        &nbsp;&nbsp;
                    
                   
                        <a style="color:white" href="{{ url('/register') }}">
                            Register
                        </a>
                    
                    @else
                    <a class=" navholder dropdown-toggle" data-toggle="dropdown" href="#" id="dropdownMenuButton">
                        {{ ucfirst(Auth::user()->name) }}
                        <span class="caret">
                        </span>
                    </a>
                    <div aria-labelledby="dropdownMenuButton" class="navholder-menu dropdown-menu">
                        <a class="dropdown-item" href="{{ url('/logout') }}" onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                            Logout
                        </a>
                        <form action="{{ url('/logout') }}" id="logout-form" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </div>
                    @endif
                </div>
            </nav>
        <!-- /navbar -->
        <!-- Main component for call to action -->
        @yield('content')
    </div>
    <!-- /container -->

    <script src="{{ asset('dist/js/jquery3.min.js') }}"></script>
    <script src="{{ asset('dist/js/bootstrap.js') }}"></script>
</body>

</html>