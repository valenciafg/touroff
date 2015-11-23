/**
 * Created by vvalencia on 15/11/15.
 */
/* ========================================================================
 * Angular code goes here:
 * ======================================================================== */

var touroffApp = angular.module('touroffApp', ['ui.router', 'ui.bootstrap'])
        .config(function($stateProvider, $urlRouterProvider) {
            // For any unmatched url, redirect to /
            $urlRouterProvider.otherwise("/");

            // Routes
            $stateProvider
                .state('index', {
                    url: '/',
                    controller: 'touroffAppIndexController',
                    templateUrl: GLOBALS.partialsPath + 'index.html',
                })
                .state('index.substate', {
                    url: 'substate',
                    templateUrl: GLOBALS.partialsPath + 'substate.html',
                    controller: 'substateController'
                })
            ;
        })

        .controller('touroffAppController', function($scope) {
            $scope.hello = "Hello World";
        })

        .controller('touroffAppIndexController', function($scope) {
            $scope.hello = "Hello World";
        })
    ;