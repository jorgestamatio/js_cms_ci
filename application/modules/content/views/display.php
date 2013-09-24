<div class="btn-group">
  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">
    <?=$category?> <span class="caret"></span>
  </button>
  <ul class="dropdown-menu">
    <?php foreach ($categories->result() as $row): ?>
      <li class="<?= $category == $row->category ? 'active' : '' ?>">
        <a href="<?=base_url()?>content/index/<?=$lang.'/'.$row->category?>">
          <?=$row->category?>
        </a>
      </li>
    <?php endforeach; ?>
      <li class="divider"></li>
      <li class="<?= $category == 'all' ? 'active' : '' ?>">
        <a href="<?=base_url()?>content/index/<?=$lang.'/all'?>">
          all
        </a>
      </li>
  </ul>
</div>

  <div class="btn-group">
  <?php foreach ($this->config->item('SITE_LANGUAGES_ENABLED') as $row): ?>
     <a
     href="<?=base_url()?>content/index/<?=$row.'/'.$category?>" 
     class="btn btn-info <?= $lang == $row ? 'active' : '' ?>">
     <?=$row?>
     </a>
  <?php endforeach; ?>  
  </div>

  <a href="<?=site_url('content/add/'.$lang)?>" class="btn btn-success pull-right"><span class="glyphicon glyphicon-plus"></span> New</a>

<table class='table table-striped'>
  <thead>
    <th>Title</th>
    <th>Content</th>
    <th>Edit</th>
  </thead>
  <tbody>
  <?php foreach ($query->result() as $row) : ?>
    <tr>
      <td><?=$row->title?></td>
      <!-- <td><?=$row->content?></td> -->
      <td><?=substr($row->content,0,160).'...'?></td>
      <td><a class='btn btn-small btn-info' href="<?=site_url()?>content/edit/<?=$row->id?>">Edit</a></td>
    </tr>
  <?php endforeach; ?>
  </tbody>
</table>



