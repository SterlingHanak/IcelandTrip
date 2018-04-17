<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Skogafoss</title>
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

<body style="background:url(Content/SkogafossHD.jpg); background-size:100%; background-position:center; background-repeat:no-repeat; height:100vh">

<div class="container-fluid flip-div">

  <div class="flip-text">
    <h1 class="flip-header" style="top:8%;">WE WENT TO FAMOUS SKOGAFOSS</h1>
    <p class="flip-content">Though far from the biggest waterfall in Iceland, Skogafoss was memorable none the less.  Located right next to the black beach, Skogafoss had a very special charm to it.  We took some of our best pictures here, and I was thrilled to see the little waterfall 2 years later on one of my favorite shows; History Channel's Vikings.</p>
  </div>

  <div class=" skogafoss-gallery gallery" style="top:15%; left:55%;">
     <?php
    for ($x = 1; $x <= 27; $x++){
      echo '<a href="#"><img src="Content/Skogafoss/Fall'.$x.'".jpg" /></a>';
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