<div class="well">
	<h1>Content</h1>
	<ul>
	<?php foreach ($query->result() as $row) : ?>
		<li><?=$row->title?></li>
	<?php endforeach; ?>
	</ul>
</div>