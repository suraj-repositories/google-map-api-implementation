<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Draw Polygon</title>
    <style type="text/css">
        #map {
            height: 400px;
        }
    </style>
</head>

<body>
    <a href="/">Back</a>
    <h2>Draw Polygon (Path)</h2>

    <div id="map"></div>

    <script>
        function initMap() {
            const areaCoords = [{
                    lat: 26.490,
                    lng: 80.287
                },
                {
                    lat: 26.492,
                    lng: 80.289
                },
                {
                    lat: 26.493,
                    lng: 80.285
                }
            ];

            const map = new google.maps.Map(document.getElementById("map"), {
                zoom: 15,
                center: areaCoords[0]
            });

            new google.maps.Polygon({
                paths: areaCoords,
                strokeColor: "#008000",
                strokeOpacity: 0.8,
                strokeWeight: 2,
                fillColor: "#008000",
                fillOpacity: 0.35,
                map
            });
        }
    </script>



    <script async defer
        src="https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLE_MAP_KEY') }}&callback=initMap&libraries=places">
    </script>


</body>

</html>
