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
         class="btn btn-danger" 
         data-require-confirm
         data-confirm-text="Are you sure you want to delete this?">
        <span class="glyphicon glyphicon-trash"></span> Delete
      </a>

      <div class="pull-right">
        <?php echo anchor('content/'.$row->lang, 'Cancel', 'class="btn btn-default"'); ?>
        <?php echo form_submit('submit', 'Save','class="btn btn-success"'); ?>
      </div>

    </div>

  </div>
<?php echo form_close(); ?>
