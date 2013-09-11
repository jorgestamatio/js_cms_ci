<div class="container">
	<h1>Edit</h1>
	
	<?php foreach ($query->result() as $row) : ?>
	<div class="panel panel-default">
	  <div class="panel-heading">
	    <h3 class="panel-title"><?=$row->title?></h3>
	  </div>
	  <div class="panel-body">
	    <?=$row->content?>
	  </div>
	</div>
	<?php endforeach; ?>
</div>