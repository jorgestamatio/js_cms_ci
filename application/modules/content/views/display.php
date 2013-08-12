<div class="well">
	<h1>Content</h1>
	<table class='table table-striped'>
		<thead>
			<th>Title</th>
			<th>Content</th>
			<th>Date</th>
			<th>Edit</th>
		</thead>
	<tbody>
	<?php foreach ($query->result() as $row) : ?>
		<tr>

			<td><?=$row->title?></td>
			<td><?=$row->content?></td>
			<td><?=$row->date?></td>
			<td><a class='btn btn-small btn-info' href="edit/<?=$row->id?>">Edit</a></td>

		</tr>
	<?php endforeach; ?>
	</tbody>
	</table>
</div>