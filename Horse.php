<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Horseback Riding</title>
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

<body style="background:url(Content/Horseback/HorseHD.jpg); background-size:100%; background-position:center; background-repeat:no-repeat; height:100vh">

<div class="container-fluid flip-div">

  <div class="flip-text">
    <h1 class="flip-header" style="top:8%;">WE WENT HORSEBACK RIDING ACROSS BEACHES AND FIELDS</h1>
    <p class="flip-content">Horseback riding, for me, could be described as one of those "incredible times you never want to have again".  While it was a truly amazing experience, the 9-hour trek left me battered and broken by the end, as my legs where so sore that I could barely even walk after getting off my horse.  But I'm still glad I went.  The Icelandic breed of horse is smaller than normal 
    horses, and they had longer hair as well.  I absolutely adored my horse, and I had a great time bonding with it along the trail.  Maybe some day I'll give the experience another chance,
    whether it be back in Iceland or somewhere closer to home.</p>
    <a class="flip-link" style="bottom:15%" href="http://eldhestar.is/tours/day-tours/the-beach-ride/">Visit their site!</a>
  </div>

  <div class="gallery" style="top:15%; left:55%;">
     <?php
    for ($x = 1; $x <= 8; $x++){
      echo '<a href="#"><img src="Content/Horseback/Horse'.$x.'".jpg" /></a>';
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
