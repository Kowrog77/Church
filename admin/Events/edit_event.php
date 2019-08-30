 <?php
 if(isset($_POST['date_post'])){
  // echo("Worked!");
 

    $name = $_FILES['image']['name']; 
    if($name !=NULL){
    $tmpname = $_FILES['image']['tmp_name'];
    $dir =getcwd().DIRECTORY_SEPARATOR .'images'.DIRECTORY_SEPARATOR. $name;
    move_uploaded_file($tmpname,$dir);
  }else{
    $name = ($post['image_ID']);
    
  }
  
  editPost($date_event,$date_post,$link,$name,$type,$details,$post['post_ID']);
  header("Location: ./Events.php");
}
 $typename = getatype($post['type_ID']);
 ?>
<form  method="post" enctype="multipart/form-data">
  <div class="form-group">
    <label for="date"> Edit Date of Event:</label>
    <input type="text" class="form-control" name="date_event" value="<?=$post['date_event']?>">
    <input type="hidden" name="date_post" value="<?=date("m-d-Y ")?>" >
  </div>
  <div class="form-group">
    <label for="">Link:</label>
    <input type="text" class="form-control" id="link" name="link" value="<?=$post['link']?>">
  </div>
  <div>
        <label for="photo"> Current Photo</label>
        <br>
        <img  class="rounded" src="../images/<?= $post['image_ID']?>" id="currentImage"style="width:25%; height:auto;">
    </div>
  <div class="form-group">
    <label for="image"> Edit Image:</label>
    <div class ="custom-file">
        <label  class="custom-file-label" for="image">Choose Image</label><br>
            <input type="file" class="custom-file-input" name="image" id="image" aria-describedby="inputGroupFileAddon01" accept="image/*">
    </div>
    
  <div class="form-group">
    <label for="">Types</label>
    <select class="form-control" name="type" >
      <?php
      foreach($arraytypes as $types){
        ?><option value="<?=$types['type_ID']?>""
         <?php
        if($types['typename'] == $typename){
            echo('selected');
        }
      ?>
      ><?=$types['typename']?>
      </option>
    <?php
      }
      ?>
    </select>
  </div>
  </div>
  <div class="form-group">
    <label for="detail"> Edit Event Details:</label>
    <br>
    <label for="detail" class="text-muted"> Max 255 characters</label>
    
    <textarea class="form-control" id="detail" name="details" maxlength="255" rows="4" ><?=$post['post_info']?></textarea>
    
    <button type="submit" class="btn btn-primary">Submit</button>
  </div>
</form>