<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Gullfoss</title>
  <link rel="stylesheet" href="Style.css">
  <link rel="stylesheet" href="Modal.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="Content/slick.css"/>
  <link rel="stylesheet" type="text/css" href="Content/slick-theme.css"/>
  <link rel="stylesheet" type="text/css" href="//localhost/Iceland/flipping_gallery-master/flipping_gallery.css"/>
  <script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.js"></script>
  <script src="flipping_gallery-master/jquery.flipping_gallery.min.js" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
</head>

<body style="background:url(Content/GullfossHD.jpeg); background-size:100%; background-position:center; background-repeat:no-repeat; height:100vh">

<div class="container-fluid flip-div">

  <div class="flip-text">
    <h1 class="flip-header" style="top:8%;">WE SAW WATER RISE AND FALL</h1>
    <p class="flip-content">Our first full day in Iceland kicked off by traveling about 45 minutes outside of Reykjavik to Gullfoss.  Here in the Icelandic countryside, there was a large waterfall of the same name, as well as a large geyser.  It was our first real taste of the country's beauty, and the stop also served as a precursor to our first major activity; snowmobiling on a glacier.  After having a hot lunch of lamb stew at the lodge, a giant Truck picked us up to take us up to the glacier, since normal cars weren't allowed on the road up the mountain!</p>
  </div>

  <div class="gallery" style="top:15%; left:55%;">
     <?php
    for ($x = 1; $x <= 26; $x++){
      echo '<a href="#"><img src="Content/Gullfoss/Gull'.$x.'".jpg" /></a>';
    }
    ?>
  </div>

  <div class="slick-gallery">
     <?php
    for ($x = 1; $x <= 26; $x++){
      echo '<div><img src="Content/Gullfoss/Gull'.$x.'".jpg" /></div>';
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

<script type="text/javascript" src="Scripts/slick.min.js"></script>
<script>
  $(document).ready(function(){
  $('.slick-gallery').slick({
    infinite: true,
    slidesToShow:1,
    slidesToScroll:1
  });
});
</script>

</body>