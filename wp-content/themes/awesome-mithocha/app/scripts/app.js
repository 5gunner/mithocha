'use strict';

/**
 * @ngdoc overview
 * @name awesomeMithochaApp
 * @description
 * # awesomeMithochaApp
 *
 * Main module of the application.
 */
angular
  .module('awesomeMithochaApp', [
    'ngAnimate',
    'ngCookies',
    'ngResource',
    'ngRoute',
    'ngTouch'
  ])
  .config(function ($routeProvider) {
    $routeProvider
      .when('/', {
        templateUrl: 'views/main.html',
        controller: 'MainCtrl',
        controllerAs: 'main'
      })
      .otherwise({
        redirectTo: '/'
      });
  });
