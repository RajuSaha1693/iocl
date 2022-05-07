
<div class="box-body">
  <?php if($this->session->flashdata('success')){ ?>
    <div class="alert alert-success">
      <strong><span class="glyphicon glyphicon-ok"></span>   <?php echo $this->session->flashdata('success'); ?></strong>
    </div>
  <?php } ?>

  <?php if(!empty($ghy_pipeline)) {?>
    <table class="table table-hover">
      <thead>
        <tr>
          <th>SL No</th>
          <th>Name</th>
          <th>Status</th>
          <th>Vals</th>
          <th>Pipeline</th>
        </tr>
      </thead>
      <tbody>
        <?php $i=1; foreach($ghy_pipeline as $val) { ?>
          <tr>
            <td> <?= $i; ?> </td>
            <td><?= $val['name'] ?></td>
            <td><?= $val['status'] ?></td>
            <td><?= $val['vals'] ?></td>
            <td><?= $val['pipeline'] ?></td>
          </tr>
          <?php $i++; } ?>
        </tbody>
      </table>
    <?php } else {?>
      <div class="alert alert-info" role="alert">
        <strong>No Records Found!</strong>
      </div>
    <?php } ?>
  </div>


  <script type="text/javascript">
    window.setTimeout( function() {
      window.location.reload();
    }, 30000);
  </script>


