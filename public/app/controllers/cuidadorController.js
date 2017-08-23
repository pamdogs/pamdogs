'use strict';

    angular
        .module('Pamdogs')
        .controller('CuidadorController', CuidadorController);

        function CuidadorController($auth, $state, $localStorage) {

          /*var vm = this;
          vm.$storage = $localStorage;

          vm.register = function(){
            let data = {
              foto : vm.foto,
              title : vm.title,
              description : vm.description,
              year : vm.year,
              size1 : vm.size1,
              size2 : vm.size2,
              size3 : vm.size3,
              size4 : vm.size4,
              living1 : vm.living1,
              living2 : vm.living2,
              living3 : vm.living3,
              space1 : vm.space1,
              space2 : vm.space2,
              space3 : vm.space3,
              car1 : vm.car1,
              car2 : vm.car2,
              pets1 : vm.pets1,
              pets2 : vm.pets2,
              pets3 : vm.pets3,
              location : vm.location,
              barrio : vm.barrio,
              address : vm.address,
              range : vm.range,
              estancia : vm.estancia,
              extras : vm.extras,
              mextra : vm.mextra,
              day1 : vm.day1,
              day2 : vm.day2,
              day3 : vm.day3,
              day4 : vm.day4,
              day5 : vm.day5,
              day6 : vm.day6,
              day7 : vm.day7,
              guarderia : vm.guarderia,
              gpets : vm.gpets,
              paseo : vm.paseo,
              pmextra : vm.pmextra,
              pday1 : vm.pday1,
              pday2 : vm.pday2,
              pday3 : vm.pday3,
              pday4 : vm.pday4,
              pday5 : vm.pday5,
              pday6 : vm.pday6,
              pday7 : vm.pday7,
              hinit : vm.hinit,
              hfinit : vm.hfinit
            }
            angular.forEach(data, function(value, key){
              console.log(key, value);
            });
          }*/

        }
