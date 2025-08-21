<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Custom Icon Marker</title>
    <style type="text/css">
        #map {
            height: 400px;
        }
    </style>
</head>

<body>
    <a href="/">Back</a>
    <h2>Custom Icon Marker</h2>

    <div id="map"></div>

    <script>
        function initMap() {
            const pos = {
                lat: 26.492,
                lng: 80.289
            };
            const map = new google.maps.Map(document.getElementById("map"), {
                zoom: 15,
                center: pos
            });

            new google.maps.Marker({
                position: pos,
                map: map,
                icon: "https://maps.google.com/mapfiles/kml/shapes/schools_maps.png", // any image/data:source path allowed
                title: "My Custom added Icon!"
            });
        }
    </script>



    <script async defer
        src="https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLE_MAP_KEY') }}&callback=initMap&libraries=places">
    </script>


</body>

</html>
