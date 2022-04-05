<div class="box-body"> 
    <form role="form" method="post" action="<?php echo site_url()?>/add-todays_word-post" >
              <div class="form-group">
        <label for="t_word">Word:</label>
        <input type="text" class="form-control" id="t_word" name="t_word">
      </div>
            <div class="form-group">
        <label for="t_meaning">Meaning:</label>
        <input type="text" class="form-control" id="t_meaning" name="t_meaning">
      </div>
            <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
