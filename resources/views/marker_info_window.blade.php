<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Marker Info Modal</title>
    <style type="text/css">
        #map {
            height: 400px;
        }
    </style>
</head>

<body>
    <a href="/">Back</a>
    <h2>Map Info Window</h2>

    <div id="map"></div>

    <script>
        function initMap() {
            const pos = {
                lat: 26.4908,
                lng: 80.2882
            };
            const map = new google.maps.Map(document.getElementById("map"), {
                zoom: 15,
                center: pos
            });

            const marker = new google.maps.Marker({
                position: pos,
                map: map,
                title: "Click me!"
            });

            const info = new google.maps.InfoWindow({
                content: "<b>My Diploma College</b><br>Kanpur, India"
            });

            marker.addListener("click", () => {
                info.open(map, marker);
            });
        }
    </script>


    <script async defer
        src="https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLE_MAP_KEY') }}&callback=initMap&libraries=places">
    </script>


</body>

</html>
