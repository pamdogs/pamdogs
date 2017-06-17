'use strict';

    angular
        .module('Pamdogs', ['ui.router', 'satellizer','ngMessages','ngResource','oitozero.ngSweetAlert','ngStorage'])
        .run(function($rootScope){

         $rootScope.$on('$stateChangeError',
          function (event, toState, toParams, fromState, fromParams, error) {
            $state.go('home');
              $log.debug(error);

          })})
        .config(function($stateProvider, $urlRouterProvider, $authProvider, $locationProvider, $qProvider) {

            // Satellizer configuration that specifies which API
            // route the JWT should be retrieved from
            $authProvider.loginUrl = 'api/authenticate';

            // Redirect to the auth state if any other states
            // are requested other than users
            $urlRouterProvider.otherwise('/');


            $qProvider.errorOnUnhandledRejections(false);

            var skipIfLoggedIn = ['$q', '$auth', '$state', function($q, $auth, $state) {
                  var deferred = $q.defer();
                  if ($auth.isAuthenticated()) {
                    /*console.log($auth.isAuthenticated());

                    deferred.reject('Ya esta logeado.');*/

                    //Redirige al home si ya esta logeado.
                    $state.go('root.home', {}, {reload: "root.home"});

                  } else {
                    deferred.resolve();
                  }
                  return deferred.promise;
            }];

            var loginRequired = ['$q', '$location', '$auth', '$state', function($q, $location, $auth, $state) {
                  var deferred = $q.defer();
                  if ($auth.isAuthenticated()) {
                    deferred.resolve();
                  } else {
                    //$location.path('/login');
                    $state.go('root.login', {});
                  }
                  return deferred.promise;
            }];

            $stateProvider
            .state('root',{
              url: '',
              views: {
                'header': {
                  templateUrl: 'app/views/template/header.html'
                  //controller: 'AuthController as auth'
                },
                'footer':{
                  templateUrl: 'app/views/template/footer.html'
                }
              }
            })
            .state('root.home', {
              url:'/',
              views: {
                'content@': {
                  templateUrl: 'app/views/home.html'
                }
              }

            })
            .state('root.registro', {
              url: '/registro',
              resolve: {
                skipIfLoggedIn: skipIfLoggedIn
              },
              views: {
                'content@': {
                  templateUrl: 'app/views/register/register.html'
                },
                controller: 'UserController'
              }

            })
            .state('root.registro.usuario', {
              url: '/registro/usuario',
              resolve: {
                loginRequired: loginRequired
              },
              views: {
                'content@': {
                  templateUrl: 'app/views/register/register_2.html'
                }
              }

            })
            .state('root.login', {
                url: '/login',
                resolve: {
                  skipIfLoggedIn: skipIfLoggedIn
                },
                views: {
                  'content@': {
                    templateUrl: 'app/views/login.html'
                    //controller: 'AuthController as auth'
                  }
                }
            });

            /*.state('users', {
                url: '/users',
                templateUrl: '../views/userView.html',
                controller: 'UserController as user'
            });*/

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
