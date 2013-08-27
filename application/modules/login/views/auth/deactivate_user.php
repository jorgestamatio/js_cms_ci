<?php echo Modules::run('navbar/backend'); ?>

<div class="col-lg-5">
<h2><?php echo lang('deactivate_heading');?></h2>
<p><?php echo sprintf(lang('deactivate_subheading'), $user->username);?></p>

<?php echo form_open("auth/deactivate/".$user->id);?>

  <p>
  	<?php echo lang('deactivate_confirm_y_label', 'confirm');?>
    <input type="radio" name="confirm" value="yes" />
    <?php echo lang('deactivate_confirm_n_label', 'confirm');?>
    <input type="radio" name="confirm" value="no" checked="checked" />
  </p>

  <?php echo form_hidden($csrf); ?>
  <?php echo form_hidden(array('id'=>$user->id)); ?>

	<?php echo anchor('auth', '<span class="glyphicon glyphicon-arrow-left"></span> Back', 'class="btn btn-default"'); ?>
	<?php echo form_submit('submit', lang('deactivate_submit_btn'),'class="btn btn-danger"');?></p>

<?php echo form_close();?>
</div>