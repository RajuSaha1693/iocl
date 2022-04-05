
      <div class="box-body">
        <?php if($this->session->flashdata('success')){ ?>
          <div class="alert alert-success">
            <strong><span class="glyphicon glyphicon-ok"></span>   <?php echo $this->session->flashdata('success'); ?></strong>
          </div>
        <?php } ?>

        <?php if(!empty($users)) {?>
          <table class="table table-hover">
            <thead>
              <tr>
                <th>SL No</th>
                <th>u_name</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody>
              <?php $i=1; foreach($users as $user) { ?>
                <tr>
                  <td> <?php echo $i; ?> </td>
                  <td> <a href="<?php echo site_url()?>view-users/<?php echo $user->id?>" > <?php echo $user->u_name ?> </a> </td>

                  <td>
                    <a href="<?php echo site_url()?>change-status-users/<?php echo $user->id ?>" > <?php if($user->status==0){ echo "Activate"; } else { echo "Deactivate"; } ?></a>
                    <a href="<?php echo site_url()?>edit-users/<?php echo $user->id?>" >Edit</a>
                    <a href="<?php echo site_url()?>delete-users/<?php echo $user->id?>" onclick="return confirm('are you sure to delete')">Delete</a>
                  </td>

                </tr>
                <?php $i++; } ?>
              </tbody>
            </table>
          <?php } else {?>
            <div class="alert alert-info" role="alert">
              <strong>No Userss Found!</strong>
            </div>
          <?php } ?>
        </div>
  

