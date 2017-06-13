'use strict';

angular.module('Pamdogs')
  .controller('UserController',function($scope, UserResource, $location, $timeout,SweetAlert){
    //$scope.User = UserResource.query();

    /*$scope.loginUser = function(email,pass){
      LoginResource.save({'email':email,'pass':pass});

      $timeout(function(){
        $location.path('/');
      },2000);
    };*/


    $scope.registerUser = function(){
      UserResource.save({'email':$scope.email,'pass':$scope.password},function(data){

        SweetAlert.swal("Exitoso", data.mensaje, "success");

      });

    };
  });
