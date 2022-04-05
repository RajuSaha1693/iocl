<div class="box-body"> 
<form role="form" method="post" action="<?php echo site_url()?>edit-news_event-post" enctype="multipart/form-data">

 <input type="hidden" value="<?php echo $news_event[0]->id ?>"   name="news_event_id">


      <div class="form-group">
    <label for="n_head">Heading:</label>
    <input type="text" value="<?php echo $news_event[0]->n_head ?>" class="form-control" id="n_head" name="n_head">
  </div>
      <div class="form-group">
  <label for="n_description">Description:</label>
<textarea  class="form-control" id="n_description" name="n_description">     <?php echo $news_event[0]->n_description ?>       </textarea>
 </div>
      <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
