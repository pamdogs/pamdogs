'use strict';

    angular
        .module('Pamdogs')
        .controller('AuthController', AuthController);

        function AuthController($auth, $state, $http, $scope, $localStorage, $sessionStorage) {

            $scope.$storage = $localStorage;

            /*if(!$auth.isAuthenticated()){
              $localStorage.$reset();
            }*/



            var vm = this;

            vm.authenticated = $auth.isAuthenticated();

            vm.login = function() {

                var credentials = {
                    email: vm.email,
                    password: vm.password
                }

                // Use Satellizer's $auth service to login
                $auth.login(credentials).then(function(data) {

                    return $http.get('api/authenticate/user');
                    // If login is successful, redirect to the users state
                    //$state.go('home', {});

                }, function(error) {
                    vm.loginError = true;
                    vm.loginErrorText = error.data.error;
                    console.log(vm.loginErrorText);
                  // Because we returned the $http.get request in the $auth.login
                  // promise, we can chain the next promise to the end here
                  }).then(function(response) {

                    // Stringify the returned data to prepare it
                    // to go into local storage
                    var user = response.data.user;

                    // Set the stringified user data into local storage
                    $localStorage.user = user;

                    // The user's authenticated state gets flipped to
                    // true so we can now show parts of the UI that rely
                    // on the user being logged in
                    //$rootScope.authenticated = true;

                    // Putting the user's data on $rootScope allows
                    // us to access it anywhere across the app
                    //$rootScope.currentUser = response.data.user;

                    // Everything worked out so we can now redirect to
                    // the users state to view the data

                    vm.authenticated = $auth.isAuthenticated();




                    $state.go('root.home',{},{reload: "root.home"});
                    //location.href = "/";

                  });
            }

            // We would normally put the logout method in the same
            // spot as the login method, ideally extracted out into
            // a service. For this simpler example we'll leave it here
            vm.logout = function() {

              $auth.logout().then(function() {

                // Remove the authenticated user from local storage
                delete $localStorage.user;

                vm.authenticated = $auth.isAuthenticated();

                $state.go('root.home',{},{reload: "root.home"});



              });
            }

        }


// HACER UN MENU CONTROLLER
