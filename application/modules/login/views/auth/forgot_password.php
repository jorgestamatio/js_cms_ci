<div class="container">
	<div class="col-md-4 col-md-offset-4 login-form">
		<div class="panel panel-default">
			<div class="panel-heading">
		     <h3 class='panel-title'><?php echo lang('forgot_password_heading');?></h3>
			</div>
			<div class="panel-body">
				<p><?php echo sprintf(lang('forgot_password_subheading'), $identity_label);?></p>

				<div id="infoMessage"><?php echo $message;?></div>

				<?php echo form_open("auth/forgot_password");?>

		    <p>
		    	<label for="email"><?php echo sprintf(lang('forgot_password_email_label'), $identity_label);?></label> <br />
		    	<?php echo form_input($email);?>
		    </p>
			</div>
			<div class="panel-footer">
			  <p><?php echo form_submit('submit', lang('forgot_password_submit_btn'),'class="btn btn-block btn-info"');?></p>
				<?php echo form_close();?>
			</div>
		</div>
	</div>
</div>
