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
            zoom: 12
        });

        // Add markers at bus stages with popups
        var busStages = [
            {name: 'Githurai ; Jenga Sacco, Weka Sacco.', lon: 36.9019, lat: -1.2115},
            {name: 'Muthaiga ; Lili Sacco, Karatina Sacco', lon: 36.8204, lat: -1.2444},
            {name: 'CBD ;  Saku Sacco, Mugithu Saccu', lon: 36.8251, lat: -1.2864},
            {name: 'Koinange Street ; Baraka Sacco', lon: 36.827658,lat: -1.277465}
        ];
        busStages.forEach(function(stage) {
            var popup = new mapboxgl.Popup({ offset: 25 }).setHTML('<h3>' + stage.name + '</h3>');
            new mapboxgl.Marker({ color: '#FF0000' })
                .setLngLat([stage.lon, stage.lat])
                .setPopup(popup)
                .addTo(map);
        });
    </script>
</body>
</html>



