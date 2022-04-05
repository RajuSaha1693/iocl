<div class="box-body">  
    <form role="form" method="post" action="<?php echo site_url()?>/add-news_event-post" >
              <div class="form-group">
        <label for="n_head">Heading:</label>
        <input type="text" class="form-control" id="n_head" name="n_head">
      </div>
            <div class="form-group">
      <label for="n_description">Description:</label>
    <textarea  class="form-control" id="n_description" name="n_description"></textarea>
      </div>
            <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

