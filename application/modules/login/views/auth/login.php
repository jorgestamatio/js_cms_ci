<div class="login-form">
  <h2><?php echo lang('login_heading');?></h2>
  <hr>
  <!-- <p><?php //echo lang('login_subheading');?></p> -->
  <?php if($message != '') : ?>
    <div id="infoMessage" class="alert alert-info"><?php echo $message;?></div>
  <?php endif; ?>

    <?php echo form_open("auth/login",'class="form"');?>

      <?php echo form_input_bs($identity,'',lang('login_identity_label'));?>

      <?php echo form_input_bs($password, '', lang('login_password_label'));?>

      <?php echo lang('login_remember_label', 'remember');?>
      <?php echo form_checkbox('remember', '1', FALSE, 'id="remember" class="input"');?>

      <?php echo form_submit('submit', lang('login_submit_btn'), 'class="btn btn-info btn-block"');?>
    <?php echo form_close();?>
  <hr>
  <a href="auth/forgot_password"><?php echo lang('login_forgot_password');?></a>
</div>