<div class="container">
	<h1>Edit</h1>
	
<?php 
$attributes = array('class' => 'edit', 'id' => 'save_edit');
$hidden = array('id' => $row->id);
echo form_open('content/save', $attributes, $hidden);
?>
	
	<div class="panel panel-default">
	  <div class="panel-heading">
	    <h3 class="panel-title"><input type="text" name='title' class='form-control' value='<?=$row->title?>'></h3>
	  </div>
	  <div class="panel-body">
	  	<textarea name="content" id="editor" class='form-control' rows="10"><?=$row->content?></textarea>	    
	  </div>
	  <div class="panel-footer clearfix">
	  <?php echo form_submit('submit', 'Save','class="pull-right btn btn-success"'); ?>
	  </div>
	</div>
<?php echo form_close(); ?>
</div>