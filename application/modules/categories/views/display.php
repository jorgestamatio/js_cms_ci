<h1>Categories</h1>
  <a href="<?=site_url('categories/add')?>" class="<?=$this->config->item('NEW_BTN')?> pull-right">
    <?=$this->config->item('NEW_ICON')?> <?=$this->config->item('NEW_TXT')?>
  </a>
<table class='table table-striped'>
  <thead>
    <th>Category</th>
    <th class='text-right'>Edit</th>
  </thead>
  <tbody>
  <?php foreach ($query->result() as $row) : ?>
    <tr>
      <td><?=$row->category?></td>
      <td class="text-right">
        <a class='<?=$this->config->item('EDIT_BTN')?>' href="<?=site_url()?>categories/edit/<?=$row->id?>">
        <?=$this->config->item('EDIT_ICON')?> <?=$this->config->item('EDIT_TXT')?>
        </a>
      </td>
    </tr>
  <?php endforeach; ?>
  </tbody>
</table>




