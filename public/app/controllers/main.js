'use strict';

angular.module('Pamdogs')
  .controller('UserController',function($scope, $location, $timeout, SweetAlert, $auth, $state,$localStorage,Account){
    //$scope.User = UserResource.query();

    /*$scope.loginUser = function(email,pass){
      LoginResource.save({'email':email,'pass':pass});

      $timeout(function(){
        $location.path('/');
      },2000);
    };*/


    var vm = this;
    vm.$storage = $localStorage;
    vm.registerUser = function () {

      var credentials = {
          email: $scope.email,
          password: $scope.password
      }

      $auth.signup(credentials)
        .then(function(response) {
          console.log(response);
          SweetAlert.swal("¡Gracias por confiar en nosotros!", response.mensaje, "success");

          $auth.login(credentials)
          .then(function(data){
            console.log("Login");
            console.log(data);
            Account.getProfile()
              .then(function(response) {
                console.log(response);
                $localStorage.user = response.data.user;
                vm.authenticated = $auth.isAuthenticated();
                $state.go('root.registro.usuario',{},{reload: "root.registro.usuario"});
              })
              .catch(function(response){
                console.log(response);
              });
          })
          .catch(function(error){

          })


        })
        .catch(function(response) {
          console.log(response);
          SweetAlert.swal("¡Hubo un error!", response.mensaje, "error");
        });



    }
/*
    $scope.registerUser = function(){
      console.log('Entre en register');
      var credentials = {
          email: $scope.email,
          password: $scope.password
      }
*/
      //Probar con $auth.signup()
      /*UserResource.save(credentials)
      .$promise.then(function onSuccess(response){

        SweetAlert.swal("¡Gracias por confiar en nosotros!", response.mensaje, "success");

        // Use Satellizer's $auth service to login
        $auth.login(credentials).then(function(data) {
          $timeout(function(){
            // If login is successful, redirect to the users state
            $state.go('registro/usuario', {});
          },2000);
        });



      },function onFail(response){
        SweetAlert.swal("¡Hubo un error!", response.mensaje, "error");
      });*/

  /*  };*/
  });
