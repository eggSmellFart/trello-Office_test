@extends('app')
@section('content')

<div class="container" ng-app="Trello-Office" ng-controller="CardsController">
	<h1>Trello-Office</h1>
	<div class="row">
		<table class="table table-striped">
			<h3>Overview</h3>
			<tr>
				<td>Name</td>
				<td>Beschreibung</td>
				<td>URL</td>
			</tr>
			<tr ng-repeat="board in boards">
				<td><div><% board.name %></div></td>
				<td><div><% board.desc %></div></td>
				<td><div><% board.url %></div></td>
			</tr>
		</table>
	</div>
</div>


@endsection