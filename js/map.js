Object.keys = Object.keys || function(o) {
    var result = [];
    for(var name in o) {
        if (o.hasOwnProperty(name))
            result.push(name);
    }
    return result;
};

jQuery(document).ready(function($){

    //map margin if page header
    if( $('#page-header-bg:not("[data-parallax=1]")').length > 0 ) { $('#contact-map').css('margin-top', 0);  $('.container-wrap').css('padding-top', 0);}
    if( $('#page-header-bg[data-parallax=1]').length > 0 ) $('#contact-map').css('margin-top', '-30px');

    var zoomLevel = parseFloat($('.webuza-google-map').attr('data-zoom-level'));
    var centerlat = parseFloat($('.webuza-google-map').attr('data-center-lat'));
    var centerlng = parseFloat($('.webuza-google-map').attr('data-center-lng'));
    var markerImg = $('.webuza-google-map').attr('data-marker-img');
    var enableZoom = $('.webuza-google-map').attr('data-enable-zoom');
    var enableAnimation = $('.webuza-google-map').attr('data-enable-animation');
    var animationDelay = 0;

    if( isNaN(zoomLevel) ) { zoomLevel = 12;}
    if( isNaN(centerlat) ) { centerlat = 51.47;}
    if( isNaN(centerlng) ) { centerlng = -0.268199;}
    if( typeof enableAnimation != 'undefined' && enableAnimation == 1 && $(window).width() > 690) { animationDelay = 180; enableAnimation = google.maps.Animation.BOUNCE } else { enableAnimation = null; }

    var latLng = new google.maps.LatLng(centerlat,centerlng);


    var mapOptions = {
        center: latLng,
        zoom: zoomLevel,
        mapTypeId: google.maps.MapTypeId.ROADMAP,
        scrollwheel: false,
        panControl: false,
        zoomControl: enableZoom,
        zoomControlOptions: {
            style: google.maps.ZoomControlStyle.LARGE,
            position: google.maps.ControlPosition.LEFT_CENTER
        },
        mapTypeControl: false,
        scaleControl: false,
        streetViewControl: false

    };

    var map = new google.maps.Map(document.getElementById($('.webuza-google-map').attr('id')), mapOptions);

    var infoWindows = [];

    google.maps.event.addListenerOnce(map, 'tilesloaded', function() {

        //don't start the animation until the marker image is loaded if there is one
        if(markerImg.length > 0) {
            var markerImgLoad = new Image();
            markerImgLoad.src = markerImg;

            $(markerImgLoad).load(function(){
                setMarkers(map);
            });
        }
        else {
            setMarkers(map);
        }
    });


    function setMarkers(map) {

        var marker = new google.maps.Marker({
            position: new google.maps.LatLng(map_data.lat, map_data.lng),
            map: map,
            animation: enableAnimation,
            icon: markerImg,
            optimized: false
        });

    }

});