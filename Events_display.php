

<?php
$pageName="Mount Comfort ";
$favicon="./images/favicon.jpg";
$styles ="./css/styles.css";
$logo = "./images/logo.jpg";
$index="./index.php";

include "./view/Header.php";
include "./model/database.php";
include "./model/post_db.php";
include "./model/Event_data.php";
?>
<div class="container">

  <?php 
    usort($arrayposts,"sortByID");
    foreach($arrayposts as $posts){
    ?>
    <div class="card mx-auto eventCard border-0" >
        <?php
        if($posts['image_ID'] != NULL){
        ?>
            <img src="./admin/Events/images/<?= $posts['image_ID']?>" class="card-img-top mx-auto rounded eventImage" alt="<?= $posts['image_ID']?> Image" >
        <?php
            }
            ?>
    
    <div class="card-body  text-white rounded mx-auto eventDetails" >
      <h5 class="card-title">Date of Event: <?= $posts['date_event']?></h5>
      <p class="card-text">Post Details: <?= $posts['post_info']?>
      </br> Type of Post:
      <?php 
          $typename = getatype($posts['types_ID']);
          echo($typename);
          
      ?>

      </br>
      Link: <a href ="<?= $posts['link']?>" target ="_blank"> <?= $posts['link']?></a>
      </p>
      <p class="card-text"><small class="datePost">Date Posted:<?= $posts['date_post']?></small></p>
    </div>
   
  </div>
 

 <?php 
  }
 ?>
 
</div>
<?php

include "./view/Footer.php";
?>