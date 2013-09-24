<div class="col-md-4 col-md-offset-4 login-form">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h3 class='panel-title'><?php echo lang('login_heading');?></h3>
    </div>
    <div class="panel-body">
    <!-- <p><?php //echo lang('login_subheading');?></p> -->
    <?php if($message != '') : ?>
      <div id="infoMessage" class="alert alert-info"><?php echo $message;?></div>
    <?php endif; ?>

      <?php echo form_open("auth/login",'class="form"');?>

        <?php echo form_input_bs($identity,'',lang('login_identity_label'));?>

        <?php echo form_input_bs($password, '', lang('login_password_label'));?>

        <?php echo lang('login_remember_label', 'remember');?>

        <?php echo form_checkbox('remember', '1', FALSE, 'id="remember" class="input"');?>

    </div>

    <div class='panel-footer'>

      <?php echo form_submit('submit', lang('login_submit_btn'), 'class="btn btn-danger btn-block"');?>

      <?php echo form_close();?>

      <a href="<?=base_url()?>auth/forgot_password"><?php echo lang('login_forgot_password');?></a>
      
    </div>
  </div>
</div>