var map = L.map('map_draw').setView([43.021835, 44.681825], 15);

L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
    attribution: 'aMap &copy; 2021',
    maxZoom: 18,
    id: 'mapbox/streets-v11',
    tileSize: 512,
    zoomOffset: -1,
    accessToken: 'your.mapbox.access.token'
}).addTo(map);

var freeDraw = new FreeDraw({
    mode: FreeDraw.ALL,
    maximumPolygons: 1,
    simplifyFactor: 1.5
});
map.addLayer(freeDraw);

freeDraw.on('markers', event => {
    var objectArray = Object.entries(event.latLngs);
    var polygonPoints = new Array();

    objectArray.forEach(([key, value]) => {
        value.forEach(function(element) {
            polygonPoints.push('[' + element.lat + ',' + element.lng + ']');
        })
    });
    document.querySelector('#polygonPoints').value = polygonPoints;
});