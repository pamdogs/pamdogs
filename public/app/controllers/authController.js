'use strict';

    angular
        .module('Pamdogs')
        .controller('AuthController', AuthController);

        function AuthController($auth, $state, $http, $scope, $localStorage, $sessionStorage, Account,SweetAlert,AuthenticateResource,UserResource, $alert, $filter) {

            var vm = this;
            vm.$storage = $localStorage;

            if(!$auth.isAuthenticated()){
              $localStorage.$reset();
            } else {
              vm.authenticated = $auth.isAuthenticated();
            }

            vm.login = function() {
              var credentials = {
                  email: vm.emailLogin,
                  password: vm.passwordLogin
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

            // We would normally put the logout method in the same
            // spot as the login method, ideally extracted out into
            // a service. For this simpler example we'll leave it here
            vm.logout = function() {

              $auth.logout().then(function() {

                // Remove the authenticated user from local storage
                delete $localStorage.user;

                vm.authenticated = $auth.isAuthenticated();
                modelInput('erase');
                $state.go('root.home',{},{reload: "root.home"});
              });
            }

            vm.registerUser = function () {
              console.log('register method');
              var credentials = {
                  email: vm.emailRegister,
                  password: vm.password
              }
              console.log(credentials);
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
                      modelInput('fill');
                      $state.go('root.registro.usuario',{},{reload: "root.registro.usuario"});
                    },function(error){
                      console.log(error);
                    })
                  })
                  .catch(function(error){
                    console.log('ERROR', error);
                  })
                })
                .catch(function(response) {
                  console.log(response);
                  SweetAlert.swal("¡Hubo un error!", response.data.error, "error");
                });
            }

            vm.registerUserData_Cliente = function() {
              var redir = "root.registro.cuidador";
              registroCliente(redir);
            }

            vm.registerUserData_Cuidador = function() {
              var redir = "root.registro.cuidador";
              registroCliente(redir);
            }



            function registroCliente (route) {
              var data = {
                avatar: vm.foto,
                nombre: vm.name,
                apellido: vm.lastname,
                nacimiento: vm.birthdate,
                genero: vm.gender,
                telefono: vm.phone,
                dni_tipo: vm.dni_type,
                dni_numero: vm.dni,
                _method: 'PUT'
              }
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
                $localStorage.user = response.user;
                let alertSuccess = $alert({title: '¡Listo!', content: response.msg, placement: 'top', type: 'success', show: true, container: '#alerts-container', dismissable: false, duration: 6});
                console.log(route);
                //alertSuccess.$show();
                SweetAlert.swal("¡Listo!", response.msg, "success");
                console.log(route);
                modelInput('fill');
                console.log(route);
                $state.go(route,{});
              },function(error){
                let alertError = $alert({title: '¡Error!', content: error.data.msg, placement: 'top', type: 'danger', show: true, container: '#alerts-container', dismissable: false, duration: 6});
                alertError.$show();
              });
            }

            var modelInput = function(action, localStorage=$localStorage) {
              console.log('modelInput()', '1');
              if (action == 'fill') {
                console.log('modelInput("Fill")', '2');
                if(localStorage.user != undefined) {
                  console.log('modelInput("Fill-IF")', '3');
                  let userSession = localStorage.user;
                  vm.email = userSession.email;
                  vm.name = userSession.nombre;
                  vm.lastname = userSession.apellido;
                  vm.birthdate = (userSession.nacimiento != '0000-00-00') ? $filter('date')(userSession.nacimiento, 'dd/MM/yyyy') : '';
                  vm.gender = userSession.genero;
                  vm.phone = userSession.telefono;
                  vm.dni_type = userSession.dni_tipo;
                  vm.dni = userSession.dni_numero;
                }

              } else if (action == 'erase') {
                console.log('modelInput("Erase")', '1-2');
                vm.email = null;
                vm.name = null;
                vm.lastname = null;
                vm.birthdate = null;
                vm.gender = null;
                vm.phone = null;
                vm.dni_type = null;
                vm.dni = null;
              }
            }

            modelInput('fill');
        }


// HACER UN MENU CONTROLLER
