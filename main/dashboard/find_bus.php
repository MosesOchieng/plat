<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8' />
    <title>Find My Bus Stop</title>
    <meta name='viewport' content='initial-scale=1,maximum-scale=1,user-scalable=no' />
    <script src='https://api.mapbox.com/mapbox-gl-js/v2.4.1/mapbox-gl.js'></script>
    <link href='https://api.mapbox.com/mapbox-gl-js/v2.4.1/mapbox-gl.css' rel='stylesheet' />
    <style>
        body { margin: 0; padding: 0; }
        #map { position: absolute; top: 0; bottom: 0; width: 100%; }
        #form { position: absolute; top: 10px; left: 10px; z-index: 1; background-color: white; padding: 10px; }
        label { display: block; margin-bottom: 5px; }
        input[type=text] { width: 100%; padding: 5px; margin-bottom: 10px; }
        button { background-color: blue; color: white; border: none; padding: 5px 10px; cursor: pointer; }
    </style>
</head>
<body>
<div id='map'></div>
<div id='form'>
    <h2>Enter Bus Stop Location</h2>
    <label for='name'>Name:</label>
    <input type='text' id='name' placeholder='Enter bus stop name' />
    <label for='lat'>Latitude:</label>
    <input type='text' id='lat' placeholder='Enter latitude' />
    <label for='lng'>Longitude:</label>
    <input type='text' id='lng' placeholder='Enter longitude' />
    <button onclick='addMarker()'>Add Bus Stop</button>
</div>
<script>
    mapboxgl.accessToken = 'pk.eyJ1IjoiYWJoYXlrcmlzaG5hdmJoYXR0IiwiYSI6ImNrbjJ0ZTF0ZjFhd2UycXBmMG9pNDU2anIifQ.F-4VoRzJdWSISMU4AYrt8g';
    var map = new mapboxgl.Map({
        container: 'map',
        style: 'mapbox://styles/mapbox/satellite-v9',
        center: [36.8156, -1.2921],
        zoom: 13
    });

    function addMarker() {
        var name = document.getElementById('name').value;
        var lat = document.getElementById('lat').value;
        var lng = document.getElementById('lng').value;
        var marker = new mapboxgl.Marker()
            .setLngLat([lng, lat])
            .setPopup(new mapboxgl.Popup().setHTML('<h3>' + name + '</h3>'))
            .addTo(map);
    }
</script>
</body>
</html>
