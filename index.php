<?php include "SessionHelper.php";
include "config.php";
include "Includes/head.php";
?>

<html>

<head>
  <meta charset="utf-8">
  <!--Bootstrap Response-->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--Font Poppins-->
  <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>

<script src="js/main.js"> </script>

<body>

  <div class="container">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="slideshow"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner">
        <div class="item active">
          <img src="IMG/casein.jpg">
        </div>

        <div class="item">
          <img src="IMG/whey.jpg">
        </div>

        <div class="item">
          <img src="IMG/BCAA.jpg">
        </div>
      </div>

      <!-- Left and right controls -->
      <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>

  <br>
  <br>
  <br>
  <br>
  <br>


  <center><a href=" app/views/products.php"><button class="button-fluid">See All Products Here</button></a></center>


  <br>

  <div class="container-fluid  p-3 my-3 bg-primary text-white">
    <h2>Protein<img id="Protein" src="./IMG/1.jpg" alt="Protein"></h2>
    <p>The protein is bound, formed by small molecule chains called amino acids. Get rid of 21 different amino acids to work enough, but you can only do 12 of them.
      Leave 9 uninterrupted to prepare fast food.
      These 9 amino acids are called essential or essential.
      The main thing that is considered a protein with food is to use these 9 essential amino acids so that they can be used to build and use their tissues.
    </p>
  </div>
  </div>
  </div>

  <div class="container-fluid  p-3 my-3 bg-primary text-white">
    <h2>Vitamins
      <img id="Protein" src="IMG/11543362-1764628725573596.jpg" alt="Protein">
    </h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam a
      commodo est, pellentesque faucibus quam. Sed pharetra leo erat, et porttitor
      leo molestie id. Donec laoreet augue quis ex aliquam, ac fringilla felis malesuada. Praesent interdum
      dignissim imperdiet. Fusce massa lacus,
      pellentesque ut lacus sit amet, mollis placerat odio. Sed.</p>
  </div>


  <div class="container-fluid p-3 my-3 bg-primary text-white">
    <h2>New
      <img id="Protein" src="IMG/new.jpg" alt="Protein">
    </h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam a commodo est,
      pellentesque faucibus quam. Sed pharetra leo erat, et porttitor leo molestie id. Donec
      laoreet augue quis ex aliquam, ac fringilla felis malesuada. Praesent interdum dignissim imperdiet.
      Fusce massa lacus, pellentesque ut lacus sit amet, mollis placerat odio. Sed.</p>
  </div>
  <link rel="stylesheet" href="CSS/style.css">

</body>

</html>