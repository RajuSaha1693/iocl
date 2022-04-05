<div class="box-body">  
<form role="form" method="post" action="<?php echo site_url()?>edit-gallery-post" enctype="multipart/form-data">

 <input type="hidden" value="<?php echo $gallery[0]->id ?>"   name="gallery_id">


      <div class="form-group">
    <label for="g_name">Image name:</label>
    <input type="text" value="<?php echo $gallery[0]->g_name ?>" class="form-control" id="g_name" name="g_name">
  </div>
    <div class="form-group">
    <label for="g_notes">Image Tagline:</label>
    <input type="text" value="<?php echo $gallery[0]->g_notes ?>" class="form-control" id="g_notes" name="g_notes">
  </div>
    <div class="form-group">
    <label for="g_location">Select Image:</label>
    <input type="file" class="btn btn-primary" id="g_location" name="g_location">
  </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>

