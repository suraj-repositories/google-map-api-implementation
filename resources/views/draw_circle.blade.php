<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Draw Circle - radius</title>
    <style type="text/css">
        #map {
            height: 400px;
        }
    </style>
</head>

<body>
    <a href="/">Back</a>
    <h2>Draw Circle - Radius</h2>

    <div id="map"></div>

    <script>
        function initMap() {
            const pos = {
                lat: 26.4908,
                lng: 80.2882
            };
            const map = new google.maps.Map(document.getElementById("map"), {
                zoom: 14,
                center: pos
            });

            new google.maps.Circle({
                strokeColor: "#FF0000",
                strokeOpacity: 0.8,
                strokeWeight: 2,
                fillColor: "#FF0000",
                fillOpacity: 0.35,
                map,
                center: pos,
                radius: 500 // meters
            });
        }
    </script>

    <script async defer
        src="https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLE_MAP_KEY') }}&callback=initMap&libraries=places">
    </script>


</body>

</html>
