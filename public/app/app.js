'use strict';

    angular
        .module('Pamdogs', ['ui.router', 'satellizer','ngMessages','ngResource','oitozero.ngSweetAlert'])
        .config(function($stateProvider, $urlRouterProvider, $authProvider, $locationProvider) {

            // Satellizer configuration that specifies which API
            // route the JWT should be retrieved from
            $authProvider.loginUrl = '/api/authenticate';

            // Redirect to the auth state if any other states
            // are requested other than users
            $urlRouterProvider.otherwise('/');

            $stateProvider
                .state('home', {
                  url:'/',
                  templateUrl: 'app/views/home.html'
                })
                .state('registro', {
                  url: '/registro',
                  templateUrl: 'app/views/register/register.html'
                })
                .state('registro/usuario', {
                  url: '/registro/usuario',
                  templateUrl: 'app/views/register/register_2.html'
                })
                .state('login', {
                    url: '/login',
                    templateUrl: 'app/views/login.html',
                    controller: 'AuthController as auth'
                })
                /*.state('users', {
                    url: '/users',
                    templateUrl: '../views/userView.html',
                    controller: 'UserController as user'
                })*/;

              $locationProvider.html5Mode(true);
        })
        .directive("compareTo",function() {
          return {
              require: "ngModel",
              scope: {
                  otherModelValue: "=compareTo"
              },
              link: function(scope, element, attributes, ngModel) {

                  ngModel.$validators.compareTo = function(modelValue) {
                      return modelValue == scope.otherModelValue;
                  };

                  scope.$watch("otherModelValue", function() {
                      ngModel.$validate();
                  });
              }
          };
      });
