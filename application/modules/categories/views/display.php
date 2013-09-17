<div class="container">
	<h1>Categories</h1>
	<a href="<?=site_url('categories/add')?>" class="btn btn-lg btn-success pull-right" data-ajax-link><span class="glyphicon glyphicon-plus"></span> New</a>
	<table class='table table-striped'>
		<thead>
			<th></th>
			<th></th>
		</thead>
	<tbody id='contentTable'>
	<?php foreach ($query->result() as $row) : ?>
		<tr>
			<td><?=$row->category?></td>
			<td><a class='btn btn-small btn-default pull-right' href="<?=site_url()?>categories/edit/<?=$row->id?>"><span class="glyphicon glyphicon-pencil"></span></a></td>
		</tr>
	<?php endforeach; ?>
	</tbody>
	</table>
</div>



