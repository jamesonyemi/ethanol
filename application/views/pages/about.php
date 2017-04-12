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
                 <li><a href="<?php echo base_url('about') ?> " class=" active scroll">About</a></li>
                 <li><a href="<?php echo base_url('ourworks') ?> " > Our Works</a></li>
                 <li><a href="<?php echo base_url('process') ?> ">Process</a></li>
                 <li><a href="<?php echo base_url('pricing') ?> ">Pricing</a></li>
                 <li><a href="<?php echo base_url('blog') ?>" >Blog</a></li>
                 <li><a href="<?php echo base_url('contact') ?>" >Contact</a></li>
              </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>

<!-- About Us Section
    ================================================== -->
    <div id="tf-about">
        <div class="container"> <!-- container -->
            <div class="section-header">
                <h2>What To Know Us <span class="highlight"><strong>Better</strong></span></h2>
                <h5><em>We design and build functional and beautiful websites</em></h5>
                <div class="fancy"><span><img src="img/favicon.ico" alt="..."></span></div>
            </div>
        </div><!-- end container -->

        <div class="gray-bg"> <!-- fullwidth gray background -->

            <div class="container"><!-- container -->
                <div class="row"> <!-- row -->

                    <div class="col-md-6"> <!-- left content col 6 -->
                        <div class="about-left-content text-center">
                            <div class="img-wrap"> <!-- profile image wrap -->
                                <div class="profile-img"> <!-- company profile details -->
                                    <img src="http://placehold.it/800x650" class="img-responsive" alt="Image"> <!-- change link to your image for your company profile -->
                                    <ul class="list-inline social"> 
                                        <li><a href="#" class="fa fa-facebook"></a></li> <!-- facebook link here -->
                                        <li><a href="#" class="fa fa-twitter"></a></li> <!-- twitter link here -->
                                        <li><a href="#" class="fa fa-google-plus"></a></li> <!-- google plus link here -->
                                    </ul>
                                </div>
                            </div><!-- end profile image wrap -->
                            <h2><span class="small">Developing</span> Amazing Things <br><span class="small">with Passion since 2012.</span></h2>
                        </div>
                    </div><!-- end left content col 6 -->

                    <div class="col-md-6"><!-- right content col 6 -->
                        <div class="about-right-content"> <!-- right content wrapper -->

                            <h4><strong>Professional Profile</strong></h4>
                            <p>Vel donec et scelerisque vestibulum. Condimentum aliquam, mollit magna velit nec, tempor cursus vitae sit aliquet neque purus. Ultrices lacus proin conubia dictum tempus, tempor pede vitae faucibus, sem auctor, molestie diam dictum aliquam. Dolor leo, ridiculus est ut cubilia nec, fermentum arcu praesent.</p>
                            
                            <div class="skills"> <!-- skills progress bar -->
                                <div class="skillset"> <!-- skill #1 -->
                                    <p>UI/UX Design</p>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%;">
                                            <span class="sr-only">90% Complete</span>
                                        </div>
                                    </div>
                                </div><!-- end skill #1 -->

                                <div class="skillset"> <!-- skill #2 -->
                                    <p>HTML5, CSS3, SASS</p>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 85%;">
                                            <span class="sr-only">85% Complete</span>
                                        </div>
                                    </div>
                                </div><!-- end skill #2 -->

                                <div class="skillset"> <!-- skill #3 -->
                                    <p>WordPress</p>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="99" aria-valuemin="0" aria-valuemax="100" style="width: 99%;">
                                            <span class="sr-only">99% Complete</span>
                                        </div>
                                    </div>
                                </div> <!-- end skill #3 -->

                                <div class="skillset"> <!-- skill #4 -->
                                    <p>Graphic Design</p>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%;">
                                            <span class="sr-only">70% Complete</span>
                                        </div>
                                    </div>
                                </div> <!-- end skill #4 -->

                                <div class="skillset"> <!-- skill #5 -->
                                    <p>Marketing</p>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%;">
                                            <span class="sr-only">50% Complete</span>
                                        </div>
                                    </div>
                                </div><!-- end skill #4 -->
                            </div> <!-- end skills progress bar -->

                        </div><!-- end right content wrapper -->
                    </div><!-- end right content col 6 -->

                </div> <!-- end row -->
            </div><!-- end container -->

            <div id="tf-counter" class="text-center">
                <div class="container">
                    <div class="row"> <!-- Row -->

                        <div class="counter"> 

                          <div class="col-xs-6 col-sm-4 col-md-2 col-md-2 col-md-offset-1 facts"><!-- counter #1 -->
                            <div class="count-box"> 
                                <i class="fa fa-thumbs-up"></i>
                                <h4 class="count">720</h4>
                                <p class="small">Happy Customers</p>
                            </div> 
                          </div><!-- end counter #1 -->

                          <div class="col-xs-6 col-sm-4 col-md-2 facts"><!-- counter #2 -->
                            <div class="count-box">
                              <i class="fa fa-user"></i>
                              <h4 class="count">480</h4>
                              <p class="small">People Donated</p>
                            </div>
                          </div>

                          <div class="col-xs-6 col-sm-4 col-md-2 facts"> <!-- counter #3 -->
                            <div class="count-box">
                              <i class="fa fa-desktop"></i>
                              <h4 class="count">1253</h4>
                              <p class="small">People Participated</p>
                            </div>
                          </div>

                          <div class="col-xs-6 col-sm-4 col-md-2 facts"> <!-- counter #4 -->
                            <div class="count-box">
                              <i class="fa fa-dollar"></i>
                              <h4 class="count">4580</h4>
                              <p class="small">Donation Collected</p>
                            </div>
                          </div>

                          <div class="col-xs-6 col-sm-4 col-md-2 facts"> <!-- counter #5 -->
                            <div class="count-box last">
                              <i class="fa fa-line-chart"></i>
                              <h4 class="count">12853</h4>
                              <p class="small">Total Hits</p>
                            </div>
                          </div>

                        </div>

                      </div> <!-- End Row -->
                </div>
            </div>

        </div> <!-- end fullwidth gray background -->
    </div>

    <!-- Team Section
    ================================================== -->
    <div id="tf-team">
        <div class="container"> <!-- container -->
            <div class="section-header">
                <h2>Awesome People Behind <span class="highlight"><strong>ethanol</strong></span></h2>
                <h5><em>We design and build functional and beautiful websites</em></h5>
                <div class="fancy"><span><img src="img/favicon.ico" alt="..."></span></div>
            </div>

             <div id="team" class="owl-carousel owl-theme text-center"> <!-- team carousel wrapper -->

                <div class="item"><!-- Team #1 -->
                    <div class="hover-bg"> <!-- Team Wrapper -->
                        <div class="hover-text off"> <!-- Hover Description -->
                            <p>Aliquet rutrum dui a varius. Mauris ornare tortor in eleifend blanditullam ut ligula et neque. Quis placerat dui. Duis lacinia nisi sit ansequat lorem nunc, nec bibendum erat volutpat ultricies.</p>
                        </div><!-- End Hover Description -->
                        <img src="img/team/01.jpg" alt="..." class="img-responsive"> <!-- Team Image -->
                        <div class="team-detail text-center">
                            <h3>Maria Shara</h3>
                            <p class="text-uppercase">Founder / CEO</p>
                            <ul class="list-inline social"> 
                                <li><a href="#" class="fa fa-facebook"></a></li> <!-- facebook link here -->
                                <li><a href="#" class="fa fa-twitter"></a></li> <!-- twitter link here -->
                                <li><a href="#" class="fa fa-google-plus"></a></li> <!-- google plus link here -->
                            </ul>
                        </div>
                    </div><!-- End Team Wrapper -->
                </div><!-- End Team #1 -->

                <div class="item"> <!-- Team #2 -->
                    <div class="hover-bg"> <!-- Team Wrapper -->
                        <div class="hover-text off"> <!-- Hover Description -->
                            <p>Praesent eget bibendum purus, quis placerat dui. Duis lacinia nisi sit ansequat lorem nunc, nec bibendum erat volutpat ultricies. Aliquet rutrum dui a varius. Mauris ornare tortor.</p>
                        </div> <!-- End Hover Description -->
                        <img src="img/team/02.jpg" alt="..." class="img-responsive"><!-- Team Image -->
                        <div class="team-detail text-center">
                            <h3>Jenn Pereira</h3>
                            <p class="text-uppercase">Senior Creative Director</p>
                            <ul class="list-inline social"> 
                                <li><a href="#" class="fa fa-facebook"></a></li> <!-- facebook link here -->
                                <li><a href="#" class="fa fa-twitter"></a></li> <!-- twitter link here -->
                                <li><a href="#" class="fa fa-google-plus"></a></li> <!-- google plus link here -->
                            </ul>
                        </div>
                    </div> <!-- End Team Wrapper -->
                </div><!-- End Team #2 -->

                <div class="item"> <!-- Team #3 -->
                    <div class="hover-bg"> <!-- Team Wrapper -->
                        <div class="hover-text off"> <!-- Hover Description -->
                            <p>Vivamus aliquet rutrum dui a varius. Mauris ornare tortor in eleifend blanditullam ut ligula et neque. Nec bibendum erat volutpat ultricies. Aliquet rutrum dui a varius. Mauris ornare tortor. </p>
                        </div> <!-- End Hover Description -->
                        <img src="img/team/01.jpg" alt="..." class="img-responsive"><!-- Team Image -->
                        <div class="team-detail text-center">
                            <h3>Serena William</h3>
                            <p class="text-uppercase">Senior Designer</p>
                            <ul class="list-inline social"> 
                                <li><a href="#" class="fa fa-facebook"></a></li> <!-- facebook link here -->
                                <li><a href="#" class="fa fa-twitter"></a></li> <!-- twitter link here -->
                                <li><a href="#" class="fa fa-google-plus"></a></li> <!-- google plus link here -->
                            </ul>
                        </div>
                    </div><!-- End Team Wrapper -->
                </div><!-- End Team #3 -->

                <div class="item"><!-- Team #4 -->
                    <div class="hover-bg"> <!-- Team Wrapper -->
                        <div class="hover-text off"> <!-- Hover Description -->
                            <p>Aliquet rutrum dui a varius. Mauris ornare tortor in eleifend blanditullam ut ligula et neque. Quis placerat dui. Duis lacinia nisi sit ansequat lorem nunc, nec bibendum erat volutpat ultricies.</p>
                        </div> <!-- End Hover Description -->
                        <img src="img/team/01.jpg" alt="..." class="img-responsive"> <!-- Team Image -->
                        <div class="team-detail text-center">
                            <h3>Maria Shara</h3>
                            <p class="text-uppercase">Founder / CEO</p>
                            <ul class="list-inline social"> 
                                <li><a href="#" class="fa fa-facebook"></a></li> <!-- facebook link here -->
                                <li><a href="#" class="fa fa-twitter"></a></li> <!-- twitter link here -->
                                <li><a href="#" class="fa fa-google-plus"></a></li> <!-- google plus link here -->
                            </ul>
                        </div>
                    </div> <!-- End Team Wrapper -->
                </div><!-- End Team #4 -->

                <div class="item"><!-- Team #5 -->
                    <div class="hover-bg"> <!-- Team Wrapper -->
                        <div class="hover-text off"> <!-- Hover Description -->
                            <p>Praesent eget bibendum purus, quis placerat dui. Duis lacinia nisi sit ansequat lorem nunc, nec bibendum erat volutpat ultricies. Aliquet rutrum dui a varius. Mauris ornare tortor.</p>
                        </div> <!-- End Hover Description -->
                        <img src="img/team/02.jpg" alt="..." class="img-responsive"> <!-- Team Image -->
                        <div class="team-detail text-center">
                            <h3>Jenn Pereira</h3>
                            <p class="text-uppercase">Senior Creative Director</p>
                            <ul class="list-inline social"> 
                                <li><a href="#" class="fa fa-facebook"></a></li> <!-- facebook link here -->
                                <li><a href="#" class="fa fa-twitter"></a></li> <!-- twitter link here -->
                                <li><a href="#" class="fa fa-google-plus"></a></li> <!-- google plus link here -->
                            </ul>
                        </div>
                    </div> <!-- End Team Wrapper -->
                </div><!-- End Team #5 -->

            </div> <!-- end team carousel wrapper -->

        </div> <!-- container -->
    </div>

    <!-- Why Us/Features Section
    ================================================== -->
    <div id="tf-features">

        <div class="container">
            <div class="section-header">
                <h2>Great Products and <span class="highlight"><strong>Features</strong></span></h2>
                <h5><em>We design and build functional and beautiful websites</em></h5>
                <div class="fancy"><span><img src="img/favicon.ico" alt="..."></span></div>
            </div>
        </div>

        <div id="feature" class="gray-bg"> <!-- fullwidth gray background -->
            <div class="container"> <!-- container -->
                <div class="row" role="tabpanel"> <!-- row -->
                    <div class="col-md-4 col-md-offset-1"> <!-- tab menu col 4 -->

                        <ul class="features nav nav-pills nav-stacked" role="tablist">
                            <li role="presentation" class="active">  <!-- feature tab menu #1 -->
                                <a href="#f1" aria-controls="f1" role="tab" data-toggle="tab">
                                    <span class="fa fa-desktop"></span>
                                    Internet Communication<br><small>sub title here</small>
                                </a>
                            </li>
                            <li role="presentation"> <!-- feature tab menu #2 -->
                                <a href="#f2" aria-controls="f2" role="tab" data-toggle="tab">
                                    <span class="fa fa-pencil"></span>
                                    Branding and Development<br><small>sub title here</small>
                                </a>
                            </li>
                            <li role="presentation"> <!-- feature tab menu #3 -->
                                <a href="#f3" aria-controls="f3" role="tab" data-toggle="tab">
                                    <span class="fa fa-space-shuttle"></span>
                                    Motion Graphics<br><small>sub title here</small>
                                </a>
                            </li>
                            <li role="presentation"> <!-- feature tab menu #4 -->
                                <a href="#f4" aria-controls="f4" role="tab" data-toggle="tab">
                                    <span class="fa fa-automobile"></span>
                                    Mobile Application<br><small>sub title here</small>
                                </a>
                            </li>
                            <li role="presentation"> <!-- feature tab menu #5 -->
                                <a href="#f5" aria-controls="f5" role="tab" data-toggle="tab">
                                    <span class="fa fa-institution"></span>
                                    Relaible Company Analysis<br><small>sub title here</small>
                                </a>
                            </li>
                        </ul>

                    </div><!-- end tab menu col 4 -->

                    <div class="col-md-6"> <!-- right content col 6 -->
                        <!-- Tab panes -->
                        <div class="tab-content features-content"> <!-- tab content wrapper -->
                            <div role="tabpanel" class="tab-pane fade in active" id="f1"> <!-- feature #1 content open -->
                                <h4>Internet Communication</h4>
                                <p>Vel donec et scelerisque vestibulum. Condimentum aliquam, mollit magna velit nec, tempor cursus vitae sit aliquet neque purus. Ultrices lacus proin conubia dictum tempus, tempor pede vitae faucibus, sem auctor, molestie diam dictum aliquam. Dolor leo, ridiculus est ut cubilia nec, fermentum arcu praesent.</p>
                                <img src="img/tab01.png" class="img-responsive" alt="...">
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="f2"> <!-- feature #2 content -->
                                <h4>Branding and Development</h4>
                                <p>Vel donec et scelerisque vestibulum. Condimentum aliquam, mollit magna velit nec, tempor cursus vitae sit aliquet neque purus. Ultrices lacus proin conubia dictum tempus, tempor pede vitae faucibus, sem auctor, molestie diam dictum aliquam. Dolor leo, ridiculus est ut cubilia nec, fermentum arcu praesent.</p>
                                <img src="img/tab02.png" class="img-responsive" alt="...">
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="f3"> <!-- feature #3 content -->
                                <h4>Motion Graphics</h4>
                                <p>Vel donec et scelerisque vestibulum. Condimentum aliquam, mollit magna velit nec, tempor cursus vitae sit aliquet neque purus. Ultrices lacus proin conubia dictum tempus, tempor pede vitae faucibus, sem auctor, molestie diam dictum aliquam. Dolor leo, ridiculus est ut cubilia nec, fermentum arcu praesent.</p>
                                <img src="img/tab03.png" class="img-responsive" alt="...">
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="f4"> <!-- feature #4 content -->
                                <h4>Mobile Application</h4>
                                <p>Vel donec et scelerisque vestibulum. Condimentum aliquam, mollit magna velit nec, tempor cursus vitae sit aliquet neque purus. Ultrices lacus proin conubia dictum tempus, tempor pede vitae faucibus, sem auctor, molestie diam dictum aliquam. Dolor leo, ridiculus est ut cubilia nec, fermentum arcu praesent.</p>
                                <img src="img/tab04.png" class="img-responsive" alt="...">
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="f5"> <!-- feature #5 content -->
                                <h4>Relaible Company Analysis</h4>
                                <p>Vel donec et scelerisque vestibulum. Condimentum aliquam, mollit magna velit nec, tempor cursus vitae sit aliquet neque purus. Ultrices lacus proin conubia dictum tempus, tempor pede vitae faucibus, sem auctor, molestie diam dictum aliquam. Dolor leo, ridiculus est ut cubilia nec, fermentum arcu praesent.</p>
                                <img src="img/tab05.png" class="img-responsive" alt="...">
                            </div>
                        </div> <!-- end tab content wrapper -->
                    </div><!-- end right content col 6 -->

                </div> <!-- end row -->
            </div> <!-- end container -->
        </div><!-- end fullwidth gray background -->
    </div>