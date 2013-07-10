<form class='form-signin' action="backend" method="POST">
	<h2 class='form-signin-heading'>Log In!</h2>
		
	<div class="control-group <?php if(form_error("user")){ echo 'error'; }?>">
		<input type="text" name='user' class="input" placeholder="Username" value='<?php echo set_value("user"); ?>'>
		<?php echo form_error("user"); ?>
	</div>		
	<div class="control-group <?php if(form_error("pass")){ echo 'error'; }?>">
		<input type="password" name='pass' class="input" placeholder="Password" value="<?php echo set_value("pass"); ?>">
		<?php echo form_error("pass"); ?>
	</div>
	<label class="checkbox">
		<input type="checkbox" name="remember" value="1" <?php echo set_checkbox('remember', '1'); ?> /> Remember me
	</label>
	<input type="hidden" name="sublogin" value="1">
	<input type="submit" value="Login" class="btn btn-block btn-large btn-info"><br>
	<a href="forgotpass.php">Forgot Password?</a><br>
	Not registered? <a href="register.php">Sign-Up!</a>
	
</form>