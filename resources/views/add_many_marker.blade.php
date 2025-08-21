<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Add Many Markers</title>
    <style type="text/css">
        #map {
            height: 400px;
        }
    </style>
</head>

<body>
    <a href="/">Back</a>
    <h2>Add Many Markers</h2>

    <div id="map"></div>

    <script type="text/javascript">
        document.addEventListener('DOMContentLoaded', function() {
            showMap();
        });

        function showMap() {
            const locations = [{
                    lat: 26.490865241101783,
                    lng: 80.28828677937621,
                    title: "My Diploma College"
                },
                {
                    lat: 26.492,
                    lng: 80.289,
                    title: "Library"
                },
                {
                    lat: 26.493,
                    lng: 80.287,
                    title: "Hostel"
                },
                {
                    lat: 26.495,
                    lng: 80.290,
                    title: "Playground"
                }
            ];

            const map = new google.maps.Map(document.getElementById("map"), {
                zoom: 15,
                center: locations[0]
            });

            locations.forEach(loc => {
                new google.maps.Marker({
                    position: {
                        lat: loc.lat,
                        lng: loc.lng
                    },
                    map: map,
                    title: loc.title
                });
            });
        }
    </script>


    <script type="text/javascript" src="https://maps.google.com/maps/api/js?key={{ env('GOOGLE_MAP_KEY') }}&libraries">
    </script>



</body>

</html>
