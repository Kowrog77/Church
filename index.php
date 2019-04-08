<?php
$pageName="Mount Comfort Church";
$favicon="./image/jpg";
$styles ="./css/styles.css";
?>


    <?php
    include "./view/header.php";
    ?>



    
    <div id="carouselExampleIndicators" class="carousel slide border border-dark rounded " data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item  active">
          <img src="./images/mtcmft_web_ads_1.jpg" class="d-block w-100 rounded" alt="...">
        </div>
        <div class="carousel-item">
          <img src="./images/mtcmft_web_ads_2.jpg" class="d-block w-100 rounded" alt="...">
        </div>
        <div class="carousel-item">
          <img src="./images/mtcmft_web_ads_3.jpg" class="d-block w-100 rounded" alt="...">
        </div>
        <div class="carousel-item">
          <img src="./images/mtcmft_web_ads_4.jpg" class="d-block w-100 rounded" alt="...">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
    <div class="jumbotron">
      <h1 class="display-4">Knowing Jesus & Making Him Known</h1>
      <p class="lead">We do this by Loving God, Loving Others & Reaching the World</p>
      <hr class="my-4">
      <p>We'd love to see you at one of our weekly meetings.<br />
        Take a look at our Weekly Schedule on the right panel of this page </p>
      <a class="btn btn-primary btn-lg" href="about.php" role="button">Learn more</a>
    </div>




 
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
 <?php Include "./view/footer.php"?>
