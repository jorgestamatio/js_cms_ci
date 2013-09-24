<h1>Edit</h1>
	
<?php 
$attributes = array('class' => 'edit', 'id' => 'save_edit');
$hidden = array('id' => $row->id);
echo form_open('guests/save', $attributes, $hidden);
?>
	
	<div class="panel panel-default">
	  <div class="panel-heading">
	    <h3 class="panel-title">Guest</h3>
	  </div>
	  <div class="panel-body">
		  <p>
		  	<input type="text" name='name' class='form-control' value='<?=$row->name?>'>
		  </p>
		  <p>
		  	<input type="text" name='email' class='form-control' value='<?=$row->email?>'>
		  </p>
		  <p>
		  	<input type="text" name='persons' class='form-control' value='<?=$row->persons?>'>
		  </p>
	  </div>
	  <div class="panel-footer clearfix">
	  <?php echo form_submit('submit', 'Save','class="pull-right btn btn-success"'); ?>
	  <a href="<?=base_url()?>guests/delete/<?=$row->id?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Delete</a>
	  </div>
	</div>
<?php echo form_close(); ?>
