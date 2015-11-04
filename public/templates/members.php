<!-- @extends('app')
@section('content') -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>

    <link href="/css/main.css" rel="stylesheet">
    <!--AngularJS-->
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.12/angular.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.3.12/angular-route.js"></script>

    <script src="../js/app.js"></script>

    <!-- Fonts -->
    <link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
     
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
                    <li><a href="/">Home</a></li>
                    <li><a href="/Trello-Office/boards">Boards der letzten 3 Monate</a></li>
                </ul>

                <ul class="nav navbar-nav navbar-right">

            </div>
        </div>
    </nav>

    <div class="container" ng-app="TrelloOffice" ng-controller="AngularMembersController">
    	<h1>Trello-Office</h1>
    	<div class="row">
    		<table class="table table-striped">
    			<h3>Members</h3>
    			<tr>
    				<td>Name</td>
    				<td>Beschreibung</td>
    				<td>URL</td>
    			</tr>
    			<tr ng-repeat="member in member">
    				<td><div><% member.id %></div></td>
    				<td><div><% member.role %></div></td>
    				<td><div><% member.username %></div></td>
    			</tr>
    		</table>
    	</div>
    </div>

    <!-- Scripts -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
</body>
</html>


<!-- @endsection
 -->