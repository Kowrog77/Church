<?php
if(isset($_POST['date_Sermon'])){
    // echo("Worked!");
    addsermon($date_sermon,$link,$summary);
    
}

?>
<h2>Add Sermon</h2>
   
      
 
<form  method="post">
  <div class="form-group">
    <label for="date">Date of Sermons:</label>
    <input type="text" class="form-control" name="date_Sermon" placeholder="<?=date("m/d/Y")?>">
    <!-- <input type="hidden" name="date_post" value="<?=date("m-d-Y")?>" > -->
  </div>
  <div class="form-group">
    <label for="">Video Link:</label>
    <input type="text" class="form-control" id="link" name="link" placeholder="https://www.google.com">
  </div>
  <div class="form-group">
    <label for="summary"> Sermon Summary:</label>
    <br>
    <label for="summary" class="text-muted"> Max 255 characters</label>
    
    <textarea class="form-control" id="summary" name="summary" maxlength="255" rows="4" placeholder="Summary,Verses,etc."></textarea>
    
    <button type="submit" class="btn btn-primary">Submit</button>
  </div>
</form>