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
      #map {
        height: 100%;
      }
    </style>
  </head>
  <body>
    <div id="map" style="width: 50%;height: 50%"></div>
    <input type="number" name="numeros" id="numeros" min="100" max="1000" step="100" autocomplete="off">
    <script>

    document.getElementById('numeros').defaultValue = '100'

// This example creates circles on the map, representing populations in North
// America.

// First, create an object containing LatLng and population for each city.
/*var citymap = {
  chicago: {
    center: {lat: 41.878, lng: -87.629},
    population: 2714856
  },
  newyork: {
    center: {lat: 40.714, lng: -74.005},
    population: 8405837
  },
  losangeles: {
    center: {lat: 34.052, lng: -118.243},
    population: 3857799
  },
  vancouver: {
    center: {lat: 49.25, lng: -123.1},
    population: 603502
  }
};*/

var citymap = {
  newyork: {
    center: {lat: 40.714, lng: -74.005},
    population: 8405837
  }
}

function initMap() {
  // Create the map.
  map = new google.maps.Map(document.getElementById('map'), {
    zoom: 10,
    center: {lat: 40.714, lng: -74.005},
    mapTypeId: google.maps.MapTypeId.TERRAIN
  });

  // Construct the circle for each value in citymap.
  // Note: We scale the area of the circle based on the population.
  for (var city in citymap) {
    // Add the circle for this city to the map.
    cityCircle = new google.maps.Circle({
      strokeColor: '#FF0000',
      strokeOpacity: 0.8,
      strokeWeight: 1,
      fillColor: '#FF0000',
      fillOpacity: 0.35,
      draggable: true,
      editable: false,
      map: map,
      center: citymap[city].center,
      radius: 100
    });
    console.log(cityCircle.getRadius())
  }

  // bounds of the desired area
  var allowedBounds = new google.maps.LatLngBounds(
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
  });
}



    </script>
    <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDWBFZiDcF4U80G-iQRraEvhetVcTBlxYE&callback=initMap"></script>
    <script type="text/javascript" src="{{ url('main/scripts/jquery-1.8.3.min.js') }}"></script>
    <script type="text/javascript">
      $('#numeros').on('change',function(){
        cityCircle.setRadius(parseInt($(this).val()))
      }).on('keydown',function(e){
        e.preventDefault()
      })
    </script>
  </body>


</html>