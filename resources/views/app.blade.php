<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>

    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
    <!--AngularJS-->
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.12/angular.min.js"></script>
    <script src="js/app.js"></script>

    <!-- Fonts -->
    <link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
        .container, .table, tbody, tr {
            width: 960px;
            position: relative;
            display: inline-block;
            
        }
            
        tr {
            /*display: table-row;*/
            width: 960px;
            position: relative;
            border-bottom: 1px solid #afafaf;
            overflow:hidden;
            border-collapse: seperate;
            border-spacing: 4px;
            border: 1px solid #cfcfcf;
            height: 100px;

        }
        tr:first-child {
            height: 50px;
            text-transform: uppercase;
            background-color: #98ceca;
        }
        tr td {
            font-size:12px;
            height: 100px;
            width: 31%;
            position:relative;
            display: inline-block;
            overflow-x: scroll;
            border-spacing: 4px;
            border-left: 1px solid #cfcfcf;
            border-right: 1px solid #cfcfcf;


        }
        tr div {
            display: inline-block;
        }
        tr:nth-child(odd) {
            background-color: #f3f3f3;
        }
        ::-webkit-scrollbar {
            width: 10px;
            height: 10px;
        }
        ::-webkit-scrollbar-track {
            background-color: #efefef;
            
            padding: 1px;
        } /* the new scrollbar will have a flat appearance with the set background color */
         
        ::-webkit-scrollbar-thumb {
              background-color: rgba(0, 0, 0, 0.2);
              border: 1px solid #b3b3b3; 
        } /* this will style the thumb, ignoring the track */
         
        ::-webkit-scrollbar-button {
              background-color: #efefef;

        } /* optionally, you can style the top and the bottom buttons (left and right for horizontal bars) */
                
        ::-webkit-scrollbar-corner {
              background-color: transparent;
        } 
    </style>
</head>
<body>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Laravel</a>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li><a href="{{ url('/') }}">Home</a></li>
                </ul>

                <ul class="nav navbar-nav navbar-right">
                    @if (Auth::guest())
                        <li><a href="{{ url('/auth/login') }}">Login</a></li>
                        <li><a href="{{ url('/auth/register') }}">Register</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/auth/logout') }}">Logout</a></li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>

    @yield('content')

    <!-- Scripts -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
</body>
</html>
