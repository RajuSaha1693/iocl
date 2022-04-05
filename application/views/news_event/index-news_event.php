<div class="box-body"> 
  <?php if($this->session->flashdata('success')){ ?>
  <div class="alert alert-success">
                    <strong><span class="glyphicon glyphicon-ok"></span>   <?php echo $this->session->flashdata('success'); ?></strong>
                </div>
  <?php } ?>

<?php if(!empty($news_events)) {?>
  <table class="table table-hover">
    <thead>
      <tr>
        <th>SL No</th>
        <th>Headline</th>
       <th>Actions</th>
      </tr>
    </thead>
    <tbody>
    <?php $i=1; foreach($news_events as $news_event) { ?>
      <tr>
        <td> <?php echo $i; ?> </td>
        <td> <a href="<?php echo site_url()?>view-news_event/<?php echo $news_event->id?>" > <?php echo $news_event->n_head ?> </a> </td>

        <td>
        <a href="<?php echo site_url()?>change-status-news_event/<?php echo $news_event->id ?>" > <?php if($news_event->status==0){ echo "Activate"; } else { echo "Deactivate"; } ?></a>
        <a href="<?php echo site_url()?>edit-news_event/<?php echo $news_event->id?>" >Edit</a>
        <a href="<?php echo site_url()?>delete-news_event/<?php echo $news_event->id?>" onclick="return confirm('are you sure to delete')">Delete</a>
        </td>

      </tr>
    <?php $i++; } ?>
    </tbody>
  </table>
  <?php } else {?>
  <div class="alert alert-info" role="alert">
                    <strong>No News_events Found!</strong>
                </div>
  <?php } ?>
</div>
