<div class="box-body">  
<form role="form" method="post" action="<?php echo site_url()?>edit-birthdays-post" enctype="multipart/form-data">

 <input type="hidden" value="<?php echo $birthdays[0]->id ?>"   name="birthdays_id">


      <div class="form-group">
    <label for="b_name">Name:</label>
    <input type="text" value="<?php echo $birthdays[0]->b_name ?>" class="form-control" id="b_name" name="b_name">
  </div>
    <div class="form-group">
    <label for="b_date">Date of Birth:</label>
    <input type="text" value="<?php echo $birthdays[0]->b_date ?>" class="form-control" id="b_date" name="b_date">
  </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
