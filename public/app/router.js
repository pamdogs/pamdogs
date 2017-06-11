'use strict';

angular.module('Pamdogs',['ngResource','ngRoute','ngMessages'])
  .config(['$routeProvider','$locationProvider', function($routeProvider,$locationProvider){
    $routeProvider
    .when('/',{
      templateUrl: 'app/views/home.html'
    })
    .when('/registro',{
      templateUrl: 'app/views/register.html',
      controller: 'LoginUserController'
    })
    .otherwise({
      redirectTo: '/'
    });

    // Deshabilitar el Hashbang en la URL y activar el modo de url HTML5, [add <base src="/"> on 'index.php']
    $locationProvider.html5Mode(true);
    //$locationProvider.hashPrefix('');
  }]);
