 
<!-- Main Navigation ================================================== -->
<nav id="tf-menu" class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>

          </button>
          <a class="navbar-stack" href="<?php echo base_url(); ?>users/logout" class="logoutBtn">Logout 
          <div><h3>Welcome <?php echo $user['name']; ?>!</h3></div></a>
          <a class="navbar-brand" href="<?php echo base_url('home') ?>"><img src="<?php echo base_url()?>img/logo.png" alt="..."></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
             <li><a href="<?php echo base_url('home') ?>" class=" active scroll" >Home</a></li>
             <li><a href="<?php echo base_url('services')?>">Services</a></li>
             <li><a href="<?php echo base_url('about') ?> ">About</a></li>
             <li><a href="<?php echo base_url('ourworks') ?> " > Our Works</a></li>
             <li><a href="<?php echo base_url('process') ?> ">Process</a></li>
             <li><a href="<?php echo base_url('pricing') ?> ">Pricing</a></li>
             <li><a href="<?php echo base_url('blog') ?>" >Blog</a></li>
             <li><a href="<?php echo base_url('contact') ?>" >Contact</a></li>

          </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>