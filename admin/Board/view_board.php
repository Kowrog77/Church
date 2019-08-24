<div class="container">

  <?php 
    usort($arrayboard,"sortByID");
    foreach($arrayboard as $member){
    ?>
    <div class="card mx-auto" style="width: 90%; height: auto; margin:20px; padding:10px">

    
    <img src="./boardphotos/<?= $member['photo']?>" class="card-img-top" alt="Photo of <?= $member['name']?> Image" style="width:75%; height:auto;">
    <div class="card-body">
    
        <h5 class="card-title">Name: <?= $member['name']?></h5>
        
        <p class="card-text">Title: <?= $member['postion']?>
        <?php
        if($member['contact']!=Null){
            ?>
            </br>
            Contact: <?= $member['contact']?></
        <?php    
        }
        ?>
        </</p>
     
    </div>
    <form method="get" action="">
          <button type="submit" class="btn btn-secondary" name="editID" value="<?=$member['bID']?>">Edit</button>        
    </form>
  </div>
 

 <?php 
  }
 ?>
 
</div>