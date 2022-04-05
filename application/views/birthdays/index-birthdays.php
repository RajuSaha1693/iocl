<div class="box-body"> 
  <?php if($this->session->flashdata('success')){ ?>
  <div class="alert alert-success">
                    <strong><span class="glyphicon glyphicon-ok"></span>   <?php echo $this->session->flashdata('success'); ?></strong>
                </div>
  <?php } ?>

<?php if(!empty($birthdays)) {?>
  <table class="table table-hover">
    <thead>
      <tr>
        <th>SL No</th>
        <th>Name</th>
       <th>Actions</th>
      </tr>
    </thead>
    <tbody>
    <?php $i=1; foreach($birthdays as $birthday) { ?>
      <tr>
        <td> <?php echo $i; ?> </td>
        <td> <a href="<?php echo site_url()?>view-birthdays/<?php echo $birthday->id?>" > <?php echo $birthday->b_name ?> </a> </td>

        <td>
        <a href="<?php echo site_url()?>change-status-birthdays/<?php echo $birthday->id ?>" > <?php if($birthday->status==0){ echo "Activate"; } else { echo "Deactivate"; } ?></a>
        <a href="<?php echo site_url()?>edit-birthdays/<?php echo $birthday->id?>" >Edit</a>
        <a href="<?php echo site_url()?>delete-birthdays/<?php echo $birthday->id?>" onclick="return confirm('are you sure to delete')">Delete</a>
        </td>

      </tr>
    <?php $i++; } ?>
    </tbody>
  </table>
  <?php } else {?>
  <div class="alert alert-info" role="alert">
                    <strong>No Birthdayss Found!</strong>
                </div>
  <?php } ?>
</div>

