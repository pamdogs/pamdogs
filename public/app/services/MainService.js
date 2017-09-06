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
  .factory('AuthenticateResource', function($resource) {
    return $resource("http://localhost:8000/api/authenticate/user");
  })
  .factory('UserResource',function($resource){
    return $resource("http://localhost:8000/api/user/:id",{
      id:"@id"
    }, {
      update: {
        method: "PUT",
        transformRequest: function(data) {
          if (data === undefined)
            return data;

          var fd = new FormData();
          angular.forEach(data, function(value, key) {
            console.log(value +" : "+ key)
            if (value instanceof FileList) {
              if (value.length == 1) {
                fd.append(key, value[0]);
              } else {
                angular.forEach(value, function(file, index) {
                  fd.append(key + '_' + index, file);
                  console.log(fd)
                });
              }
            } else {
              fd.append(key, value);
              console.log(fd)
            }
          });

          return fd;
        },
        headers:{'Content-Type':undefined}
        //processData: false
      },
      post: {
        method: "POST",
        headers: {
          'Content-Type': undefined
        },
        transformRequest: angular.identity,
        processData: false
      }
    });
  })
  .factory('LoginResource',function($resource){
    return $resource("http://localhost:8000/login/:email:password",{
      email:'@email',
      password:'@password'
    });
  })
  .factory('BuscadorResource',function($resource){
    return $resource("api/buscador/:dir:desde:hasta",{
      direccion:'@dir',
      desde: '@desde',
      hasta: '@hasta'
    });
  });
