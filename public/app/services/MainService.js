'use strict';

angular.module('Pamdogs')
  .factory('Account', function($http) {
    return {
      getProfile: function() {
        return $http.get('api/authenticate/user');
      },
      updateProfile: function(profileData) {
        return $http.put('/api/me', profileData);
      }
    };
  })
  .factory('UserResource',function($resource){
    return $resource("http://localhost:8000/api/user/:id",{
      id:"@id"
    }, {
      update: {
        method: "PUT"
      }
    });
  })
  .factory('LoginResource',function($resource){
    return $resource("http://localhost:8000/login/:email:password",{
      email:'@email',
      password:'@password'
    });
  });
