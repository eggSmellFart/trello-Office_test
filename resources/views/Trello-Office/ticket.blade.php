@extends('app')
@section('content')

<div class="container" ng-app="Trello-Office" ng-controller="TicketController">
	<h1>Trello-Office</h1>
	<div class="row">
		<table class="table table-striped">
			<h3>Ticket->View</h3>
			<tr>
				<td>Name</td>
				<td>Beschreibung</td>
				<td>URL</td>
			</tr>
			<tr ng-repeat="ticket in tickets">
				<td><div><% ticket.name %></div></td>
				<td><div><% ticket.desc %></div></td>
				<td><div><% ticket.url %></div></td>
			</tr>
		</table>
	</div>
</div>
@endsection