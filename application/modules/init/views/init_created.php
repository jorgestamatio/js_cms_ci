<div class="container">
	<div class="jumbotron">
		<h1>The tables already exist!</h1>
		<br>
		<a href="<?=site_url("init/deleteTables") ?>" class='btn btn-danger'><span class="glyphicon glyphicon-trash"></span> Delete tables!</a>
		<br><br>
		<a href="<?=site_url("backend") ?>" class='btn btn-default'><span class="glyphicon glyphicon-th"></span> Go to Dashboard</a>
	</div>

	<div class="row">
		<div class="col-lg-3">
			<div class="panel panel-default">
		  		<div class="panel-heading">Tables</div>
		  		<div class="panel-body">
		  			<ul>
		    		<?php foreach ($tables as $table) : ?>
							<li><?=$table?></li>
					<?php endforeach; ?>
					</ul>
		  		</div>
			</div>
		</div>
		<div class="col-lg-3">
			<?=$tableContent?>
		</div>
	</div>

</div>