var app = angular.module('Trello-Office', [], function ($interpolateProvider) {
	$interpolateProvider.startSymbol('<%');
	$interpolateProvider.endSymbol('%>');
});

// app.config(function($routeProvider, $locationProvider) {
// 	$routeProvider
// 		.when('/', {
// 			templateUrl: '/resources/views/Trello-Office/index',
// 			controller: 'CardsController'
// 		})

// 		.when('/cards', {
// 			templateUrl: '/resources/views/Trello-Office/ticket',
// 			controllerL: 'TicketController'
// 		})
// }


app.controller('CardsController', function ($scope, $http) {
	$scope.cards = [];
	$scope.loading = false;
	$scope.tickets  = [];


	$scope.init = function () {
		$scope.loading = true;
		$http.get('api/Cards').success(function (data, status, headers, config) {
		 	$scope.cards = data;
		 		$scope.loading = false;
		});
	}
	$scope.init();
});


app.controller('TicketController', function ($scope, $http) {
	$scope.tickets = [];
	$scope.loading = false;
	$scope.init = function () {
		$scope.loading = true;
		$http.get('api/Ticket').success(function (data, status, headers, config) {
		 	$scope.tickets = data;
		 		$scope.loading = false;
		});
		
	}
	$scope.init();
});

