<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Dimmu Borgir</title>
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

<body style="background:url(Content/DimmuBorgirHD.jpg); background-size:100%; background-position:center; background-repeat:no-repeat; height:100vh">

<div class="container-fluid flip-div">

  <div class="flip-text">
    <h1 class="flip-header" style="top:8%;">WE EXPLORED 'DARK CITIES' AND A FAMOUS UNDERGROUND POND</h1>
    <p class="flip-content">Though they were two of the quicker stops on our adventure, they where pretty significant to me.  First was an ancient rock formation named Dimmu Borgir, which I was excited to see because it inspired the name of one of my favorite metal bands; Norway's Dimmu Borgir.  Translating to 'Dark Cities', the rocks definitely had a dark aurora about them.  We even managed to get sunburned somehow as the sun beat down for a few hours (a refreshing change of pace from Iceland's brutal wind and cold).  After Dimmu Borgir, we got to see a nearby underground pond that became famous in Game of Thrones, as it is the very same pond in which Jon Snow and Ygritte fell in love.</p>
  </div>

  <div class=" skogafoss-gallery gallery" style="top:15%; left:55%;">
     <?php
    for ($x = 1; $x <= 12; $x++){
      echo '<a href="#"><img src="Content/DimmuBorgir/Dimmu'.$x.'".jpg" /></a>';
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