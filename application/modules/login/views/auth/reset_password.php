<div class="col-md-4 col-md-offset-4 login-form">
  <div class="panel panel-default">

    <div class="panel-heading">
      <h3 class='panel-title'><?php echo lang('reset_password_heading');?></h3>
    </div>

    <div class="panel-body">
      <?php if($message != '') : ?>
          <div id="infoMessage" class="alert alert-info"><?php echo $message;?></div>
      <?php endif; ?>

      <?php echo form_open('auth/reset_password/' . $code);?>
      		
      	<?php echo form_input_bs($new_password, '', sprintf(lang('reset_password_new_password_label'), $min_password_length));?>

      	<?php echo form_input_bs($new_password_confirm, '',lang('reset_password_new_password_confirm_label'));?>

      	<?php echo form_input($user_id);?>
      	<?php echo form_hidden($csrf); ?>
    </div>

    <div class='panel-footer'>
      	<p><?php echo form_submit('submit', lang('reset_password_submit_btn'), 'class="btn btn-success"');?></p>
    </div>
    
    <?php echo form_close();?>

  </div>
</div>
