<body>

    <!-- Main Navigation 
    ================================================== -->
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
              <a class="navbar-stack"  href="<?php echo base_url(); ?>users/logout" class="logoutBtn">Logout</a>
              <a class="navbar-brand" href="<?php echo base_url('home') ?>"><img src="img/logo.png" alt="..."></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav navbar-right">
                <li><a href="<?php echo base_url('home') ?>" >Home</a></li>
                 <li><a href="<?php echo base_url('services')?>">Services</a></li>
                 <li><a href="<?php echo base_url('about') ?> ">About</a></li>
                 <li><a href="<?php echo base_url('ourworks') ?> "  class=" active scroll">Our Works</a></li>
                 <li><a href="<?php echo base_url('process') ?> ">Process</a></li>
                 <li><a href="<?php echo base_url('pricing') ?> ">Pricing</a></li>
                 <li><a href="<?php echo base_url('blog') ?>" >Blog</a></li>
                 <li><a href="<?php echo base_url('contact') ?>" >Contact</a></li>
              </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>

   <!-- Works Section
    ================================================== -->
    <div id="tf-works">
        <div class="container">
            <div class="section-header">
                <h2>Our Work is <span class="highlight"><strong>Incredible</strong></span></h2>
                <h5><em>We design and build functional and beautiful websites</em></h5>
                <div class="fancy"><span><img src="img/favicon.ico" alt="..."></span></div>
            </div>

            <div class="text-center">
                <ul class="list-inline cat"> <!-- Portfolio Filter Categories -->
                    <li><a href="#" data-filter="*" class="active">All</a></li>
                    <li><a href="#" data-filter=".web">Web</a></li>
                    <li><a href="#" data-filter=".brand">Branding</a></li>
                    <li><a href="#" data-filter=".app">Apps</a></li>
                    <li><a href="#" data-filter=".others">Others</a></li>
                </ul><!-- End Portfolio Filter Categories -->
            </div>

        </div><!-- End Container -->

        <div class="container-fluid"> <!-- fluid container -->
             <div id="itemsWork" class="row text-center"> <!-- Portfolio Wrapper Row -->

                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 nopadding brand others"> <!-- Works #1 col 3 -->
                    <div class="box"> 
                        <div class="hover-bg">
                            <div class="hover-text off">
                                <a title="Logo Identity Design" href="img/portfolio/01@2x.jpg" data-lightbox-gallery="gallery1" data-lightbox-hidpi="img/portfolio/01@2x.jpg">
                                    <i class="fa fa-expand"></i>
                                </a>
                                <a href="#"><i class="fa fa-chain"></i></a> <!-- change # with your url to link it to another page -->
                            </div> 
                            <img src="img/portfolio/01.jpg" class="img-responsive" alt="Image"> <!-- Portfolio Image -->
                        </div>
                    </div>
                </div><!-- end Works #1 col 3 -->

                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 nopadding apps"> <!-- Works #2 col 3 -->
                    <div class="box">
                        <div class="hover-bg">
                            <div class="hover-text off">
                                <a title="Mobile Application" href="img/portfolio/02@2x.jpg" data-lightbox-gallery="gallery1" data-lightbox-hidpi="img/portfolio/02@2x.jpg">
                                    <i class="fa fa-expand"></i>
                                </a>
                                <a href="#"><i class="fa fa-chain"></i></a><!-- change # with your url to link it to another page -->
                            </div>
                            <img src="img/portfolio/02.jpg" class="img-responsive" alt="Image"> <!-- Portfolio Image -->
                        </div>
                    </div>
                </div><!-- end Works #2 col 3 -->

                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 nopadding others brand"><!-- Works #3 col 3 -->
                    <div class="box">
                        <div class="hover-bg">
                            <div class="hover-text off">
                                <a title="Freedom Project #1" href="img/portfolio/03@2x.jpg" data-lightbox-gallery="gallery1" data-lightbox-hidpi="img/portfolio/03@2x.jpg">
                                    <i class="fa fa-expand"></i>
                                </a>
                                <a href="#"><i class="fa fa-chain"></i></a><!-- change # with your url to link it to another page -->
                            </div>
                            <img src="img/portfolio/03.jpg" class="img-responsive" alt="Image"> <!-- Portfolio Image -->
                        </div>
                    </div>
                </div><!-- end Works #3 col 3 -->

                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 nopadding others web"> <!-- Works #4 col 3 -->
                    <div class="box">
                        <div class="hover-bg">
                            <div class="hover-text off">
                                <a title="Freedom Project #1" href="img/portfolio/04@2x.jpg" data-lightbox-gallery="gallery1" data-lightbox-hidpi="img/portfolio/04@2x.jpg">
                                    <i class="fa fa-expand"></i>
                                </a>
                                <a href="#"><i class="fa fa-chain"></i></a><!-- change # with your url to link it to another page -->
                            </div>
                            <img src="img/portfolio/04.jpg" class="img-responsive" alt="Image"> <!-- Portfolio Image -->
                        </div>
                    </div>
                </div> <!-- end Works #4 col 3 -->

                <div class="col-xs-12 col-sm-6 col-md-3 nopadding web others"> <!-- Works #5 col 3 -->
                    <div class="box">
                        <div class="hover-bg">
                            <div class="hover-text off">
                                <a title="Freedom Project #1" href="img/portfolio/05@2x.jpg" data-lightbox-gallery="gallery1" data-lightbox-hidpi="img/portfolio/05@2x.jpg">
                                    <i class="fa fa-expand"></i>
                                </a>
                                <a href="#"><i class="fa fa-chain"></i></a><!-- change # with your url to link it to another page -->
                            </div>
                            <img src="img/portfolio/05.jpg" class="img-responsive" alt="Image"> <!-- Portfolio Image -->
                        </div>
                    </div>
                </div> <!-- end Works #5 col 3 -->

                <div class="col-xs-12 col-sm-6 col-md-3 nopadding app">  <!-- Works #6 col 3 -->
                    <div class="box">
                        <div class="hover-bg">
                            <div class="hover-text off">
                                <a title="Freedom Project #1" href="img/portfolio/06@2x.jpg" data-lightbox-gallery="gallery1" data-lightbox-hidpi="img/portfolio/06@2x.jpg">
                                    <i class="fa fa-expand"></i>
                                </a>
                                <a href="#"><i class="fa fa-chain"></i></a><!-- change # with your url to link it to another page -->
                            </div>
                            <img src="img/portfolio/06.jpg" class="img-responsive" alt="Image"> <!-- Portfolio Image -->
                        </div>
                    </div>
                </div><!-- end Works #6 col 3 -->

                <div class="col-xs-12 col-sm-6 col-md-3 nopadding web brand"><!-- Works #7 col 3 -->
                    <div class="box">
                        <div class="hover-bg">
                            <div class="hover-text off">
                                <a title="Freedom Project #1" href="img/portfolio/07@2x.jpg" data-lightbox-gallery="gallery1" data-lightbox-hidpi="img/portfolio/07@2x.jpg">
                                    <i class="fa fa-expand"></i>
                                </a>
                                <a href="#"><i class="fa fa-chain"></i></a><!-- change # with your url to link it to another page -->
                            </div>
                            <img src="img/portfolio/07.jpg" class="img-responsive" alt="Image"> <!-- Portfolio Image -->
                        </div>
                    </div>
                </div><!-- end Works #7 col 3 -->

                <div class="col-xs-12 col-sm-6 col-md-3 nopadding app"> <!-- Works #8 col 3 -->
                    <div class="box"> 
                        <div class="hover-bg">
                            <div class="hover-text off">
                                <a title="Freedom Project #1" href="img/portfolio/08@2x.jpg" data-lightbox-gallery="gallery1" data-lightbox-hidpi="img/portfolio/08@2x.jpg">
                                    <i class="fa fa-expand"></i>
                                </a>
                                <a href="#"><i class="fa fa-chain"></i></a><!-- change # with your url to link it to another page -->
                            </div>
                            <img src="img/portfolio/08.jpg" class="img-responsive" alt="Image"> <!-- Portfolio Image -->
                        </div> 
                    </div>
                </div> <!-- end Works #8 col 3 -->
                
            </div> <!-- End Row -->

        </div> <!-- End Container-Fluid -->
    </div>

    
    </div>
