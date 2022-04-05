<div class="box-body">
  <?php if($this->session->flashdata('success')){ ?>
  <div class="alert alert-success">
                    <strong><span class="glyphicon glyphicon-ok"></span>   <?php echo $this->session->flashdata('success'); ?></strong>
                </div>
  <?php } ?>

<?php if(!empty($todays_words)) {?>
  <table class="table table-hover">
    <thead>
      <tr>
        <th>SL No</th>
        <th>Word</th>
       <th>Actions</th>
      </tr>
    </thead>
    <tbody>
    <?php $i=1; foreach($todays_words as $todays_word) { ?>
      <tr>
        <td> <?php echo $i; ?> </td>
        <td> <a href="<?php echo site_url()?>view-todays_word/<?php echo $todays_word->id?>" > <?php echo $todays_word->t_word ?> </a> </td>

        <td>
        <a href="<?php echo site_url()?>change-status-todays_word/<?php echo $todays_word->id ?>" > <?php if($todays_word->status==0){ echo "Activate"; } else { echo "Deactivate"; } ?></a>
        <a href="<?php echo site_url()?>edit-todays_word/<?php echo $todays_word->id?>" >Edit</a>
        <a href="<?php echo site_url()?>delete-todays_word/<?php echo $todays_word->id?>" onclick="return confirm('are you sure to delete')">Delete</a>
        </td>

      </tr>
    <?php $i++; } ?>
    </tbody>
  </table>
  <?php } else {?>
  <div class="alert alert-info" role="alert">
                    <strong>No Todays_words Found!</strong>
                </div>
  <?php } ?>
</div>

