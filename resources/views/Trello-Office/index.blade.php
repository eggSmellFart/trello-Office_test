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
			<tr ng-repeat="card in cards">
				<td><div><% card.name %></div></td>
				<td><div><% card.desc %></div></td>
				<td><div><% card.url %></div></td>
			</tr>
		</table>
	</div>
</div>


@endsection