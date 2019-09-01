<?php
 if(isset($_POST['date_Sermon'])){
//   echo("Worked!");  
  editSermon($date_sermon,$link,$summary,$sermon['serID']);
  header("Location: ./sermons.php");
 }
 ?>
<form  method="post">
  <div class="form-group">
    <label for="date">Date of Sermon:</label>
    <input type="text" class="form-control" name="date_Sermon" value="<?=$sermon['date_sermon']?>">
    <!-- <input type="hidden" name="date_post" value="<?=date("m-d-Y ")?>" > -->
  </div>
  <div class="form-group">
    <label for=""> Video Link:</label>
    <input type="text" class="form-control" id="link" name="link" value="<?=$sermon['video_link']?>">
  </div>
 
  <div class="form-group">
    <label for="summary">Edit Sermon Summary:</label>
    <br>
    <label for="summary" class="text-muted"> Max 255 characters</label>
    
    <textarea class="form-control" id="summary" name="summary" maxlength="255" rows="4" ><?=$sermon['Summary']?>
    </textarea>
    
    <button type="submit" class="btn btn-primary">Submit</button>
  </div>
</form>