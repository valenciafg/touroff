/**
 * Created by victor on 29-11-2015.
 */
/* ========================================================================
 * Angular code goes here:
 * ======================================================================== */

var materialApp = angular.module('materialApp', ['ngMaterial','ngAnimate','ngAria'])
    .controller('materialAppController', function($scope) {
        $scope.saludo = "Hola desde materialAppController";
    })
;