<!DOCTYPE html>
<html class="load-full-screen">
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <title><?php echo $title; ?></title>
        <link rel="icon" type="image/png" href="<?php echo base_url(); ?>assets/public/images/icon.png" />
        <link href="<?php echo base_url(); ?>assets/public/css/animate.min.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/public/css/bootstrap-select.min.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/public/css/owl.carousel.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/public/css/owl-carousel-theme.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/public/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="<?php echo base_url(); ?>assets/public/css/flexslider.css" rel="stylesheet" media="screen">
        <link href="<?php echo base_url(); ?>assets/public/css/jssor.css" rel="stylesheet" media="screen">
        <link href="<?php echo base_url(); ?>assets/public/css/style.css" rel="stylesheet" media="screen">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,800,700,600' rel='stylesheet' type='text/css'>
    </head>

    <body class="load-full-screen">
        <div id="loader" class="load-full-screen">
            <div class="loading-animation">
                <span><i class="fa fa-plane"></i></span>
                <span><i class="fa fa-bed"></i></span>
                <span><i class="fa fa-ship"></i></span>
                <span><i class="fa fa-suitcase"></i></span>
            </div>
        </div>
        <span id="stoggle">
            <a href="<?php echo base_url(); ?>evis_travel/chat" style="color:white;">
                <i class="fa fa-comments"></i> <span class="chathead">Chat With Us</span>
            </a>
        </span>
        <div class="site-wrapper">
            <div class="row transparent-menu-top">
                <div class="container clear-padding">
                    <div class="navbar-contact">
                        <div class="col-md-7 col-sm-6 clear-padding">
                            <a href="#" class="transition-effect"><i class="fa fa-phone"></i> (+88) 01714069155</a>
                            <a href="#" class="transition-effect">(+88) 01739888839</a>
                            <a href="#" class="transition-effect"><i class="fa fa-envelope-o"></i> info@travelgeekbd.com</a>
                        </div>
                        <div class="col-md-5 col-sm-6 clear-padding search-box">
                            <div class="col-md-6 col-xs-5 clear-padding">
                                <form >
                                    <div class="input-group">
                                        <input type="text" name="search" class="form-control" required placeholder="Search">
                                        <span class="input-group-addon"><i class="fa fa-search fa-fw"></i></span>
                                    </div>
                                </form>
                            </div>
                            <div class="col-md-6 col-xs-7 clear-padding user-logged">
                                <?php
                                $username = $this->session->userdata('username');
                                if (!$username) {
                                    ?>
                                    <a href="#" data-toggle="modal" data-target="#login" class="transition-effect">
                                        <i class="fa fa-user"></i>Login
                                    </a>
                                    <a href="" data-toggle="modal" data-target="#register" class="transition-effect">
                                        <i class="fa fa-plus"></i>Register
                                    </a>
                                    <?php
                                } else {
                                    ?>
                                    <a href="#" class="transition-effect">
                                        Hi, <?php echo $username; ?>
                                    </a>
                                    <a href="<?php echo base_url(); ?>evis_user_login/logout" class="transition-effect">
                                        <i class="fa fa-sign-out"></i>Sign Out
                                    </a>
                                    <?php
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="row transparent-menu">
                <div class="container clear-padding">
                    <div class="navbar-wrapper">
                        <div class="navbar navbar-default" role="navigation">
                            <div class="nav-container">
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                    <img src="<?php echo base_url(); ?>assets/public/images/logo.png" class=" logo img-responsive fl" alt="">
                                </div>    
                                <div class="navbar-collapse collapse">
                                    <ul class="nav navbar-nav navbar-right menu">
                                        <li class="dropdown">
                                            <a class="transition-effect dropdown-toggle" href="<?php echo base_url(); ?>"><i class="fa fa-home"></i> Home</a>
                                        </li>
                                        <li class="dropdown">
                                            <a class="transition-effect dropdown-toggle" href="<?php echo base_url(); ?>evis_travel/tours"><i class="fa fa-suitcase"></i> Tours</a>
                                        </li>
                                        <li class="dropdown">
                                            <a class="transition-effect dropdown-toggle" href="<?php echo base_url(); ?>evis_travel/day_trips"><i class="fa fa-sun-o"></i> Day Trips</a>
                                        </li>
                                        <li class="dropdown">
                                            <a class="transition-effect dropdown-toggle" href="<?php echo base_url(); ?>evis_travel/blog"><i class="fa fa-pencil"></i> Blog</a>
                                        </li>
                                        <li class="dropdown">
                                            <a class="transition-effect dropdown-toggle" href="<?php echo base_url(); ?>evis_travel/gallery"><i class="fa fa-picture-o"></i> Gallery</a>
                                        </li>
                                        <li>
                                            <a class="transition-effect dropdown-toggle" href="<?php echo base_url(); ?>evis_travel/about_us"><i class="fa fa-modx"></i> About Us</a>
                                        </li>
                                        <li class="dropdown">
                                            <a class="transition-effect dropdown-toggle" href="<?php echo base_url(); ?>evis_travel/contact_us"><i class="fa fa-picture-o"></i> Contact Us</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row page-title">
                <div class="container clear-padding text-center flight-title">
                    <h1>About Us</h1>
                </div>
            </div>
            <div class="row flex-row">
                <div class="col-lg-12 col-md-12 col-sm-12 flex-item">
                    <div class="flex-item-desc-aboutus">
                        <div class="section-title">
                            <h2 class="color-green">TRAVEL GEEK BD</h2>
                        </div>
                        <p class="color-text">Travel geek bd is the most promising and enthusiastic tour operator agency in Bangladesh formed by Documentary photographer Sohan. We believe in a social connection with our guests who will be visiting us coming years. The team also includes Doctors journalists, filmmakers and social activist because travel geek believes in the diversity of different occupation who will be working very intensively to help tourists.</p>
                    </div>
                </div>
            </div>
            <div class="row our-service hotel-service">
                <div class="container clear-padding">
                    <div class="service-left col-md-4">
                        <div class="section-title">
                            <h2 class="color-green">OUR SERVICES</h2>
                            <h4 class="color-orange">What We Offer</h4>
                        </div>
                        <p style="text-align:justify;" class="color-text">We believe the travelers around the globe are connected with a very important reason to contribute and learn from mother earth. Travel geek was formed with a believe that everyone in the world should get their travel packages according to their budgets. We will be helping our guests to tailor their vacation in Bangladesh within their capacity . We are not just another tour operator working only for business but we include a diverse team of photographers, film makers, doctors, journalists river explorer to make a voice for environmental activism</p>
                    </div>
                    <div class="service-right col-md-8">
                        <div class="col-sm-6 text-center service">
                            <i class="fa fa-plane"></i>
                            <div class="service-desc">
                                <h5 class="color-orange">AIRPORT PICUP</h5>
                                <p class="color-text">Free Airport Picup Facility</p>
                            </div>
                        </div>
                        <div class="col-sm-6 text-center service">
                            <i class="fa fa-life-ring"></i>
                            <div class="service-desc">
                                <h5 class="color-orange">ONLINE SUPPORT</h5>
                                <p class="color-text">We provide online support</p>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="col-sm-6 text-center service">
                            <i class="fa fa-ticket"></i>
                            <div class="service-desc">
                                <h5 class="color-orange">ARRANGING TRAVEL TICKET</h5>
                                <p class="color-text">Make sure you make a good ticket</p>
                            </div>
                        </div>
                        <div class="col-sm-6 text-center service">
                            <i class="fa fa-taxi"></i>
                            <div class="service-desc">
                                <h5 class="color-orange">TRANSPORT</h5>
                                <p class="color-text">Free Drop facility to your Hotel</p>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <div class="row our-team">
                <div class="container clear-padding">
                    <div class="section-title text-center">
                        <h2>OUR TEAM</h2>
                        <h4>MEET THE TEAM BEHIND TRAVEL GEEK BD</h4>
                    </div>
                    <div class="fix">
                        <div class="col-md-4 col-sm-6 text-center">
                            <div class="team-member">
                                <img src="<?php echo base_url(); ?>assets/public/images/user_review/sohan.png" alt="">
                                <h4>Sohan</h4>
                                <h5>Founder and CEO </h5>
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-google-plus"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 text-center">
                            <div class="team-member">
                                <img src="<?php echo base_url(); ?>assets/public/images/user_review/babor.png" alt="">
                                <h4>Babor</h4>
                                <h5>Co - Founder</h5>
                            </div>
                        </div>
                        <div class="clearfix visible-sm-block"></div>
                        <div class="col-md-4 col-sm-6 text-center">
                            <div class="team-member">
                                <img src="<?php echo base_url(); ?>assets/public/images/user_review/setu_das.png" alt="">
                                <h4>Setu Das</h4>
                                <h5>Chief Travel Geek</h5>
                            </div>
                        </div>
                    </div>
                    <div class="fix">
                        <div class="col-md-4 col-sm-6 text-center">
                            <div class="team-member">
                                <img src="<?php echo base_url(); ?>assets/public/images/user_review/marza.png" alt="">
                                <h4>Marza</h4>
                                <h5>Public Relation and Online Support</h5>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 text-center">
                            <div class="team-member">
                                <img src="<?php echo base_url(); ?>assets/public/images/user_review/sanjida.png" alt="">
                                <h4>Sanjida</h4>
                                <h5>Social Media Travel Activist</h5>
                            </div>
                        </div>
                        <div class="clearfix visible-sm-block"></div>
                        <div class="col-md-4 col-sm-6 text-center">
                            <div class="team-member">
                                <img src="<?php echo base_url(); ?>assets/public/images/user_review/tanim.png" alt="">
                                <h4>Tanim</h4>
                                <h5>River Explorer and Environmental Activist</h5>
                            </div>
                        </div>
                    </div>
                    <div class="fix">
                        <div class="col-md-4 col-sm-6 text-center">
                            <div class="team-member">
                                <img src="<?php echo base_url(); ?>assets/public/images/user_review/atique.png" alt="">
                                <h4>Atique</h4>
                                <h5>Visual Artist</h5>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 text-center">
                            <div class="team-member">
                                <img src="<?php echo base_url(); ?>assets/public/images/user_review/ratul.png" alt="">
                                <h4>Ratul</h4>
                                <h5>Web Engineer</h5>
                            </div>
                        </div>
                        <div class="clearfix visible-sm-block"></div>
                        <div class="col-md-4 col-sm-6 text-center">
                            <div class="team-member">
                                <img src="<?php echo base_url(); ?>assets/public/images/user_review/amdad.png" alt="">
                                <h4>Amdad</h4>
                                <h5>Marketing Jedi</h5>
                            </div>
                        </div>
                    </div>
                    <div class="fix">
                        <div class="col-md-4 col-sm-6 text-center">
                            <div class="team-member">
                                <img src="<?php echo base_url(); ?>assets/public/images/user_review/timur.png" alt="">
                                <h4>Timur</h4>
                                <h5>Photographer</h5>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 text-center">
                            <div class="team-member">
                                <img src="<?php echo base_url(); ?>assets/public/images/user_review/tuhin.png" alt="">
                                <h4>Tuhin</h4>
                                <h5>Photographer</h5>
                            </div>
                        </div>
                        <div class="clearfix visible-sm-block"></div>
                        <div class="col-md-4 col-sm-6 text-center">
                            <div class="team-member">
                                <img src="<?php echo base_url(); ?>assets/public/images/user_review/ponir.png" alt="">
                                <h4>Ponir</h4>
                                <h5>Photographer</h5>
                            </div>
                        </div>
                    </div>
                    <div class="fix">
                        <div class="col-md-4 col-sm-6 text-center">
                            <div class="team-member">
                                <img src="<?php echo base_url(); ?>assets/public/images/user_review/ehtesham.png" alt="">
                                <h4>Ehtesham</h4>
                                <h5>Photographer</h5>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 text-center">
                            <div class="team-member">
                                <img src="<?php echo base_url(); ?>assets/public/images/user_review/kamrul.png" alt="">
                                <h4>Kamrul</h4>
                                <h5>Photographer</h5>
                            </div>
                        </div>
                        <div class="clearfix visible-sm-block"></div>
                        <div class="col-md-4 col-sm-6 text-center">
                            <div class="team-member">
                                <img src="<?php echo base_url(); ?>assets/public/images/user_review/mehedi.png" alt="">
                                <h4>Mehedi</h4>
                                <h5>Photographer</h5>
                            </div>
                        </div>
                    </div>
                    <div class="fix">
                        <div class="clearfix visible-sm-block"></div>
                        <div class="col-md-4 col-sm-6 text-center">
                            <div class="team-member">
                                <img src="<?php echo base_url(); ?>assets/public/images/user_review/pusan.png" alt="">
                                <h4>Pusan</h4>
                                <h5>Photographer</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <section id="footer">
                <footer>
                    <div class="row sm-footer">
                        <div class="container clear-padding">
                            <div class="col-md-3 col-sm-6 footer-about-box">
                                <h4>TRAVEL GEEK BD</h4>
                                <p>Travel geek bd is the most promising and enthusiastic tour operator company in Bangladesh formed by Independent Documentary Photographer Sohan with the vision of helping travelers.</p>
                                <a href="<?php echo base_url(); ?>evis_travel/about_us">READ MORE</a>
                            </div>
                            <div class="col-md-3 col-sm-6 contact-box">
                                <h4>CONTACT US</h4>
                                <p><i class="fa fa-home"></i>MPC Bhavan. 91/1 Shamibag, Dhaka – 1100</p>
                                <p><i class="fa fa-envelope-o"></i>info@travelgeekbd.com</p>
                                <p><i class="fa fa-phone"></i> +88 01714069155, +8801739888839</p>
                                <p class="social-media">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-google-plus"></i></a>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                    <a href="#"><i class="fa fa-tripadvisor" style="padding:7px 0px 0px 6px;"></i></a>
                                </p>
                            </div>
                            <div class="clearfix visible-sm-block"></div>
                            <div class="col-md-3 col-sm-6 footer-gallery">
                                <h4>GALLERY</h4>
                                <img src="<?php echo base_url(); ?>assets/public/images/footer_image/footer_image_1.jpg" alt="">
                                <img src="<?php echo base_url(); ?>assets/public/images/footer_image/footer_image_2.jpg" alt="">
                                <img src="<?php echo base_url(); ?>assets/public/images/footer_image/footer_image_3.jpg" alt="">
                                <img src="<?php echo base_url(); ?>assets/public/images/footer_image/footer_image_4.jpg" alt="">
                                <img src="<?php echo base_url(); ?>assets/public/images/footer_image/footer_image_5.jpg" alt="">
                                <img src="<?php echo base_url(); ?>assets/public/images/footer_image/footer_image_6.jpg" alt="">
                            </div>
                            <div class="col-md-3 col-sm-6 footer-subscribe">
                                <h4>SUBSCRIBE</h4>
                                <p>Don't miss any deal. Subscribe to get offers alerts.</p>
                                <form action="<?php echo base_url(); ?>evis_travel/save_subscription" method="POST">
                                    <div class="col-md-10 col-sm-10 col-xs-9 clear-padding">
                                        <input type="email" name="subscription_email" required class="form-control" placeholder="Enter Your Email">
                                    </div>
                                    <div class="col-md-2 col-sm-2 col-xs-3 clear-padding">
                                        <button type="submit"><i class="fa fa-paper-plane"></i></button>
                                    </div>
                                </form> 
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="row sm-footer-nav text-center">
                        <p class="copyright">
                            &copy;  2016 TRAVEL GEEK BD ALL RIGHTS RESERVED
                        </p>
                        <div class="go-up">
                            <a href="#"><i class="fa fa-arrow-up"></i></a>
                        </div>
                    </div>
                </footer>
            </section>
        </div>
        <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/public/js/respond.js"></script>
        <script src="<?php echo base_url(); ?>assets/public/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/public/js/jquery-ui.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/public/js/bootstrap-select.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/public/js/supersized.3.1.3.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/public/js/jssor.js"></script>
        <script src="<?php echo base_url(); ?>assets/public/js/js.js"></script>
        <div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                        <form action="<?php echo base_url(); ?>evis_user_login/check_user_login" method="POST">
                            <div class="col-xs-12">
                                <label>Email</label>
                                <input type="email" class="form-control" name="email" required>
                            </div>
                            <div class="col-xs-12">
                                <label>Password</label>
                                <input type="password" class="form-control" name="password" required>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-default submit-review">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="register" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                        <form action="<?php echo base_url(); ?>evis_travel/save_user" method="POST" enctype="multipart/form-data">
                            <div class="col-xs-12">
                                <label>Username</label>
                                <input type="text" class="form-control" name="username" required>
                            </div>
                            <div class="col-xs-12">
                                <label>User Image</label>
                                <input type="file" class="form-control" name="user_image">
                            </div>
                            <div class="col-xs-12">
                                <label>Email</label>
                                <input type="email" class="form-control" name="email" required>
                            </div>
                            <div class="col-xs-12">
                                <label>Password</label>
                                <input type="password" class="form-control" name="password" required>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-default submit-review">Register</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>