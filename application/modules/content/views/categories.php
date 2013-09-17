<div class="container">
	<h1>Content</h1>
	<a href="<?=site_url('content/addCategory')?>" class="btn btn-lg btn-success pull-right" data-ajax-link><span class="glyphicon glyphicon-plus"></span> New</a>
	<table class='table table-striped'>
		<thead>
			<th>Title</th>
		</thead>
	<tbody id='contentTable'>
	<?php foreach ($query->result() as $row) : ?>
		<tr>

			<td><?=$row->category?></td>

		</tr>
	<?php endforeach; ?>
	</tbody>
	</table>
</div>


