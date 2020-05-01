@extends('layouts.app')
@section('content')
<div class="container">
  <h2>Google autocomplete place search</h2>
  <form action="/action_page.php">
    <div class="form-group">
      <label for="email">Location:</label>
      <input type="search" class="form-control" id="searchInput" placeholder="Enter a location">
      <!-- Google map -->
      <br>
        <div class="map" id="map" style="width: 100%; height: 300px;"></div>
        <br>
        <!-- Display geolocation data -->
        <ul class="geo-data">
            <li>Full Address: <span id="location"></span></li>
            <li>Postal Code: <span id="postal_code"></span></li>
            <li>Country: <span id="country"></span></li>
            <li>Latitude: <span id="lat"></span></li>
            <li>Longitude: <span id="lon"></span></li>
        </ul>
    </div>
  </form>
</div>
@endsection

