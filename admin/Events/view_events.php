<div class="container">
<form method="get" action="">
    <input type="hidden" name ="addID" value="yes">
    <button type="submit" class="btn btn-secondary btn-lg btn-block">Add Event</button>
</form>
  <?php 
    usort($arrayposts,"sortByID");
    foreach($arrayposts as $posts){
    ?>
    <div class="card mx-auto" style="width: 90%; height: auto; margin:20px; padding:10px">
  <?php
  if($posts['image_ID'] != NULL){
   ?>
   <img src="./images/<?= $posts['image_ID']?>" class="card-img-top" alt="<?= $posts['image_ID']?> Image" style="width:75%; height:auto;">
  <?php
  }
  ?>
    
  
    <div class="card-body">
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
      <p class="card-text"><small class="text-muted">Date Posted:<?= $posts['date_post']?></small></p>
    </div>
    <form method="get" action="">
        <div class="btn-group mx-auto " role="group" >
          <button type="submit" class="btn btn-secondary" name="editID" value="<?=$posts['post_ID']?>">Edit</button>
          <button type="sumbit" class="btn btn-danger"  name="delID" value="<?=$posts['post_ID']?>">Delete</button>
        </div>
    </form>
  </div>
 

 <?php 
  }
 ?>
 
</div>