<div class="box-body">
<form role="form" method="post" action="<?php echo site_url()?>edit-users-post" enctype="multipart/form-data">

 <input type="hidden" value="<?php echo $users[0]->id ?>"   name="users_id">


      <div class="form-group">
    <label for="u_name">U_name:</label>
    <input type="text" value="<?php echo $users[0]->u_name ?>" class="form-control" id="u_name" name="u_name">
  </div>
    <div class="form-group">
    <label for="u_email">U_email:</label>
    <input type="email" value="<?php echo $users[0]->u_email ?>" class="form-control" id="u_email" name="u_email">
  </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
