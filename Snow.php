<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Snow Mobiling</title>
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

<body style="background:url(Content/Snowmobile/SnowHD.jpg); background-size:100%; background-position:center; background-repeat:no-repeat; height:100vh">

<div class="container-fluid flip-div">

  <div class="flip-text">
    <h1 class="flip-header" style="top:8%;">WE WENT SNOWMOBILING ON A GLACIER</h1>
    <p class="flip-content">Probably my favorite thing we did on the trip, going snowmobiling on Langjokull Glacier was an unforgettable experience.  When our guide picked us up, the first thing I noticed was the size of his truck.  Right then and there I knew we were about to go somewhere truly out of the ordinary, as he was trained to traverse the dangerous roads through the icy mountains.  The snowmobiling itself was incredible.  It felt like I was driving along the edge of the world, with snow and blue sky as far as the eye could see.  It was almost as if we were thousands of miles from everyone and everything.  We even found a cool ice cave out in the middle of nowhere.  If I ever go back to Iceland, the first thing I'm doing is going snowmobiling again.</p>
    <a class="flip-link" style="bottom:15%" href="https://adventures.is/iceland/day-tours/snowmobiling/">Visit their site!</a>
  </div>

  <div class="gallery" style="top:15%; left:55%;">
     <?php
    for ($x = 1; $x <= 12; $x++){
      echo '<a href="#"><img src="Content/Snowmobile/Snow'.$x.'".jpg" /></a>';
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