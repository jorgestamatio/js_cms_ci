<?php echo Modules::run('navbar/backend'); ?>
<h2><?php echo lang('create_user_heading');?></h2>
<p><?php echo lang('create_user_subheading');?></p>
<hr>
<div class="<?=$this->config->item('BACKEND_MAIN_CONTENT_WIDTH')?>">
<?php if($message != '') : ?>
    <div id="infoMessage" class="alert alert-info"><?php echo $message;?></div>
<?php endif; ?>

<?php echo form_open("auth/create_user");?>

      
       <?php echo form_input_bs($first_name,'',lang('create_user_fname_label'));?>
      

       <?php echo form_input_bs($last_name,'',lang('create_user_lname_label'));?>
      

       <?php echo form_input_bs($company,'',lang('create_user_company_label'));?>
      

       <?php echo form_input_bs($email,'',lang('create_user_email_label'));?>
      

       <?php echo form_input_bs($phone,'',lang('create_user_phone_label'));?>
      

       <?php echo form_input_bs($password,'',lang('create_user_password_confirm_label'));?>
      

       <?php echo form_input_bs($password_confirm,'',lang('create_user_password_confirm_label'));?>
      


      <p><?php echo form_submit('submit', lang('create_user_submit_btn'),'class="btn btn-success"');?></p>

<?php echo form_close();?>
</div>