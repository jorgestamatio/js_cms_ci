<div class="login-form">
<h2><?php echo lang('reset_password_heading');?></h2>
<hr>
<?php if($message != '') : ?>
    <div id="infoMessage" class="alert alert-info"><?php echo $message;?></div>
<?php endif; ?>

<?php echo form_open('auth/reset_password/' . $code);?>
		
	<?php echo form_input_bs($new_password, '', sprintf(lang('reset_password_new_password_label'), $min_password_length));?>

	<?php echo form_input_bs($new_password_confirm, '',lang('reset_password_new_password_confirm_label'));?>

	<?php echo form_input($user_id);?>
	<?php echo form_hidden($csrf); ?>

	<p><?php echo form_submit('submit', lang('reset_password_submit_btn'), 'class="btn btn-success"');?></p>

<?php echo form_close();?>
</div>