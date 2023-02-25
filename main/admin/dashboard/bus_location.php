<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8' />
    <title>Bus Location Map</title>
    <meta name='viewport' content='initial-scale=1,maximum-scale=1,user-scalable=no' />
    <script src='https://api.mapbox.com/mapbox-gl-js/v2.4.1/mapbox-gl.js'></script>
    <link href='https://api.mapbox.com/mapbox-gl-js/v2.4.1/mapbox-gl.css' rel='stylesheet' />
    <style>
        body { margin: 0; padding: 0; }
        #map { position: absolute; top: 0; bottom: 0; width: 100%; }
    </style>
</head>
<body>
    <div id='map'></div>
    <script>
        mapboxgl.accessToken = 'pk.eyJ1IjoiYWJoYXlrcmlzaG5hdmJoYXR0IiwiYSI6ImNrbjJ0ZTF0ZjFhd2UycXBmMG9pNDU2anIifQ.F-4VoRzJdWSISMU4AYrt8g';
        var map = new mapboxgl.Map({
            container: 'map',
            style: 'mapbox://styles/mapbox/streets-v11',
            center: [36.8156, -1.2921],
            zoom: 13
        });

        // Add marker at bus location
        function addBusMarker(lon, lat) {
            var marker = new mapboxgl.Marker({
                color: "#FF0000",
                draggable: false
            })
            .setLngLat([lon, lat])
            .addTo(map);
        }

        // Example bus location data
        var busLocation = {
            lon: 36.8121,
            lat: -1.2869
        };

        // Call function to add marker at bus location
        addBusMarker(busLocation.lon, busLocation.lat);
    </script>
</body>
</html>
