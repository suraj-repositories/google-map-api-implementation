<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Live Location</title>
    <style type="text/css">
        #map {
            height: 400px;
        }
    </style>
</head>

<body>
    <a href="/">Back</a>
    <h2>User Location : Geolocation API</h2>

    <div id="map"></div>

    <script>
        let map;
        let marker;

        document.addEventListener('DOMContentLoaded', function() {
            initMap();
        });

        function initMap() {
            map = new google.maps.Map(document.getElementById("map"), {
                zoom: 15,
                center: {
                    lat: 20,
                    lng: 78
                }
            });

            if (navigator.geolocation) {
                navigator.geolocation.watchPosition(
                    (pos) => {
                        const userPos = {
                            lat: pos.coords.latitude,
                            lng: pos.coords.longitude
                        };

                        if (!marker) {
                            marker = new google.maps.Marker({
                                position: userPos,
                                map: map,
                                title: "You are here!"
                            });
                        } else {
                            marker.setPosition(userPos);
                        }

                        map.setCenter(userPos);
                    },
                    (err) => {
                        console.error("Geolocation error:", err);
                    }, {
                        enableHighAccuracy: true,
                        maximumAge: 0
                    }
                );
            } else {
                alert("Geolocation is not supported by this browser.");
            }
        }
    </script>

    <script async defer
        src="https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLE_MAP_KEY') }}&callback=initMap&libraries=places">
    </script>


</body>

</html>
