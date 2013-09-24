<h1>Edit</h1>
<?php 
$attributes = array('class' => 'edit', 'id' => 'save_edit');
$hidden = array('id' => $row->id,'lang' => $row->lang);
echo form_open('content/save', $attributes, $hidden);
?>
  
  <div class="panel panel-default">
    <div class="panel-heading">
      <input type="text" name='title' class='form-control' value='<?=$row->title?>'>
    </div>
    <div class="panel-body">
      <textarea name="content" id="editor" class='form-control' rows="10"><?=$row->content?></textarea>     
    </div>

    <div class="panel-footer clearfix">
      <div class='row'>
        <div class="col-md-4">
          <select name="category" class="form-control">
            <?php foreach ($categories->result() as $cat): ?>
              <option <?=$row->category == $cat->category ? 'selected' : '' ?>
                value="<?=$cat->category?>">
                <?=$cat->category?>
              </option>
            <?php endforeach; ?>
          </select>
        </div>
      </div>
    </div>


    <div class="panel-footer clearfix">

      <a href="<?=base_url()?>content/delete/<?=$row->id?>/<?=$row->lang?>/<?=$row->category?>" 
         class="<?=$this->config->item('DEL_BTN')?>" 
         data-require-confirm
         data-confirm-text="Are you sure you want to delete this?">
        <?=$this->config->item('DEL_ICON')?> <?=$this->config->item('DEL_TXT')?>
      </a>

      <div class="pull-right">
        <?php echo anchor('content/'.$row->lang, $this->config->item('CANCEL_TXT'), 'class="'.$this->config->item('CANCEL_BTN').'"'); ?>
        <?php echo form_submit('submit', $this->config->item('SAVE_TXT'),'class="'.$this->config->item('SAVE_BTN').'"'); ?>
      </div>

    </div>

  </div>
<?php echo form_close(); ?>
