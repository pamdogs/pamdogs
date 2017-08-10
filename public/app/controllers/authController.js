'use strict';

    angular
        .module('Pamdogs')
        .controller('AuthController', AuthController);

        function AuthController($auth, $state, $http, $scope, $localStorage, $sessionStorage, Account,SweetAlert,AuthenticateResource,UserResource) {

            var vm = this;
            vm.$storage = $localStorage;

            if(!$auth.isAuthenticated()){
              $localStorage.$reset();
            } else {
              vm.authenticated = $auth.isAuthenticated();
            }

            vm.login = function() {
              var credentials = {
                  email: vm.email,
                  password: vm.password
              }

              $auth.login(credentials)
                .then(function() {
                  Account.getProfile()
                    .then(function(response) {
                      console.log(response);
                      $localStorage.user = response.data.user;
                      vm.authenticated = $auth.isAuthenticated();
                      $state.go('root.home',{});
                    })
                    .catch(function(response){
                      console.log(response);
                    });
                })
                .catch(function(error) {
                  console.log(error);
                });


            }
            /*vm.login = function() {

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
            }*/

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

            vm.registerUser = function () {

              var credentials = {
                  email: vm.email,
                  password: vm.password
              }

              $auth.signup(credentials)
                .then(function(response) {
                  console.log(response);
                  SweetAlert.swal("¡Gracias por confiar en nosotros!", response.mensaje, "success");

                  $auth.login(credentials)
                  .then(function(data){
                    console.log("Login");
                    console.log(data);
                    AuthenticateResource.get(function(data){
                      console.log(data)
                      console.log(data.user)
                      $localStorage.user = data.user;
                      vm.authenticated = $auth.isAuthenticated();
                      $state.go('root.registro.usuario',{},{reload: "root.registro.usuario"});
                    },function(error){
                      console.log(error);
                    })

                  })
                  .catch(function(error){

                  })


                })
                .catch(function(response) {
                  console.log(response);
                  SweetAlert.swal("¡Hubo un error!", response.data.error, "error");
                });



            }

            vm.registerUserData_Cliente = function() {
              /*console.log(vm.foto);
              var fd = new FormData();
              angular.forEach(vm.foto,function(file){
                fd.append('avatar',file);
              });*/
              var data = {
                avatar: vm.foto,
                nombre: vm.name,
                apellido: vm.lastname,
                nacimiento: vm.birthdate,
                genero: vm.gender,
                telefono: vm.phone,
                dni_tipo: vm.doc_type,
                dni_numero: vm.doc,
                _method: 'PUT'
              }
              /*fd.append("data", JSON.stringify(information));*/
              var fd = new FormData();
              angular.forEach(data, function(value, key) {
                if (value instanceof FileList) {
                  if (value.length == 1) {
                    fd.append(key, value[0]);
                  } else {
                    angular.forEach(value, function(file, index) {
                      fd.append(key + '_' + index, file);
                    });
                  }
                } else if (value != undefined) {
                  fd.append(key, value);
                }
              });

              UserResource.post({id:vm.$storage.user.id},fd, function(response){
                console.log(response.user);
                $localStorage.user = response.user;
              },function(error){
                console.log(error);
              });

              /*var formData = new FormData();
              formData.append('file', vm.foto);
              formData.append('_method', 'PUT');
              $http.post('/api/user/'+vm.$storage.user.id, formData, {
                headers: {
                  'Content-Type': undefined
                },
                transformRequest: angular.identity
              }).then(function (data) {
                console.log(data);
              });*/


    	      	/*$http({
        			  method  : 'PUT',
        			  url     : '/api/user/'+vm.$storage.user.id,
        			  processData: false,
        			  transformRequest: function (data) {
        			      var formData = new FormData();
        			      formData.append("avatar", vm.foto);
        			      return formData;
        			  },
        			  //data : vm.registerData,
        			  headers: {
        			         'Content-Type': false
        			  }
              }).then(function(data){
        		        console.log(data);
        		   });*/





              /*UserResource.update({id:vm.$storage.user.id},information, function(response){
                console.log(response);
              },function(error){
                console.log(error);
              });*/

            }

            vm.registerUserData_Cuidador = function() {

              var information = {
                nombre: vm.name,
                apellido: vm.lastname,
                nacimiento: vm.birthdate,
                genero: vm.gender,
                telefono: vm.phone,
                dni_tipo: vm.doc_type,
                dni_numero: vm.doc
              }

              UserResource.update({id:vm.$storage.user.id},information, function(response){

                console.log(response);

              },function(error){

                console.log(error);
              });

            }

        }


// HACER UN MENU CONTROLLER
