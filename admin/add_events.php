<?php
if(isset($_POST['date_post'])){
    // echo("Worked!");
    $name = $_FILES['image']['name'];
    $tmpname = $_FILES['image']['tmp_name'];;
    $dir =getcwd().DIRECTORY_SEPARATOR .'images'.DIRECTORY_SEPARATOR. $name;
    
    move_uploaded_file($tmpname,$dir);
    addPost($date_event,$date_post,$link,$name,$type,$details);
    
}
$arraytypes = getAlltypes();
?>
<h2>Add Event</h2>
   
      
 
<form  method="post" enctype="multipart/form-data">
  <div class="form-group">
    <label for="date">Date of Event:</label>
    <input type="text" class="form-control" name="date_event" placeholder="<?=date("m/d/Y")?>">
    <input type="hidden" name="date_post" value="<?=date("m/d/Y")?>" >
  </div>
  <div class="form-group">
    <label for="">Link:</label>
    <input type="text" class="form-control" id="link" name="link" placeholder="https://www.google.com">
  </div>
  <div class="form-group">
    <label for="image"> Add Image:</label>
  <div class ="custom-file">
      <label  class="custom-file-label" for="image">Choose Image</label><br>
          <input type="file" class="custom-file-input" name="image" id="image" aria-describedby="inputGroupFileAddon01" accept="image/*">
  </div>
  <div class="form-group">
    <label for="">Types</label>
    <select class="form-control" name="type" >
      <?php
      foreach($arraytypes as $types){
        ?><option value="<?=$types['type_ID']?>"><?=$types['typename']?></option>
    <?php
      }
      ?>
    </select>
  </div>
  </div>
  <div class="form-group">
    <label for="detail"> Add Event Details:</label>
    <br>
    <label for="detail" class="text-muted"> Max 255 characters</label>
    
    <textarea class="form-control" id="detail" name="details" maxlength="255" rows="4" placeholder="Event Details "></textarea>
    
    <button type="submit" class="btn btn-primary">Submit</button>
  </div>
</form>