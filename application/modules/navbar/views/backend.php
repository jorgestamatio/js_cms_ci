<div class="navbar navbar-fixed-top">
  <div class="container">
    <!-- .navbar-toggle is used as the toggle for collapsed navbar content -->
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>

    <!-- Be sure to leave the brand out there if you want it shown -->
    <a class="navbar-brand" href="#"><?=$this->config->item('COMPANY_NAME');?></a>

    <!-- Place everything within .nav-collapse to hide it until above 768px -->
    <div class="nav-collapse collapse navbar-responsive-collapse">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li><a href="#">Link</a></li>
      </ul>
      <ul class="nav navbar-nav pull-right">
        <li><a href='#'>Hello <?=isset($username) ? $username : 'you!'?></a></li>
        <li><a href="auth/logout">Logout</a></li>   
      </ul>
    </div><!-- /.nav-collapse -->
  </div><!-- /.container -->
</div><!-- /.navbar -->