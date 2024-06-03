@extends('layouts.app')

@section('content')
<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">About Us</div>
                <div class="card-body">
                    <h2>Welcome to Basketball Info Hub</h2>
                    <p>Basketball Info Hub is your ultimate destination for everything related to basketball. Whether you're a fan, a player, or just someone curious about the sport, our platform provides comprehensive information on basketball players, the latest news, and insightful articles. Our mission is to build a vibrant community where enthusiasts can connect, share, and stay updated with the latest in basketball.</p>
                    
                    <h3>Our Vision</h3>
                    <p>Our vision is to become the go-to resource for basketball fans worldwide. We aim to provide accurate, up-to-date information and foster a community where people can share their love for the game.</p>
                    
                    <h3>Our Team</h3>
                    <p>We are a group of passionate basketball enthusiasts dedicated to bringing you the best content and resources. Our team works tirelessly to ensure that our platform is always up-to-date and provides valuable insights into the world of basketball.</p>

                    <h3>Location</h3>
                    <p>We are based in the heart of London, a city with a rich history and a vibrant basketball community. Come visit us or drop us a message to learn more about our services.</p>
                    <div id="map" style="height: 400px;"></div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Leaflet.js CSS -->
<link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
<!-- Leaflet.js JavaScript -->
<script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
<script>
    // Initialize the map
    var map = L.map('map').setView([51.5074, -0.1278], 10);

    // Load and display tile layers on the map (OpenStreetMap)
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        maxZoom: 19,
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);

    // Add a marker
    L.marker([51.5074, -0.1278]).addTo(map)
        .bindPopup('We are here in London.')
        .openPopup();
</script>
@endsection
