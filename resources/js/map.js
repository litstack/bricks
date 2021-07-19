var markersOnMap = [];

let infowindow;

const maps = document.querySelectorAll('[data-lit-map]');

window.addEventListener('initMap', () => {
    setupMaps();
});

function setupMaps() {
    maps.forEach((element) => {
        initMap(element);
        infowindow = new google.maps.InfoWindow({
            content: '',
        });
    });
}

function initMap(element) {
    let markers = getMarkers();
    map = new google.maps.Map(element, {
        zoom,
        center: center || markers[0].position,
        styles: styles || null,
    });

    map.addListener('click', () => {
        infowindow.close();
    });

    for (var i = 0; i < markers.length; i++) {
        addMarker(markers[i]);
    }

    if (clusterStyles) {
        new MarkerClusterer(map, markersOnMap, {
            styles: clusterStyles,
            maxZoom: 12,
        });
    }
}

function addMarker(marker) {
    var newMarker = new google.maps.Marker({
        position: marker.position,
        categories: marker.categories?.map((el) => el.toString()) || [],
        map: map,
        icon: marker.icon || null,
    });

    markersOnMap.push(newMarker);

    if (marker.infowindow) {
        google.maps.event.addListener(newMarker, 'click', () => {
            infowindow.setContent(marker.infowindow);
            infowindow.open(map, newMarker);
        });
    }
}

filterMarkers = function (categories) {
    for (i = 0; i < getMarkers().length; i++) {
        marker = markersOnMap[i];

        if (
            marker.categories.filter((value) => categories.includes(value))
                .length > 0 ||
            categories.length === 0
        ) {
            marker.setVisible(true);
        } else {
            marker.setVisible(false);
        }
    }
};

var checkboxes = document.querySelectorAll('.lit-map-filter');

for (let index = 0; index < checkboxes.length; index++) {
    checkboxes[index].addEventListener('change', () => {
        var filters = [];
        checkboxes.forEach((checkbox) => {
            if (checkbox.checked) {
                filters.push(checkbox.value.toString());
            }
        });
        filterMarkers(filters);
    });
}
