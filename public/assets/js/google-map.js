jQuery(document).ready(function(){
    // GOOGLE MAP FUNCTION
    function initMap() {
        var uluru = {lat: 25.134706, lng: 75.843520};
        var map = new google.maps.Map(document.getElementById('googleMap'), {
            zoom: 15,
            center: uluru
        });
        var marker = new google.maps.Marker({
            position: uluru,
            map: map
        });
    }

    // Call to initMap function
    initMap()
});