<h2>Add Event</h2>
   
      <a href="audioUpload.php" style="float:right">Audio</a>
 
<form action="upload.php" method="post" enctype="multipart/form-data">
  <div class="form-group">
    <label for="date">Date of Event:</label>
    <input type="text" class="form-control" name="date" placeholder="<?=date("m/d/Y")?>">
  </div>
  <div class="form-group">
    <label for="">Link:</label>
    <input type="text" class="form-control" id="link" name="link" >
  </div>
  <div class="form-group">
    <label for="image"> Add Image:</label><br>
        <input type="file" name="image" id="image" accept="image/*">
    
  </div>
  <div class="form-group">
    <label for="detail"> Add Event Details:</label>
    <textarea class="form-control" id="detail" name="detail"rows="3"></textarea>
    <br>
    <button type="submit" class="btn btn-primary">Submit</button>
  </div>
</form>


