<div class="box-body">
    <form role="form" method="post" action="<?php echo site_url()?>/add-users-post" >
              <div class="form-group">
        <label for="u_name">U_name:</label>
        <input type="text" class="form-control" id="u_name" name="u_name">
      </div>
            <div class="form-group">
        <label for="u_password">U_password:</label>
        <input type="password" class="form-control" id="u_password" name="u_password">
      </div>
            <div class="form-group">
        <label for="u_email">U_email:</label>
        <input type="email" class="form-control" id="u_email" name="u_email">
      </div>
            <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

