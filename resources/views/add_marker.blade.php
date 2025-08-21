<!DOCTYPE html>
<html >

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Add Marker</title>
    <style type="text/css">
        #map {
          height: 400px;
        }
    </style>
</head>

<body>

    <a href="/">Back</a>
    <h2> Add Marker  </h2>
    <div id="map"></div>

    <script type="text/javascript">
        document.addEventListener('DOMContentLoaded', function(){
            showMap(26.490865241101783, 80.28828677937621);
        });

        function showMap(lat, lng) {
          const myLatLng = { lat: lat, lng: lng };
          const map = new google.maps.Map(document.getElementById("map"), {
            zoom: 15,
            center: myLatLng,
          });

          new google.maps.Marker({
            position: myLatLng,
            map,
            title: "My Diploma college!",
          });

        }
    </script>

   <script type="text/javascript" src="https://maps.google.com/maps/api/js?key={{ env('GOOGLE_MAP_KEY') }}&libraries" ></script>



</body>
</html>
