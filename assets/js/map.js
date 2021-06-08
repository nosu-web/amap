$(".toggle-btn").click(function () {
    $(".toggle-btn").toggleClass("toggle-btn-closed");
    $(".sidebar").toggle();
});

var map = L.map('mapid').setView([43.021835, 44.681825], 15);

L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
    attribution: 'aMap &copy; 2021',
    maxZoom: 18,
    id: 'mapbox/streets-v11',
    tileSize: 512,
    zoomOffset: -1,
    accessToken: 'your.mapbox.access.token'
}).addTo(map);


$.getJSON("api.php", function (data) {
    var bootstrapClass;
    var polygonColor;
    L.geoJSON(data,
        {
            onEachFeature: function (feature, layer) {

                switch (feature.properties.statusID) {
                    case '1':
                        bootstrapClass = 'bg-danger';
                        polygonColor = 'red';
                        break;
                    case '2':
                        bootstrapClass = 'bg-warning';
                        polygonColor = 'yellow';
                        break;
                    case '3':
                        bootstrapClass = 'bg-success';
                        polygonColor = 'green';
                        break;

                    default:
                        bootstrapClass = 'bg-primary';
                        polygonColor = 'blue';
                        break;
                }

                layer.bindPopup(
                    '<div class="card">'+
                        '<div class="card-body">'+
                            '<h5 class="card-title">' + feature.properties.description + '</h5>'+
                            '<p class="card-text">Статус: ' + feature.properties.status + '</p>'+
                            '<p class="card-text">Плотность: ' + feature.properties.density + '</p>'+
                            '<p class="card-text text-muted">Добавлено: ' + feature.properties.created + '</p>'+
                        '</div>'+
                    '</div>'
                );
                layer.setStyle({color: polygonColor});
            }
        }).addTo(map);
});

$( "#buttonFilter" ).click(function() {
    var density = $('#polygonDensity').val();
    
    map.eachLayer(function(layer) {
        if (layer.toGeoJSON) {
          map.removeLayer(layer);
        }
    });

    $.getJSON("api.php?density="+density, function (data) {
        var bootstrapClass;
        var polygonColor;
        L.geoJSON(data,
            {
                onEachFeature: function (feature, layer) {
    
                    switch (feature.properties.statusID) {
                        case '1':
                            bootstrapClass = 'bg-danger';
                            polygonColor = 'red';
                            break;
                        case '2':
                            bootstrapClass = 'bg-warning';
                            polygonColor = 'yellow';
                            break;
                        case '3':
                            bootstrapClass = 'bg-success';
                            polygonColor = 'green';
                            break;
    
                        default:
                            bootstrapClass = 'bg-primary';
                            polygonColor = 'blue';
                            break;
                    }
    
                    layer.bindPopup(
                        '<div class="card">'+
                            '<div class="card-body">'+
                                '<h5 class="card-title">' + feature.properties.description + '</h5>'+
                                '<p class="card-text">Статус: ' + feature.properties.status + '</p>'+
                                '<p class="card-text">Плотность: ' + feature.properties.density + '</p>'+
                                '<p class="card-text text-muted">Добавлено: ' + feature.properties.created + '</p>'+
                            '</div>'+
                        '</div>'
                    );
                    layer.setStyle({color: polygonColor});
                }
            }).addTo(map);
    });
});