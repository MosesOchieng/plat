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
    <form onsubmit="addPlace(); return false;">
        <label for="place">Place Name:</label>
        <input type="text" id="place" name="place" /><br>
        <label for="lon">Longitude:</label>
        <input type="text" id="lon" name="lon" /><br>
        <label for="lat">Latitude:</label>
        <input type="text" id="lat" name="lat" /><br>
        <button type="submit">Add Marker</button>
    </form>
    <div id='map'></div>
    <script>
        mapboxgl.accessToken = 'pk.eyJ1IjoiYWJoYXlrcmlzaG5hdmJoYXR0IiwiYSI6ImNrbjJ0ZTF0ZjFhd2UycXBmMG9pNDU2anIifQ.F-4VoRzJdWSISMU4AYrt8g';
        var map = new mapboxgl.Map({
            container: 'map',
            style: 'mapbox://styles/mapbox/streets-v11',
            center: [36.8156, -1.2921],
            zoom: 10
        });

        // Add marker at specified coordinates
        function addMarker(lon, lat, place) {
            var marker = new mapboxgl.Marker({
                color: "#FF0000",
                draggable: false
            })
            .setLngLat([lon, lat])
            .setPopup(new mapboxgl.Popup().setHTML('<h3>' + place + '</h3>'))
            .addTo(map);
            map.flyTo({ center: [lon, lat], zoom: 13 });
        }

        // Get input values and add marker
        function addPlace() {
            var place = document.getElementById('place').value;
            var lon = parseFloat(document.getElementById('lon').value);
            var lat = parseFloat(document.getElementById('lat').value);
            addMarker(lon, lat, place);
        }
    </script>
</body>
</html>


