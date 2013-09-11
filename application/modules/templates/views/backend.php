<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<title><?php echo isset($title) ? "JS-CMS - $title" : $this->config->item('COMPANY_NAME'); ?></title>


	<link rel="stylesheet" href="<?=base_url()?>assets/css/bootstrap.min.css" type='text/css'>
	<link rel="stylesheet" href="<?=base_url()?>assets/css/bootstrap-glyphicons.css" type='text/css'>
	<link rel="stylesheet" href="<?=base_url()?>assets/css/backend.css" type='text/css'>
	<script src="<?=base_url()?>assets/js/vendor/modernizr-2.6.2.min.js"></script>
</head>
<body>
<!--[if lt IE 7]>
    <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

<?php echo Modules::run('navbar/backend'); ?>
<div id='main-container' class="container-fluid">
	<?php $this->load->view($module.'/'.$view_file); ?>
</div>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="<?=base_url()?>assets/js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
<script src="<?=base_url()?>assets/js/vendor/bootstrap.min.js"></script>
<script src="<?=base_url()?>assets/js/main.js"></script>


<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
<script>
    (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
    function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
    e=o.createElement(i);r=o.getElementsByTagName(i)[0];
    e.src='//www.google-analytics.com/analytics.js';
    r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
    ga('create','UA-XXXXX-X');ga('send','pageview');
</script>
</body>
</html>


