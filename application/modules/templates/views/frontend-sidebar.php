<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>J&ampJ</title>
	<meta name="viewport" content="width=device-width">
	<meta name="description" content="Janine and Jorge wedding invitation">
	<link rel="stylesheet" href="<?=base_url()?>assets/css/bootstrap.min.css" type='text/css'>
	<link rel="stylesheet" href="<?=base_url()?>assets/css/bootstrap-glyphicons.css" type='text/css'>
	<link rel="stylesheet" href="<?=base_url()?>assets/css/sidebar.css" type='text/css'>
	<link rel="stylesheet" href="<?=base_url()?>assets/css/frontend.css" type='text/css'>
	<script src="<?=base_url()?>assets/js/vendor/modernizr-2.6.2.min.js"></script>




</head>
<body>

<div id="main-container" class="main-wrapper" data-sidebar-show>

	<nav class="sidebar" role="navigation">
		<h2>Sidebar <button type="button" class="close pull-right" aria-hidden="true">&times;</button></h2>
		<ul>
			<li><a class="" href="de">Deutsch</a></li>
			<li><a class="" href="en">English</a></li>
		</ul>
	</nav>

  <!-- content push wrapper -->
  <div class="pusher">
    <div class="main-content"><!-- this is the wrapper for the content -->
      <div id="main" class="clearfix">

      <button type="button" class="btn btn-lg btn-danger sidebar-toggle-btn" data-toggle-sidebar>
        <span class="sr-only">Toggle navigation</span>
        <span class="glyphicon glyphicon-th-list"></span>
      </button>                                                        

      <?php $this->load->view($module.'/'.$view_file); ?>


      </div><!-- /main -->
    </div><!-- /main-content -->
  </div><!-- /pusher -->
</div><!-- /main-container -->




<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="<?=base_url()?>assets/js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
<script src="<?=base_url()?>assets/js/vendor/bootstrap.min.js"></script>
<script src="<?=base_url()?>assets/js/vendor/jQuery.fastClick.js"></script>
<script src="<?=base_url()?>assets/js/app.js"></script>



<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
<script>
    (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
    function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
    e=o.createElement(i);r=o.getElementsByTagName(i)[0];
    e.src='//www.google-analytics.com/analytics.js';
    r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
    ga('create','<?=$this->config->item('GOOGLE_ANALYTICS')?>');ga('send','pageview');
</script>
</body>
</html>
