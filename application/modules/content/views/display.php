<div class="container">
	<h1>Content</h1>
	<a href="<?=site_url('content/add')?>" class="btn btn-lg btn-success pull-right" data-ajax-link><span class="glyphicon glyphicon-plus"></span> New</a>
	<table class='table table-striped'>
		<thead>
			<th>Title</th>
			<th>Content</th>
			<th>Date</th>
			<th>Edit</th>
		</thead>
	<tbody id='contentTable'>
	<?php foreach ($query->result() as $row) : ?>
		<tr>

			<td><?=$row->title?></td>
			<td><?=$row->content?></td>
			<td><?=$row->lang?></td>
			<td><a class='btn btn-small btn-info' href="<?=site_url()?>content/edit/<?=$row->id?>">Edit</a></td>

		</tr>
	<?php endforeach; ?>
	</tbody>
	</table>
</div>


