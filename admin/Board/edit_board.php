<?php
 if(isset($_POST['updateID'])){
  // echo("Worked!");
 

    $name = $_FILES['image']['name']; 
    if($name !=NULL){
    $tmpname = $_FILES['image']['tmp_name'];
    $dir =getcwd().DIRECTORY_SEPARATOR .'boardphotos'.DIRECTORY_SEPARATOR. $name;
    move_uploaded_file($tmpname,$dir);
  }else{
    $name = ($post['image_ID']);
    
  }
  
  editMember($Name,$name,$title,$contact,$member['bID']);
  header("Location: ./board_info.php");
}

 ?>
<form  method="post" enctype="multipart/form-data">
  <div class="form-group">
    <label for="name"> Edit Name:</label>
    <input type="text" class="form-control" name="name" value="<?= $member['name']?>">
    <input type="hidden" name="updateID" value="yes" >
  </div>
  <div class="form-group">
    <label for="">Position: </label>
    <input type="text" class="form-control" id=title" name="title" value="<?= $member['position']?>">
  </div>
  <div>
        <label for="photo"> Current Photo</label>
        <br>
        <img  class="rounded" src="./boardphotos/<?= $member['photo']?>" id="currentImage"style="width:25%; height:auto;">
    </div>
  <div class="form-group">
    <label for="image"> Edit Image:</label>
    <div class ="custom-file">
        <label  class="custom-file-label" for="image">Choose Image</label><br>
            <input type="file" class="custom-file-input" name="image" id="image" aria-describedby="inputGroupFileAddon01" accept="image/*">
    </div>
    
  </div>
  <div class="form-group">
    <label for="detail"> Edit Contact:</label>
    <br>
    
    <input type="text" class="form-control" id="contact" name="contact" value="<?= $member['contact']?>">
    
    <button type="submit" class="btn btn-primary">Submit</button>
  </div>
</form>