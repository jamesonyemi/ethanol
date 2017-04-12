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
              <a class="navbar-stack" href="<?php echo base_url(); ?>users/logout" class="logoutBtn">Logout</a>
              <a class="navbar-brand" href="<?php echo base_url('home') ?>"><img src="img/logo.png" alt="..."></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav navbar-right">
                 <li><a href="<?php echo base_url('home') ?>">Home</a></li>
                 <li><a href="<?php echo base_url('services')?>">Services</a></li>
                 <li><a href="<?php echo base_url('about') ?> ">About</a></li>
                 <li><a href="<?php echo base_url('ourworks') ?> " >Our Works</a></li>
                 <li><a href="<?php echo base_url('process') ?> ">Process</a></li>
                 <li><a href="<?php echo base_url('pricing') ?> ">Pricing</a></li>
                 <li><a href="<?php echo base_url('blog') ?>" >Blog</a></li>
                 <li><a href="<?php echo base_url('contact') ?>" class=" active scroll">Contact</a></li>
              </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>

 <!-- Contact Section
    ================================================== -->
    <div id="tf-contact">

        <div class="container"> <!-- container -->
            <div class="section-header">
                <h2>Feel Free to <span class="highlight"><strong>Contact Us</strong></span></h2>
                <h5><em>We design and build functional and beautiful websites</em></h5>
                <div class="fancy"><span><img src="img/favicon.ico" alt="..."></span></div>
            </div>
        </div><!-- end container -->

        <div id="map"> <!-- Google map starts here-->

    <script>

      if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(function (p) {
        var LatLng = new google.maps.LatLng(p.coords.latitude, p.coords.longitude);
        var mapOptions = {
            center: LatLng,
            zoom: 17,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        };

        var map = new google.maps.Map(document.getElementById("map"), mapOptions);
        var image ='img/map-marker-icon.png';
        var marker = new google.maps.Marker({
            position: LatLng,
            map: map,
            draggable: true,
            animation: google.maps.Animation.DROP,
            icon:image,
            title: "CURRENT LOCATION CORDINATES:" + '\n'  +  "Latitude  :   "  + '   '
                         + p.coords.latitude    +  '\n' +    "Longitude :  " 
                         + p.coords.longitude
        });

                marker.addListener('click', toggleBounce);
                
                function toggleBounce() {
          if (marker.getAnimation() !== null) {
            marker.setAnimation(null);
          } else {
            marker.setAnimation(google.maps.Animation.BOUNCE);
          }
        }

        google.maps.event.addListener(marker, "click", function (e) {
            var infoWindow = new google.maps.InfoWindow();
            infoWindow.setContent(marker.title);
            infoWindow.open(map, marker);
        });
    });
} else {
    alert('Geo Location feature is not supported in this browser.');
}
    </script> </div>  <!-- google map ends here-->

        <div class="container"><!-- container -->
            <div class="row"> <!-- outer row -->
                <div class="col-md-10 col-md-offset-1"> <!-- col 10 with offset 1 to centered -->
                    <div class="row"> <!-- nested row -->

                        <!-- contact detail using col 4 -->
                        <div class="col-md-4">  
                            <div class="contact-detail">
                                <i class="fa fa-map-marker"></i>
                                <h4>Jl. Pahlawan VII No.247-D Sidoarjo-Surabaya-Indonesia</h4> <!-- address -->
                            </div>
                        </div>
                        <!-- contact detail using col 4 -->
                        <div class="col-md-4">
                            <div class="contact-detail">
                                <i class="fa fa-envelope-o"></i>
                                <h4>ferguson@gmail.com</h4><!-- email add -->
                            </div>
                        </div>

                        <!-- contact detail using col 4 -->
                        <div class="col-md-4">
                            <div class="contact-detail">
                                <i class="fa fa-phone"></i>
                                <h4>+613 0000 0000</h4> <!-- phone no. -->
                            </div>
                        </div>

                    </div> <!-- end nested row -->
                </div> <!-- end col 10 with offset 1 to centered -->
            </div><!-- end outer row -->

            <div class="row text-center"> <!-- contact form outer row with centered text-->
                <div class="col-md-10 col-md-offset-1"> <!-- col 10 with offset 1 to centered -->
                    <form id="contact-form" class="form" name="sentMessage" novalidate> <!-- form wrapper -->

                        <div class="row"> <!-- nested inner row -->

                            <!-- Input your name -->
                            <div class="col-md-4">
                                <div class="form-group"> <!-- Your name input -->
                                    <input type="text" autocomplete="off" class="form-control" placeholder="Your Name *" id="name" required data-validation-required-message="Please enter your name.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>

                            <!-- Input your email -->
                            <div class="col-md-4">
                                <div class="form-group"> <!-- Your email input -->
                                    <input type="email" autocomplete="off" class="form-control" placeholder="Your Email *" id="email" required data-validation-required-message="Please enter your email address.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>

                            <!-- Input your Phone no. -->
                            <div class="col-md-4">
                                <div class="form-group"> <!-- Your email input -->
                                    <input type="text" autocomplete="off" class="form-control" placeholder="Your Phone No. *" id="phone" required data-validation-required-message="Please enter your phone no.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>

                        </div><!-- end nested inner row -->

                        <!-- Message Text area -->
                        <div class="form-group"> <!-- Your email input -->
                            <textarea class="form-control" rows="7" placeholder="Tell Us Something..." id="message" required data-validation-required-message="Please enter a message."></textarea>
                            <p class="help-block text-danger"></p>
                            <div id="success"></div>
                        </div>
                        <button type="submit" class="btn btn-primary tf-btn color">Send Message</button> <!-- Send button -->

                    </form><!-- end form wrapper -->
                </div><!-- end col 10 with offset 1 to centered -->
            </div> <!-- end contact form outer row with centered text-->

        </div><!-- end container -->

    </div>