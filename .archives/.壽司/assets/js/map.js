mapboxgl.accessToken = 'pk.eyJ1IjoidGhlbWVzZmxhdCIsImEiOiJjbGt3NGxtYncwa2F2M21saHM3M21uM3h2In0.9NbzjykXil1nELxQ1V8rkA';
    const map = new mapboxgl.Map({
    container: 'map',
    style: 'mapbox://styles/mapbox/light-v11',
    center: [-0.108968,51.492933],
    zoom: 14
});

const geojson = {
    type: 'FeatureCollection',
    features: [
        {
        type: 'Feature',
        geometry: {
            type: 'Point',
            coordinates: [-0.108968,51.492933]
        }
        }
    ]
    };

    for (const feature of geojson.features) {
    // create a HTML element for each feature
    const el = document.createElement('div');
    el.className = 'marker';

    // make a marker for each feature and add to the map
    new mapboxgl.Marker(el).setLngLat(feature.geometry.coordinates).addTo(map);
}