<div class="box-body">


<form role="form" method="post" action="<?php echo site_url()?>edit-todays_word-post" enctype="multipart/form-data">

 <input type="hidden" value="<?php echo $todays_word[0]->id ?>"   name="todays_word_id">


      <div class="form-group">
    <label for="t_word">Word:</label>
    <input type="text" value="<?php echo $todays_word[0]->t_word ?>" class="form-control" id="t_word" name="t_word">
  </div>
    <div class="form-group">
    <label for="t_meaning">Meaning:</label>
    <input type="text" value="<?php echo $todays_word[0]->t_meaning ?>" class="form-control" id="t_meaning" name="t_meaning">
  </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>

