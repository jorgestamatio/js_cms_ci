<?php echo Modules::run('navbar/backend'); ?>

<div class="col-lg-5">
<h1><?php echo lang('edit_user_heading');?></h1>
<p><?php echo lang('edit_user_subheading');?></p>

<div id="infoMessage"><?php echo $message;?></div>

<?php echo form_open(uri_string());?>

        <?php echo form_input_bs($first_name,'',lang('edit_user_fname_label'));?>
      
        <?php echo form_input_bs($last_name,'',lang('edit_user_lname_label'));?>

        <?php echo form_input_bs($company,'',lang('edit_user_company_label'));?>

        <?php echo form_input_bs($phone,'',lang('edit_user_phone_label'));?>

        <?php echo form_input_bs($password,'',lang('edit_user_password_label'));?>

        <?php echo form_input_bs($password_confirm,'',lang('edit_user_password_confirm_label')); ?>

	 <h3><?php echo lang('edit_user_groups_heading');?></h3>
	<?php foreach ($groups as $group):?>
	<label class="checkbox">
	<?php
		$gID=$group['id'];
		$checked = null;
		$item = null;
		foreach($currentGroups as $grp) {
			if ($gID == $grp->id) {
				$checked= ' checked="checked"';
			break;
			}
		}
	?>
	<input type="checkbox" name="groups[]" value="<?php echo $group['id'];?>"<?php echo $checked;?>>
	<?php echo $group['name'];?>
	</label>
	<?php endforeach?>

      <?php echo form_hidden('id', $user->id);?>
      <?php echo form_hidden($csrf); ?>

      <?php echo form_submit('submit', lang('edit_user_submit_btn'), 'class="btn btn-success pull-right"');?>
      <?php echo anchor('auth', '<span class="glyphicon glyphicon-arrow-left"></span> Back', 'class="btn btn-default pull-left"'); ?>
<?php echo form_close();?>
      

</div>
