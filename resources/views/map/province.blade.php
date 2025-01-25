<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Provinsi di Indonesia</title>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
     integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY="
     crossorigin=""/>
     <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />

     <style>
     #map { height: 500px; }

     </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="http://127.0.0.1:8000/map/beranda">Start Bootstrap</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="http://127.0.0.1:8000/map/beranda">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="http://127.0.0.1:8000/map/provinces">Provinsi</a></li>
                        <li class="nav-item"><a class="nav-link" href="http://127.0.0.1:8000/map/regencies">Data Nonspatial</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    <div id="map"></div>

    <!-- Make sure you put this AFTER Leaflet's CSS -->
 <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
     integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo="
     crossorigin=""></script>

     <script>
        var map = L.map('map').setView([-1.6363305, 115.7448055], 5.4);
        L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 19,
    attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
}).addTo(map);
var provinces = @json($provinces);

provinces.forEach(function(province){
    L.marker([province.latitude, province.longitude]).addTo(map).bindPopup(province.name);
})
     </script>
</body>
</html>
