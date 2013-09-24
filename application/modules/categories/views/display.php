<h1>Categories</h1>
<a href="<?=site_url('categories/add')?>" class="btn btn-success pull-right"><span class="glyphicon glyphicon-plus"></span> New</a>
<table class='table table-striped'>
  <thead>
    <th>Category</th>
    <th class='text-right'>Edit</th>
  </thead>
  <tbody>
  <?php foreach ($query->result() as $row) : ?>
    <tr>
      <td><?=$row->category?></td>
      <td><a class='btn btn-xs btn-default pull-right' href="<?=site_url()?>categories/edit/<?=$row->id?>"><span class="glyphicon glyphicon-pencil"></span></a></td>
    </tr>
  <?php endforeach; ?>
  </tbody>
</table>




