var app = angular.module("TrelloOffice", ['ngRoute']).config(function($routeProvider, $interpolateProvider, $locationProvider ){

    $interpolateProvider.startSymbol('<%');
    $interpolateProvider.endSymbol('%>');

    app.config(function($routeProvider, $locationProvider) {

//         app.provider('members', function () {
//             var memberID = '';
//             return {
//                 setMemberID: function  (id) {
//                     memberID  = id;
//                 },
//                 $get: function () {
//                     memberURL = '/api/OneMember/' + memberID;
// console.log(memberURL)
//                     return memberURL; 
//                 }
//             }
//         })
        $routeProvider
        .when('Trello-Office/cards', {
            controller: 'AngularCardsController',
            controllerAs: 'Cards'
        })

        .when('Trello-Office/boards', {
            controller: 'AngularBoardsController',
            controllerAs: 'Boards'
        })

        .when('Trello-Office/members', {
            controller: 'AngularMembersController', 
            controllerAs: 'Members'
        })
        .when('Trello-Office/member/:memberID', {

            controller: 'AngularOneMemberController',
            controllerAs: 'oneMember'
        })
        .when('Trello-Office/members/cards', {
            controller: 'AngluarMembersToCardsController',
            controllerAs: 'cardsToMembers'
        })
        
    });

});


app.controller('AngularOneMemberController',['$scope', '$http','$route', '$location', function ($scope, $http, $route, $location ){ 
// console.log($location);
    $scope.member = [];
    $scope.loading = false;
    $scope.init = function () {
        $scope.loading = true;
        // apiURL = app.provider();
        // apiURL = '/api/OneMember/22';
        $http.get(/*'/api/OneMember/' + memberID*/ apiURL ).then(function successCallback(response) {
            console.log('success');
            $scope.member = response.data;
        }, function errorCallback (response) {
            console.log('error');
        });
        
        
    }
    $scope.init();
}]);


app.controller('AngularCardsController',['$scope', '$http', function ($scope, $http){ 
    $scope.cards = [];
    $scope.loading = false;
    $scope.init = function () {
        $scope.loading = true;
        $http.get('/api/Cards').then(function successCallback(response) {
            console.log('success');
            var data = response.data;
            $scope.cards = response.data;
        }, function errorCallback (response) {
            console.log('error');
        });

        
    }
    $scope.init();
}]);


app.controller('AngularBoardsController',['$scope', '$http',  function ($scope, $http){ 
    $scope.boards = [];
    $scope.loading = false;
    $scope.init = function () {
        $scope.loading = true;
        $http.get('/api/Boards').then(function successCallback(response) {
            console.log('success');
            $scope.boards = response.data;


        }, function errorCallback (response) {
            console.log('error');
        });

        
    }
    $scope.init();
}]);


app.controller('AngularMembersController',[ '$scope', '$http','$route', '$routeParams', function ($scope, $http){ 
    $scope.members = [];
    $scope.loading = false;
    // $scope.search = '';
    $scope.init = function () {
        $scope.loading = true;
        $http.get('/api/Members').then(function successCallback(response) {
            console.log('success');
            $scope.members = response.data;

        }, function errorCallback (response) {
            console.log('error');
        });


    }
    $scope.init();

}]);

// app.controller('AngluarMembersToCardsController', ['$scope','$http', function($scope, $http){
    
// }])



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

