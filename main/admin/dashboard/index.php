
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Dashboard</title>
  <link rel="stylesheet" href="./style.css">
  <script src="https://api.mapbox.com/mapbox-gl-js/v2.5.2/mapbox-gl.js"></script>
  <link href="https://api.mapbox.com/mapbox-gl-js/v2.5.2/mapbox-gl.css" rel="stylesheet" />
</head>
<body>
<!-- partial:index.partial.html -->
<div class="page">
  <div class="pageHeader">
    <div class="title">Dashboard</div>
    <div class="userPanel"><i class="fa fa-chevron-down"></i><span class="username">New User </span><img src="#" width="40" height="40"/></div>
  </div>
  <div class="main">
    <div class="nav">
      <div class="searchbox">
        <div><i class="fa fa-search"></i>
          <input type="search" placeholder="Search"/>
        </div>
      </div>
      <div class="menu">
        <div class="title">Navigation</div>
        <ul>
          <li><a href="form.php"><i class="fa fa-home"></i>Bus stages around</a></li>
          <li class="active"><a href="bus.location.php"> <i class="fa fa-tasks"></i>Routes</a></li>
          <li> <i class="fa fa-envelope"></i>Messages</li>
        </ul>
      </div>
    </div>
    <div class="view">
      <div class="viewHeader">
        <div class="title">Manage Tasks</div>
        <div class="functions">
          <div class="button active">Vehicles</div>
          <div class="button">Payments</div>
          <div class="button inverz"><i class="fa fa-trash-o"></i></div>
        </div>
      </div>
      <div class="content">
        <div id="map"></div>
      </div>
    </div>
  </div>
</div>
<script>
        mapboxgl.accessToken = 'pk.eyJ1IjoiYWJoYXlrcmlzaG5hdmJoYXR0IiwiYSI6ImNrbjJ0ZTF0ZjFhd2UycXBmMG9pNDU2anIifQ.F-4VoRzJdWSISMU4AYrt8g';

        // Get user's location
        navigator.geolocation.getCurrentPosition(successLocation, errorLocation, { enableHighAccuracy: true });

        function successLocation(position) {
            setupMap([position.coords.longitude, position.coords.latitude]);
        }

        function errorLocation() {
            setupMap([-73.985664, 40.748514]);
        }

        // Setup map
        function setupMap(center) {
            var map = new mapboxgl.Map({
                container: 'map',
                style: 'mapbox://styles/mapbox/streets-v11',
                center: center,
                zoom: 14
            });

            // Add marker for user location
            var userMarker = new mapboxgl.Marker({
                color: "#FF0000",
                draggable: false
            })
            .setLngLat(center)
            .addTo(map);

            // Get destination location from URL parameter
            var searchParams = new URLSearchParams(window.location.search);
            var destination = searchParams.get('destination');

            // Geocode destination location and add marker
            if (destination) {
                var geocoder = new MapboxGeocoder({
                    accessToken: mapboxgl.accessToken,
                    mapboxgl: mapboxgl
                });

                geocoder.geocode(destination, function(results) {
                    if (results.features.length > 0) {
                        var destinationMarker = new mapboxgl.Marker({
                            color: "#008000",
                            draggable: false
                        })
                        .setLngLat(results.features[0].center)
                        .addTo(map);

                        // Zoom to fit both markers on map
                        var bounds = new mapboxgl.LngLatBounds();
                        bounds.extend(userMarker.getLngLat());
                        bounds.extend(destinationMarker.getLngLat());
                        map.fitBounds(bounds, { padding: 50 });
                    }
                });
            }
        }
    </script>
	</html>
