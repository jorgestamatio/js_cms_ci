<h1>Edit</h1>
  
<?php 
$attributes = array('class' => 'edit', 'id' => 'save_edit');
$hidden = array('id' => $row->id);
echo form_open('categories/save', $attributes, $hidden);
?>
  
  <div class="panel panel-default">
    <div class="panel-heading">
      <h3 class="panel-title">Category</h3>
    </div>
    <div class="panel-body">
      <input type="text" name='category' class='form-control' value='<?=$row->category?>'>  
    </div>
    <div class="panel-footer clearfix">

      <a href="<?=base_url()?>categories/delete/<?=$row->id?>" 
       class="btn btn-danger" 
       data-require-confirm
       data-confirm-text="Are you sure you want to delete this?">
      <span class="glyphicon glyphicon-trash"></span> Delete
      </a>

      <?php echo form_submit('submit', 'Save','class="pull-right btn btn-success"'); ?>

    </div>
  </div>
<?php echo form_close(); ?>
