function initMap() {

    var geocoder = new google.maps.Geocoder();

    var map = new google.maps.Map(document.getElementById('map'), {
        scrollwheel: false,
        zoom: 15,
        mapTypeControl: false

    });

    geocoder.geocode({'address': address}, function (results, status) {
        if (status == google.maps.GeocoderStatus.OK) {
            map.setCenter(results[0].geometry.location);
            var marker = new google.maps.Marker({
                map: map,
                title: address,
                position: results[0].geometry.location,
                // icon: 'themes/veevo-theme/assets/icons/color/icon-map.svg'
            });
        } else {
            alert("Geocode was not successful for the following reason: " + status);
        }
    });
}
