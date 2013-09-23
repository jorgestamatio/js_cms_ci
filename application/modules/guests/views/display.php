<div class="container">
	<h1>Guests</h1>
	<a href="<?=site_url('guests/add')?>" class="btn btn-lg btn-success pull-right" data-ajax-link><span class="glyphicon glyphicon-plus"></span> New</a>
	<table class='table table-striped'>
		<thead>
			<th>Name</th>
			<th>Comming</th>
			<th>Plus 1?</th>
			<th>Edit</th>
		</thead>
	<tbody id='contentTable'>
	<?php foreach ($query->result() as $row) : ?>
		<tr>

			<td><?=$row->name?></td>
			<td><?=$row->email?></td>
			<td><?=$row->persons?></td>
			<td><a class='btn btn-small btn-info' href="<?=site_url()?>guests/edit/<?=$row->id?>">Edit</a></td>
			
		</tr>
	<?php endforeach; ?>
	</tbody>
	</table>
</div>



