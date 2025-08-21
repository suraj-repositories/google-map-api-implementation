<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Draw Polyline</title>
    <style type="text/css">
        #map {
            height: 400px;
        }
    </style>
</head>

<body>
    <a href="/">Back</a>
    <h2>Draw Polyline (Path)</h2>

    <div id="map"></div>

    <script>
        function initMap() {
            const pathCoords = [{
                    lat: 26.4908,
                    lng: 80.2882
                },
                {
                    lat: 26.492,
                    lng: 80.289
                },
                {
                    lat: 26.495,
                    lng: 80.290
                }
            ];

            const map = new google.maps.Map(document.getElementById("map"), {
                zoom: 15,
                center: pathCoords[0]
            });

            new google.maps.Polyline({
                path: pathCoords,
                geodesic: true,
                strokeColor: "#0000FF",
                strokeOpacity: 1.0,
                strokeWeight: 3,
                map
            });
        }
    </script>


    <script async defer
        src="https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLE_MAP_KEY') }}&callback=initMap&libraries=places">
    </script>


</body>

</html>
