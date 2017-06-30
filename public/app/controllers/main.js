'use strict';

angular.module('Pamdogs')
  .controller('UserController',function($scope, $location, $timeout, SweetAlert, $auth, $state){
    //$scope.User = UserResource.query();

    /*$scope.loginUser = function(email,pass){
      LoginResource.save({'email':email,'pass':pass});

      $timeout(function(){
        $location.path('/');
      },2000);
    };*/

    var vm = this;

    vm.pruebaScope = "Dos Strings";

    $scope.testScp = " - Test - ";



    vm.registerUser = function () {

      var credentials = {
          email: $scope.email,
          password: $scope.password
      }

      $auth.signup(credentials)
        .then(function(response) {
          console.log(response);
        })
        .catch(function(response) {
          console.log(response);
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
