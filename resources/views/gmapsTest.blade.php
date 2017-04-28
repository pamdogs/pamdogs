<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <title>Circles</title>
    <style>
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
      .info {
        width: 15%;
        height: 90%;
        max-height: 90%;
        position: absolute;
        z-index: 10000;
        background-color: rgba(255, 255, 255, 0.5);
        overflow: auto;
      }
    </style>
  </head>
  <body>
    <div class="info">

    </div>
    <div id="map" style="width: 100%;height:90%;"></div>
    <form id="formulario" method="post">
      {{ csrf_field() }}
      <input type="text" name="direccion" id="dir" value="medellin">
      <button type="button" name="buscar" id="envia">Enviar</button>
    </form>
    <script>


    function initMap() {
      locations = [];
      $.post("{{ url('buscar') }}",$('#formulario').serialize(),function(){

      }).done(function(data){



        for (h = 0; h < data.cuidadores.length; h++) {
          locations.push([data.cuidadores[h].cuidador.latitud,data.cuidadores[h].cuidador.longitud]);

          var html = "<div id='c"+h+"' style='width:100%'><img src='"+data.cuidadores[h].avatar+"' style='max-width:75px;max-height:75px;'><h3>"+data.cuidadores[h].nombre+" "+data.cuidadores[h].apellido+"</h3><span>"+data.cuidadores[h].genero+"</span></div>";
          $('.info').append(html)
        }

        // Create the map.

        map = new google.maps.Map(document.getElementById('map'), {
          zoom: 10,
          center: {lat: 6.2530408, lng: -75.5645737},
          mapTypeId: google.maps.MapTypeId.TERRAIN,
          disableDefaultUI: true
        });



        /*locations.push(['7.30699584' , '-75.57159886'])
        locations.push(['6.21570485' , '-75.59460149'])
        locations.push(['5.23567078' , '-75.55889592'])*/
        var bounds = new google.maps.LatLngBounds();

        for (i  = 0; i < locations.length; i++) {

          var latlng1 = new google.maps.LatLng(locations[i][0], locations[i][1]);
          //if (google.maps.geometry.spherical.computeDistanceBetween(latlng1,map.getCenter()) < 30000) {
          if (google.maps.geometry.spherical.computeDistanceBetween(latlng1,map.getCenter()) > 0) {
            //console.log(google.maps.geometry.spherical.computeDistanceBetween(latlng1,map.getCenter()))
            drivermarker=new google.maps.Marker({position:latlng1});
            drivermarker.setMap(map);
            var infowindow = new google.maps.InfoWindow();

            google.maps.event.addListener(drivermarker, 'mouseover', (function(marker, i) {
              return function() {
                console.log('2) '+i)

                $('#c'+i).css('background-color','rgba(255,255,0,0.5)')

              }
            })(drivermarker, i));

            google.maps.event.addListener(drivermarker, 'mouseout', (function(marker, i) {
              return function() {
                console.log('3) '+i)

                $('#c'+i).css('background-color','')

              }
            })(drivermarker, i));

            google.maps.event.addDomListener(document.getElementById("c"+i), 'mouseover', (function(marker, i) {
              return function() {
                console.log('4) '+marker+' | '+i)
                marker.setIcon('https://maps.google.com/mapfiles/kml/shapes/parking_lot_maps.png')
                //$('#c'+i).css('background-color','rgba(255,255,0,0.5)')
                $(this).css('background-color','red')

              }
            })(drivermarker, i));

            google.maps.event.addDomListener(document.getElementById("c"+i), 'mouseout', (function(marker, i) {
              return function() {
                console.log('5) '+marker+' | '+i)
                marker.setIcon('https://maps.google.com/mapfiles/kml/shapes/info-i_maps.png')
                //$('#c'+i).css('background-color','rgba(255,255,0,0.5)')
                $(this).css('background-color','transparent')

              }
            })(drivermarker, i));


            bounds.extend(latlng1);
          }
        }

        map.fitBounds(bounds);




        // bounds of the desired area
        /*var allowedBounds = new google.maps.LatLngBounds(
             new google.maps.LatLng(70.33956792419954, 178.01171875),
             new google.maps.LatLng(83.86483689701898, -88.033203125)
        );
        var lastValidCenter = map.getCenter();

        google.maps.event.addListener(map, 'center_changed', function() {
            if (allowedBounds.contains(map.getCenter())) {
                // still within valid bounds, so save the last valid position
                lastValidCenter = map.getCenter();
                return;
            }

            // not valid anymore => return to last valid position
            map.panTo(lastValidCenter);
        });*/


        var geocoder = new google.maps.Geocoder();
        geocoder.geocode( { 'address': 'Medellín Colombia'}, function(results, status) {
          if (status == google.maps.GeocoderStatus.OK) {
            resultados = results
            //console.log(resultados)
            map.setCenter(results[0].geometry.location);
            map.fitBounds(results[0].geometry.viewport);
            map.setZoom(12);
          }
        });

        /*var geocoder = new GClientGeocoder();
        //Fit map to a Country
        geocoder.getLocations("Colombia", function (locations) {

            var north = locations.Placemark[0].ExtendedData.LatLonBox.north;
            var south = locations.Placemark[0].ExtendedData.LatLonBox.south;
            var east  = locations.Placemark[0].ExtendedData.LatLonBox.east;
            var west  = locations.Placemark[0].ExtendedData.LatLonBox.west;

            // API version 3
            var bounds = new google.maps.LatLngBounds(new google.maps.LatLng(south, west),
                                                      new google.maps.LatLng(north, east));
            map.fitBounds(bounds);
        });*/

      }).fail(function(jqXHR, textStatus, errorThrown){
        console.log(errorThrown)
      })
    }


    /*function reloadMap(cuidadores){
      // Create the map.
      map.setCenter({lat: 6.2530408, lng: -75.5645737});
      //console.log(cuidadores)
      var locations = [];
      for (h = 0; h < cuidadores.length; h++) {
        locations.push([cuidadores[h].latitud,cuidadores[h].longitud]);

        var html = "<div id='c"+h+"' style='width:100%'><img src='"+cuidadores[h].avatar+"' style='max-width:75px;max-height:75px;'><h3>"+cuidadores[h].nombre+" "+cuidadores[h].apellido+"</h3><span>"+cuidadores[h].genero+"</span></div>";
        $('.info').append(html)
      }

      var bounds = new google.maps.LatLngBounds();
      for (i  = 0; i < locations.length; i++) {
        var latlng1 = new google.maps.LatLng(locations[i][0], locations[i][1]);
        //if (google.maps.geometry.spherical.computeDistanceBetween(latlng1,map.getCenter()) < 30000) {
        if (google.maps.geometry.spherical.computeDistanceBetween(latlng1,map.getCenter()) > 0) {
          //console.log(google.maps.geometry.spherical.computeDistanceBetween(latlng1,map.getCenter()))
          drivermarker=new google.maps.Marker({position:latlng1});
          drivermarker.setMap(map);
          var infowindow = new google.maps.InfoWindow();
          google.maps.event.addListener(drivermarker, 'click', (function(marker, i) {
            return function() {
              //access the node
              var content=document.getElementById('c'+i)
               //create a copy of the node
              .cloneNode(true);
               //remove the id to avoid conflicts
              content.removeAttribute('id');
               //make it visible
              content.style.display='block';
               //apply the content  and open the infoWindow
              infowindow.setContent(content);
              infowindow.open(map, drivermarker);
            }
          })(drivermarker, i));
          bounds.extend(latlng1);
        }
      }
      map.fitBounds(bounds);


      var geocoder = new google.maps.Geocoder();
      geocoder.geocode( { 'address': 'Medellín Colombia'}, function(results, status) {
        if (status == google.maps.GeocoderStatus.OK) {
          resultados = results
          //console.log(resultados)
          map.setCenter(results[0].geometry.location);
          map.fitBounds(results[0].geometry.viewport);
          map.setZoom(8);
        }
      });


    }*/

  /*  google.maps.event.addListener(marker, 'click', (function(marker, i) {
        return function() {
            map.panTo(marker.getPosition());
            infowindow.setContent(markers[i][0]);
            infowindow.open(map, marker);
            opendiv();
            }
        })(marker, i));
    }*/





    </script>
    <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDWBFZiDcF4U80G-iQRraEvhetVcTBlxYE&libraries=geometry&callback=initMap&language=es&region=CO"></script>
    <script type="text/javascript" src="{{ url('main/scripts/jquery-1.8.3.min.js') }}"></script>
    <script type="text/javascript">
      $('#numeros').on('change',function(){
        cityCircle.setRadius(parseInt($(this).val()))
      }).on('keydown',function(e){
        e.preventDefault()
      })

      $(function(){
        $('#envia').on('click',function(e){
          e.preventDefault()
          $.post("{{ url('buscar') }}",$('#formulario').serialize(),function(){

          }).done(function(data){
            //console.log(data)
            reloadMap(data.cuidadores)
          }).fail(function(jqXHR, textStatus, errorThrown){
            //console.log(errorThrown)
          })
        })
      })
    </script>
  </body>


</html>
