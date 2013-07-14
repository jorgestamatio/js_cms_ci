<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title><?php echo isset($title) ? "JS-CMS - $title" : NULL; ?></title>

	<link rel="stylesheet" href="<?=base_url()?>assets/css/bootstrap-responsive.min.css" type='text/css'>
	<link rel="stylesheet" href="<?=base_url()?>assets/css/bootstrap.min.css" type='text/css'>
	<link rel="stylesheet" href="<?=base_url()?>assets/css/backend.css" type='text/css'>
</head>
<body>

<div class="container-fluid">
	<?php $this->load->view($content); ?>
</div>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="<?=base_url()?>assets/js/vendor/jquery-1.10.2.min.js"><\/script>')</script>


<script src="<?=base_url()?>assets/js/vendor/bootstrap.min.js"></script>
<script src="<?=base_url()?>assets/js/main.js"></script>


<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
<script>
    // var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
    // (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
    // g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
    // s.parentNode.insertBefore(g,s)}(document,'script'));
</script>
</body>
</html>