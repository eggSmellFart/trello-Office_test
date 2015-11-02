var app = angular.module("TrelloOffice", ['ngRoute']).config(function($routeProvider, $interpolateProvider){

    $interpolateProvider.startSymbol('<%');
    $interpolateProvider.endSymbol('%>');

    app.config(function($routeProvider) {
        $routeProvider

        // route for homepage 
        .when('Trello_Office/cards', {
            controller: 'AngularCardsController'
        })

        .when('Trello_Office/boards', {
            controller: 'AngularBoardsController'
        })

    });

});



app.controller('AngularCardsController',['$scope', '$http', function ($scope, $http){ 
    $scope.cards = [];
    $scope.loading = false;
    $scope.init = function () {
        $scope.loading = true;
        $http.get('/api/Cards').then(function successCallback(response) {
            console.log(response);
            console.log('success');
            $scope.cards = response.data;
            var data = response.data;
        }, function errorCallback (response) {
            console.log('error');
        });
        // $http.get('api/Cards').success(function (data, status, headers, config) {
        //     $scope.cards = data;
        //     $scope.loading = false;
        // });
        
    }
    $scope.init();
}]);


app.controller('AngularBoardsController',['$scope', '$http', function ($scope, $http){ 
    $scope.boards = [];
    $scope.loading = false;
    $scope.init = function () {
        $scope.loading = true;
        $http.get('/api/Boards').then(function successCallback(response) {
            console.log(response);
            console.log('success');
            $scope.boards = response.data;
            var data = response.data;
        }, function errorCallback (response) {
            console.log('error');
        });
        // $http.get('api/Cards').success(function (data, status, headers, config) {
        //     $scope.cards = data;
        //     $scope.loading = false;
        // });
        
    }
    $scope.init();
}]);



/* ================================================================================================== */

// var constantsHelper = {};

// var app = angular.module('Trello-Office', ['ngRoute', 'CardsController', 'CardsService']);

// app.config(function($routeProvider){
//     $routeProvider.when("/",
//         {
//             templateUrl: "public/templates/home.html",
//             controller: "CardsController"
//         }
//     );
// });


// angular.module('CardsController', []).controller('CardsController', function($scope, $http, Card) {
// 	Card.get()
// 		.success(function(data) {
// 			$scope.cards = data;
// 		});
// })


// angular.module('CardsService', [])

// .factory('Card', function($http) {

//     return {

//         // Get all the photos
//         get : function() {
//             return $http.get('/api/cards');
//         }

//     }

// });

/* ================================================================================================== */
// var app = angular.module('Trello-Office', ['ui.router','ngResource', 'infinte-scroll']);
// 	// $interpolateProvider.startSymbol('<%');
// 	// $interpolateProvider.endSymbol('%>');




// app.config(['',function($stateProvider, $urlRouterProvider) {	
// 	$stateProvider
// 		.state('main' ,{
// 			url: '/cards',
// 			templateUrl: '/templates/home.html',
// 			controller: 'CardsController'
// 		});
// 		$urlRouterProvider.otherwise('/');
// }]);

// // app.config(function($routeProvider, $locationProvider) {
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


// app.factory('Card', function($resource) {
// 	return $resource(
// 		'card',
// 		null,
// 		{
// 			'get': {
// 				'method': 'GET', 
// 				{
// 					'params': {

// 					}
// 				}
// 			}
// 		}
// 	);
// });

// var card = new Card();
// card.$get({}) 


// app.controller('CardsController', ['$scope', '$http', function ($scope, $http) {
// 	$scope.cards = [];
// 	$scope.loading = false;
// 	$scope.tickets  = [];


// 	$scope.init = function () {
// 		$scope.loading = true;
// 		$http.get('api/Cards').success(function (data, status, headers, config) {
// 		 	$scope.cards = data;
// 		 		$scope.loading = false;
// 		});
// 	}
// 	$scope.init();
// }]);


// app.controller('BoardsController', function ($scope, $http) {
// 	$scope.boards = [];
// 	$scope.loading = false;
// 	$scope.init = function () {
// 		$scope.loading = true;
// 		$http.get('api/Boards').success(function (data, status, headers, config) {
// 		 	$scope.boards = data;
// 		 		$scope.loading = false;
// 		});
		
// 	}
// 	$scope.init();
// });

