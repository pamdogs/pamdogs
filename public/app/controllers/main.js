'use strict';

angular.module('Pamdogs')
  .controller('LoginUserController',function($scope,LoginResource, $location, $timeout){
    //$scope.User = UserResource.query();

    $scope.loginUser = function(email,pass){
      LoginResource.save({'email':email,'pass':pass});

      $timeout(function(){
        $location.path('/');
      },2000);
    };
  });
