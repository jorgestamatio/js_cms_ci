<div class="container">
		<div class="btn-group">
		<?php foreach ($this->config->item('SITE_LANGUAGES_ENABLED') as $row): ?>
		   <a
		   href="<?=base_url()?>content/index/<?=$row?>" 
		   class="btn btn-primary <?= $lang == $row ? 'active' : '' ?>">
		   <?=$row?>
		   </a>
		<?php endforeach; ?>  
		</div>
	<a href="<?=site_url('content/add/'.$lang)?>" class="btn btn-success pull-right" data-ajax-link><span class="glyphicon glyphicon-plus"></span> New</a>
	<table class='table table-striped'>
		<thead>
			<th>Title</th>
			<th>Content</th>
			<th>Edit</th>
		</thead>
	<tbody id='contentTable'>
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
</div>


