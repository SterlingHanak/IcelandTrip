<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Mountain Biking</title>
  <link rel="stylesheet" href="Style.css">
  <link rel="stylesheet" href="Modal.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="slick/slick.css"/>
  <link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>
  <link rel="stylesheet" type="text/css" href="//localhost/Iceland/flipping_gallery-master/flipping_gallery.css"/>
  <script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.js"></script>
  <script src="flipping_gallery-master/jquery.flipping_gallery.min.js" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
</head>

<body style="background:url(Content/Biking/BikeHD.jpg); background-size:100%; background-position:center; background-repeat:no-repeat; height:100vh">

<div class="container-fluid flip-div">

  <div class="flip-text">
    <h1 class="flip-header" style="top:8%;">WE WENT MOUNTAIN BIKING OVER GEYSERS AND VOLCANOS</h1>
    <p class="flip-content">My other favorite activity from the trip was an all day mountain biking adventure through and around Hengill Volcano.  Our two wonderful guides started us on top of a mountain in the freezing cold, but soon enough after riding down some snow-topped hills and through rivers, we made it to what seemed like a scene out of Jurassic Park.  The lower part of the mountain range/volcano had a very prehistoric vibe to it, with rising smoke and pools of boiling hot sulfuric water.  The long ride left us exhausted, sore, and bruised, but it was all worth it because at the end of the day we got to relax in what would be our first stay in a natural Icelandic hot spring!</p>
    <a class="flip-link" style="bottom:15%" href="http://bikecompany.is/portfolio/hengill/">Visit their site!</a>
  </div>

  <div class="gallery" style="top:15%; left:55%;">
     <?php
    for ($x = 1; $x <= 21; $x++){
      echo '<a href="#"><img src="Content/Biking/Bike'.$x.'".jpg" /></a>';
    }
    ?>
  </div>

</div>

<script>
  $( document ).ready(function() {
   $(".gallery").flipping_gallery({
    direction: "forward",
    selector: "> a",
    spacing: 10,
    showMaximum: 15,
    enableScroll: true
  });
 });
</script>

</body>