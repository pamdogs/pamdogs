'use strict';

angular.module('Pamdogs')
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
      password:'@pass'
    });
  });
