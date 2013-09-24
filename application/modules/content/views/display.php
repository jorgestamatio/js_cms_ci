<div class="btn-group">
  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">
    <?=$category?> <span class="caret"></span>
  </button>
  <ul class="dropdown-menu">
    <?php foreach ($categories->result() as $row): ?>
      <li class="<?= $category == $row->category ? 'active' : '' ?>">
        <a href="<?=base_url()?>content/<?=$lang.'/'.$row->category?>">
          <?=$row->category?>
        </a>
      </li>
    <?php endforeach; ?>
      <li class="divider"></li>
      <li class="<?= $category == 'all' ? 'active' : '' ?>">
        <a href="<?=base_url()?>content/<?=$lang.'/all'?>">
          all
        </a>
      </li>
  </ul>
</div>

  <div class="btn-group">
  <?php foreach ($this->config->item('SITE_LANGUAGES_ENABLED') as $row): ?>
     <a
     href="<?=base_url()?>content/<?=$row.'/'.$category?>" 
     class="btn btn-info <?= $lang == $row ? 'active' : '' ?>">
     <?=$row?>
     </a>
  <?php endforeach; ?>  
  </div>

  <a href="<?=site_url('content/add/'.$lang)?>" class="<?=$this->config->item('NEW_BTN')?> pull-right">
    <?=$this->config->item('NEW_ICON')?> <?=$this->config->item('NEW_TXT')?>
  </a>

<table class='table table-striped'>
  <thead>
    <th>Title</th>
    <th>Content</th>
    <th class="text-right">Edit</th>
  </thead>
  <tbody>
  <?php foreach ($query->result() as $row) : ?>
    <tr>
      <td><?=$row->title?></td>
      <!-- <td><?=$row->content?></td> -->
      <td><?=substr($row->content,0,160).'...'?></td>
      <td class="text-right">
        <a class="<?=$this->config->item('EDIT_BTN')?>" href="<?=site_url()?>content/edit/<?=$row->id?>">
        <?=$this->config->item('EDIT_ICON')?> <?=$this->config->item('EDIT_TXT')?>
        </a>
      </td>
    </tr>
  <?php endforeach; ?>
  </tbody>
</table>



