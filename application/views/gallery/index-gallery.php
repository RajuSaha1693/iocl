<div class="box-body"> 
  <?php if($this->session->flashdata('success')){ ?>
  <div class="alert alert-success">
                    <strong><span class="glyphicon glyphicon-ok"></span>   <?php echo $this->session->flashdata('success'); ?></strong>
                </div>
  <?php } ?>

<?php if(!empty($gallerys)) {?>
  <table class="table table-hover">
    <thead>
      <tr>
        <th>SL No</th>
        <th>Image Name</th>
       <th>Actions</th>
      </tr>
    </thead>
    <tbody>
    <?php $i=1; foreach($gallerys as $gallery) { ?>
      <tr>
        <td> <?php echo $i; ?> </td>
        <td> <a href="<?php echo site_url()?>view-gallery/<?php echo $gallery->id?>" > <?php echo $gallery->g_name ?> </a> </td>

        <td>
        <a href="<?php echo site_url()?>change-status-gallery/<?php echo $gallery->id ?>" > <?php if($gallery->status==0){ echo "Activate"; } else { echo "Deactivate"; } ?></a>
        <a href="<?php echo site_url()?>edit-gallery/<?php echo $gallery->id?>" >Edit</a>
        <a href="<?php echo site_url()?>delete-gallery/<?php echo $gallery->id?>" onclick="return confirm('are you sure to delete')">Delete</a>
        </td>

      </tr>
    <?php $i++; } ?>
    </tbody>
  </table>
  <?php } else {?>
  <div class="alert alert-info" role="alert">
                    <strong>No Gallerys Found!</strong>
                </div>
  <?php } ?>
</div>

