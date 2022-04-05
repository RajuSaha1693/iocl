<div class="box-body">  
    <form role="form" method="post" action="<?php echo site_url()?>/add-birthdays-post" >
              <div class="form-group">
        <label for="b_name">Name:</label>
        <input type="text" class="form-control" id="b_name" name="b_name">
      </div>
            <div class="form-group">
        <label for="b_date">Date of Birth:</label>
        <input type="text" class="form-control" id="b_date" name="b_date">
      </div>
            <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
