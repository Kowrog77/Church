<?php
$pageName="Mount Comfort ";
$favicon="./images/favicon.jpg";
$styles ="./css/styles.css";
$logo = "./images/logo.jpg";
$index="./index.php";

include "./view/Header.php";
include "./model/database.php";
include "./model/sermon_db.php";
include "./model/sermon_data.php";
?>
<div class="container">
<div class="jumbotron text-light header">
  <h1 class="display-3">Listen To The Latest Sermon</h1>
  <hr class="my-4">
  <p>See all the of the Sermon on our Mount Comfort Bible Church Youtube Channel!</p>
  <a class="btn btn-secondary btn-lg btn-block" href="https://www.youtube.com/channel/UC4nf_LTiMTZ2E7D3Mv2dKUQ" target="_blank" role="button">Click Here</a>
</div>

  <?php 
    usort($arraysermons,"sortByID");
    foreach($arraysermons as $sermon){
    ?>
    <div class="card mx-auto" style="width: 90%; height: auto; margin:20px; padding:10px">

    
  
    <div class="card-body">
        <h5 class="card-title">Date of Sermon: <?= $sermon['date_sermon']?></h5>
        <div class="embed-responsive embed-responsive-16by9 rounded">
            <iframe class="embed-responsive-item" src=" <?= $sermon['video_link']?>" allowfullscreen></iframe>
        </div>
        <p class="card-text">Sermon Summary: <?= $sermon['Summary']?></p>
     
    </div>

  </div>
 

 <?php 
  }
 ?>
 
</div>
<?php

include "./view/Footer.php";
?>