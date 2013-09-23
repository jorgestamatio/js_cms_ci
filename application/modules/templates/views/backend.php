<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title><?php echo isset($title) ? "JS-CMS - $title" : $this->config->item('COMPANY_NAME'); ?></title>

	<meta name="viewport" content="width=device-width">
	<link rel="stylesheet" href="<?=base_url()?>assets/css/bootstrap.min.css" type='text/css'>
	<link rel="stylesheet" href="<?=base_url()?>assets/css/bootstrap-glyphicons.css" type='text/css'>
	<link rel="stylesheet" href="<?=base_url()?>assets/css/bootstrap-wysihtml5.css" type='text/css'>
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


<div id="modal" class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title"></h4>
      </div>
      <div class="modal-body">
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
        <button type="button" class="btn btn-primary">Yes</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="<?=base_url()?>assets/js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
<script src="<?=base_url()?>assets/js/vendor/jQuery.fastClick.js"></script>
<script src="<?=base_url()?>assets/js/vendor/bootstrap.min.js"></script>
<script src="<?=base_url()?>assets/js/vendor/wysihtml5-0.3.0.min.js"></script>
<script src="<?=base_url()?>assets/js/vendor/bootstrap-wysihtml5.js"></script>
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


