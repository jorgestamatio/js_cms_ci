<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title><?php echo isset($title) ? "JS-CMS - $title" : $this->config->item('COMPANY_NAME'); ?></title>

	<!-- <link rel="stylesheet" href="<?=base_url()?>assets/css/bootstrap3.min.css" type='text/css'> -->
	<link rel="stylesheet" href="<?=base_url()?>assets/css/bootstrap-glyphicons.css" type='text/css'>
	<!-- <link rel="stylesheet" href="<?=base_url()?>assets/main.less" type='text/less'> -->
	<link rel="stylesheet" href="<?=base_url()?>assets/main.css" type='text/css'>
	<link rel="stylesheet" href="<?=base_url()?>assets/css/backend.css" type='text/css'>
	<!-- <script src="<?=base_url()?>assets/js/vendor/less.js" async></script> -->
</head>
<body>

<div class="container">
	<?php $this->load->view($view_file); ?>
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