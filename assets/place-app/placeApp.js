/* ========================================================================
 * Angular code goes here:
 * ======================================================================== */

var placeApp = angular.module('placeApp', ['ui.router', 'ui.bootstrap','ngRoute'])
        .config(function($stateProvider, $urlRouterProvider) {
            // For any unmatched url, redirect to /
            $urlRouterProvider.otherwise("/");

            // Routes
            $stateProvider
                .state('index', {
                    url: '/',
                    controller: 'placeAppIndexController',
                    templateUrl: GLOBALS.partialsPath + 'index.html',
                })
                .state('index.substate', {
                    url: 'substate',
                    templateUrl: GLOBALS.partialsPath + 'substate.html',
                    controller: 'substateController'
                })
            ;
        })

        .controller('placeAppController', function($scope) {
            $scope.hello = "Hola Mundo Bonito";
        })

        .controller('placeAppIndexController', function($scope) {
            $scope.hello = "Hello Worldx";
        })
        .controller('placeAppPlacesController', function($scope, $http, $routeParams) {
            $http.get('http://192.168.1.137/guanaima/wp-json/wp/v2/place/').success(function(res){
                $scope.posts = res;
            });
        })
    ;