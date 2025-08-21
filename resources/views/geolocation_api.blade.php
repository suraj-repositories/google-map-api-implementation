<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Geolocation api</title>
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
        function initMap() {
            const map = new google.maps.Map(document.getElementById("map"), {
                zoom: 14,
                center: {
                    lat: 20,
                    lng: 78
                }
            });

            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition((pos) => {
                    const userPos = {
                        lat: pos.coords.latitude,
                        lng: pos.coords.longitude
                    };
                    new google.maps.Marker({
                        position: userPos,
                        map: map,
                        title: "You are here!"
                    });
                    map.setCenter(userPos);
                });
            }
        }
    </script>




    <script async defer
        src="https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLE_MAP_KEY') }}&callback=initMap&libraries=places">
    </script>


</body>

</html>
