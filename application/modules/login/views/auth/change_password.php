<div class="container">
  <div class="col-md-4 col-md-offset-4 login-form">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class='panel-title'><?php echo lang('change_password_heading');?></h3>
      </div>
      <div class="panel-body">
        <?php if($message != '') : ?>
              <div id="infoMessage" class="alert alert-info"><?php echo $message;?></div>
        <?php endif; ?>

        <?php echo form_open("auth/change_password");?>

        <?php echo form_input_bs($old_password,'',lang('change_password_old_password_label'));?>
        
        <?php echo form_input_bs($new_password, '', sprintf(lang('change_password_new_password_label'), $min_password_length));?>
        
        <?php echo form_input_bs($new_password_confirm,'',lang('change_password_new_password_confirm_label'));?>
      </div>
      <div class='panel-footer'>
        <?php echo form_input($user_id);?>
        <p><?php echo form_submit('submit', lang('change_password_submit_btn'),'class="btn btn-success"');?></p>

        <?php echo form_close();?>
      </div>
    </div>
  </div>
</div>
