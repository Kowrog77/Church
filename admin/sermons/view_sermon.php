<div class="container">
<form method="get" action="">
    <input type="hidden" name ="addID" value="yes">
    <button type="submit" class="btn btn-secondary btn-lg btn-block">Add Sermon</button>
</form>
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
    <form method="get" action="">
        <div class="btn-group mx-auto " role="group" >
          <button type="submit" class="btn btn-secondary" name="editID" value="<?=$sermon['serID']?>">Edit</button>
          <button type="sumbit" class="btn btn-danger"  name="delID" value="<?=$sermon['serID']?>">Delete</button>
        </div>
    </form>
  </div>
 

 <?php 
  }
 ?>
 
</div>