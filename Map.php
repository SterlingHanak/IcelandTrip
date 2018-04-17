<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Cleveland=>Iceland</title>
  <link rel="stylesheet" href="Style.css">
  <link rel="stylesheet" href="Modal.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="slick/slick.css"/>
  <link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
</head>

<body>

<h1 class="aboutHead">WHERE WE WENT</h1>

<div class="map-container">
<div id="map" style="height: 100vh; width:100vw; display:inline-block;"></div>
<!-- <div id="infowindow" style="height:100vh; width:20vw; display:inline-block;"></div> -->
</div>
<script src="Scripts/Route.js" async defer></script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAA9chKB_t6DVgchA802q3xryVh5a6KibY&callback=initMap"></script>
<script src="Scripts/gmaps.js" async defer></script>

</body>