var map = new mapboxgl.Map({
  container: 'map',
  style: 'mapbox://styles/mapbox/streets-v11',
  center: [36.81667, -1.28333], // Nairobi County coordinates
  zoom: 11
});

map.on('load', function() {
  map.addLayer({
      id: 'nairobi-county-boundary',
      type: 'line',
      source: {
          type: 'geojson',
          data: {
              type: 'Feature',
              properties: {},
              geometry: {
                  type: 'Polygon',
                  coordinates: [[[36.658977, -1.43263], [37.084698, -1.43263], [37.084698, -1.06496], [36.658977, -1.06496], [36.658977, -1.43263]]]
              }
          }
      },
      layout: {
          'line-join': 'round',
          'line-cap': 'round'
      },
      paint: {
          'line-color': '#888',
          'line-width': 2
      }
  });
});

map.addControl(new mapboxgl.NavigationControl());
