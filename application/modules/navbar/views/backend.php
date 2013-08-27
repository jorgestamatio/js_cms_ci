<div class="navbar navbar-fixed-top">
  <div class="container">
    <!-- .navbar-toggle is used as the toggle for collapsed navbar content -->
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>

    <!-- Be sure to leave the brand out there if you want it shown -->
    <a class="navbar-brand" href="<?=base_url()?>backend"><?=$this->config->item('COMPANY_NAME');?></a>

    <!-- Place everything within .nav-collapse to hide it until above 768px -->
    <div class="nav-collapse collapse navbar-responsive-collapse">
      <ul class="nav navbar-nav">
        <li class="active"><a href="<?=base_url()?>backend">Home</a></li>
        <li><a href="#">Link</a></li>
      </ul>
      <ul class="nav navbar-nav pull-right">
        <?php if (!$this->ion_auth->is_admin()) :?>
        <li><a href='#'>Hello <?=isset($username) ? $username : 'you!'?></a></li>
        <?php else : ?>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Hello <?=isset($username) ? $username : 'you!'?> <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href='<?=base_url()?>auth'>Users</a></li>
            <li><a href="#">Info</a></li>
          </ul>
        </li>
        <?php endif; ?>
        <li><a href="<?=base_url()?>auth/logout">Logout</a></li>   
      </ul>
    </div><!-- /.nav-collapse -->
  </div><!-- /.container -->
</div><!-- /.navbar -->