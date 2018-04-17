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
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="flipping_gallery-master/jquery.flipping_gallery.min.js" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
</head>

<body>

<div class="container-fluid">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="volcano-hero" style="background:url(Content/Volcano/VolcanoHD.jpeg); height:450px;"></div>
        <h2 class="volcano-head">WE WENT INSIDE A VOLCANO</h2>
          <p class="volcano-desc">The very first thing we did upon arriving in Iceland was take part in the Inside The Volcano Tour.  The Thrihnukagigur Volcano has been long dormant, and it has since been set up to allowvisitor to descend deep into its depths.  We walked over 3km through the blistering cold to get to the base camp, where we were briefed over coffee some details concerning the expedition.  Once inside it was a site to behold.It felt much like being inside of a cave, only the only exit was hundreds of feet above.</p>
          <a class="volcano-link" href="https://insidethevolcano.com/the-tour/detailed-itinerary/">Visit their site!</a>

          <div class="ice-slide row image-row">
              <div class="col-xs-12 col-md-4"><img src="Content/Volcano/Volcano1.jpg" onclick="openModal();currentSlide(1)" class="ice-image hover-shadow normal-image" /></div>
              <div class="col-xs-12 col-md-4"><img src="Content/Volcano/Volcano2.jpg" onclick="openModal();currentSlide(2)" class="ice-image hover-shadow normal-image" /></div>
              <div class="col-xs-12 col-md-4"><img src="Content/Volcano/Volcano3.jpg" onclick="openModal();currentSlide(3)" class="ice-image hover-shadow normal-image" /></div>
              <div class="col-xs-12 col-md-4"><img src="Content/Volcano/Volcano4.jpg" onclick="openModal();currentSlide(4)" class="ice-image hover-shadow normal-image" /></div>
              <div class="col-xs-12 col-md-4"><img src="Content/Volcano/Volcano5.jpg" onclick="openModal();currentSlide(5)" class="ice-image hover-shadow normal-image" /></div>
              <div class="col-xs-12 col-md-4"><img src="Content/Volcano/Volcano6.jpg" onclick="openModal();currentSlide(6)" class="ice-image hover-shadow normal-image" /></div>
              <div class="col-xs-12 col-md-4"><img src="Content/Volcano/Volcano7.jpg" onclick="openModal();currentSlide(7)" class="ice-image hover-shadow normal-image" /></div>
              <div class="col-xs-12 col-md-4"><img src="Content/Volcano/Volcano8.jpg" onclick="openModal();currentSlide(8)" class="ice-image hover-shadow normal-image" /></div>
          </div>
      </div>
    </div>
  </div>
</div>

<?php include("Modal.php") ?>

<script>
  function openModal() {
    document.getElementById('myModal').style.display = "block";
}

function closeModal() {
    document.getElementById('myModal').style.display = "none";
}

var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
    showSlides(slideIndex += n);
}

function currentSlide(n) {
    showSlides(slideIndex = n);
}

function showSlides(n) {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("demo");
    var captionText = document.getElementById("caption");
    if (n > slides.length) { slideIndex = 1 }
    if (n < 1) { slideIndex = slides.length }
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex - 1].style.display = "block";
    dots[slideIndex - 1].className += " active";
    captionText.innerHTML = dots[slideIndex - 1].alt;
}
</script>


<script>
  $(document).ready(function(){
  $('.ice-slide').slick({
    slidesToShow: 3,
    slidesToScroll: 3,
    dots: true,
    arrows: true,
    // autoplay: true,
    // autoplaySpeed: 2000
    responsive: [
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          arrows: true,
          dots: false
        }
      }
    ]
  });
});
</script>


<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="slick/slick.min.js"></script>
