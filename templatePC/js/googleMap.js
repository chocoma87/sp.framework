






    google.maps.event.addDomListener(window, 'load', init);

    function init() {
        var mapOptions = {
            scrollwheel: true,
            draggable: true,
            /* Map position latitude and longitude */
            center: new google.maps.LatLng(37.2203557, 127.0740456),
            /* Map zoom / 0 is "Earth" and 21 is fully zoomed */
            zoom: 14,
            /* Custom map color / See documentation */
            styles: []
        };
        var mapElement = document.getElementById('googleMap');
        var map = new google.maps.Map(mapElement, mapOptions);
        var image = '/en/layouts/rayence/images/map_marker.png';
        /* Marker #1 */
        var marker = new google.maps.Marker({
            position: new google.maps.LatLng(37.2200557, 127.0748456),
            map: map,
            icon: image
        });
    }






