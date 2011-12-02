       var directionDisplay;
        var directionsService = new google.maps.DirectionsService();
        var map;
        var positionSet;

        myInitMaps = function initialize() {
             var position;
            // Try HTML5 geolocation
            navigator.geolocation.getCurrentPosition(function(position) {
                var pos = new google.maps.LatLng(position.coords.latitude,
                position.coords.longitude);

            var contentInfoWindow = "<div class='myMainTableDiv'><div class='myFirstTableRow'><div class='myTableCell'><img src='bkrender.jpeg' style='width: 30px' /></div><div class='myTableCell'>Telecom Cell and BkRender are geolocalizing you.</div></div></div><div class='youAreHere'>And you're here!</div>";

                var infowindow = new google.maps.InfoWindow({
                    map: map,
                    position: pos,
                    maxWidth: 100,
                    maxHeight: 20,
                    content: contentInfoWindow
                });
                positionSet = pos;
                map.setCenter(pos);
            });
         
            directionsDisplay = new google.maps.DirectionsRenderer();        
        
            var myOptions = {
                zoom: 14,
                mapTypeId: google.maps.MapTypeId.ROADMAP,
                center: position
            }
        
            map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);
            directionsDisplay.setMap(map);
         
            calcRoute();
            
        }