<div class="login-form">
	<h2><?php echo lang('forgot_password_heading');?></h2>
	<hr>
	<p><?php echo sprintf(lang('forgot_password_subheading'), $identity_label);?></p>

	<div id="infoMessage"><?php echo $message;?></div>

	<?php echo form_open("auth/forgot_password");?>

	      <p>
	      	<label for="email"><?php echo sprintf(lang('forgot_password_email_label'), $identity_label);?></label> <br />
	      	<?php echo form_input($email);?>
	      </p>

	      <p><?php echo form_submit('submit', lang('forgot_password_submit_btn'),'class="btn btn-block btn-info"');?></p>

	<?php echo form_close();?>
</div>