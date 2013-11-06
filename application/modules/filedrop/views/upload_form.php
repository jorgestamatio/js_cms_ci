<?php print_r($error);?>

<?php echo form_open_multipart('filedrop/do_upload');?>
<input type="hidden" name="upload_url" value="<?=base_url()?>filedrop/do_upload">

<input type="file" name="userfile" size="20" />

<br /><br />

<input type="submit" value="upload" />

</form>


<div id="dropzone">
  <span class="message">Drop images here</span>
</div>




