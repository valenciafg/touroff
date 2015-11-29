/* ========================================================================
 * Angular code goes here:
 * ======================================================================== */

var placeApp = angular.module('placeApp', ['materialApp','ui.router','ngRoute'])
        .config(function($stateProvider, $urlRouterProvider) {
            // For any unmatched url, redirect to /
            $urlRouterProvider.otherwise("/");

            // Routes
            $stateProvider
                .state('index', {
                    url: '/',
                    controller: 'placeAppPlacesController',
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
            $scope.hello = "Hola desde placeAppController";
        })

        .controller('placeAppIndexController', function($scope) {
            $scope.hello = "Hola desde placeAppIndexController";
        })
        .controller('placeAppPlacesController', function($scope, $http, $routeParams) {
            $http.get('../wp-json/wp/v2/place').success(function(res){
                $scope.posts = res;
            });
            $scope.hola = "Hola desde placeAppPlacesController";
            console.log(' places posts controller  loaded.');
        })
    ;