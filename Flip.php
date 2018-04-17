<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Inside The Volcano</title>
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

<body style="background:url(Content/Volcano/VolcanoHD.jpeg); background-size:100%; background-position:center; background-repeat:no-repeat; height:100vh">

<div class="container-fluid flip-div">
  <h1 class="flip-header">WE WENT INSIDE A VOLCANO</h1>
  <p class="flip-content">The very first thing we did upon arriving in Iceland was take part in the Inside The Volcano Tour.  The Thrihnukagigur Volcano has been long dormant, and it has since been set up to allowvisitor to descend deep into its depths.  We walked over 3km through the blistering cold to get to the base camp, where we were briefed over coffee some details concerning the expedition.  Once inside it was a site to behold.It felt much like being inside of a cave, only the only exit was hundreds of feet above.</p>
  <a class="flip-link" href="https://insidethevolcano.com/the-tour/detailed-itinerary/">Visit their site!</a>
  <div class="gallery" style="top:15%; left:55%;">
    <?php
    for ($x = 1; $x <= 8; $x++){
      echo '<a href="#"><img src="Content/Volcano/Volcano'.$x.'".jpg" /></a>';
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