<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
  <!-- Brand and toggle get grouped for better mobile display -->
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="<?=base_url()?>backend"><?=$this->config->item('COMPANY_NAME');?></a>
  </div>

  <!-- Collect the nav links, forms, and other content for toggling -->
  <div class="collapse navbar-collapse navbar-ex1-collapse">
    <ul class="nav navbar-nav">
      <li class="<?=isset($home_active) ? 'active' : ''?>"><a href="<?=base_url()?>backend">Home</a></li>
      <li class='<?=isset($content_active) ? 'active' : ''?>'><a href="<?=base_url()?>content">Content</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
    <?php if (!$this->ion_auth->is_admin()) :?>
      <li><a href='#'>Hello <?=isset($username) ? $username : 'you!'?></a></li>
    <?php else : ?>
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Hello <?=isset($username) ? $username : 'you!'?> <b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href='<?=base_url()?>auth'>Users</a></li>
          <li><a href='<?=base_url()?>categories'>Categories</a></li>
          <li><a href='<?=base_url()?>init'>Init</a></li>
        </ul>
      </li>
      <?php endif; ?>
      <li><a href="<?=base_url()?>auth/logout">Logout</a></li> 
    </ul>
  </div><!-- /.navbar-collapse -->
</nav>

