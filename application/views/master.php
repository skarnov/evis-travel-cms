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
            <?php echo $content; ?>
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
        <script type="text/javascript">
            jQuery(function ($) {
                "use strict";
                $.supersized({
                    //Functionality
                    slideshow: 1, //Slideshow on/off
                    autoplay: 1, //Slideshow starts playing automatically
                    start_slide: 1, //Start slide (0 is random)
                    random: 0, //Randomize slide order (Ignores start slide)
                    slide_interval: 10000, //Length between transitions
                    transition: 1, //0-None, 1-Fade, 2-Slide Top, 3-Slide Right, 4-Slide Bottom, 5-Slide Left, 6-Carousel Right, 7-Carousel Left
                    transition_speed: 500, //Speed of transition
                    new_window: 1, //Image links open in new window/tab
                    pause_hover: 0, //Pause slideshow on hover
                    keyboard_nav: 0, //Keyboard navigation on/off
                    performance: 1, //0-Normal, 1-Hybrid speed/quality, 2-Optimizes image quality, 3-Optimizes transition speed // (Only works for Firefox/IE, not Webkit)
                    image_protect: 1, //Disables image dragging and right click with Javascript
                    //Size & Position
                    min_width: 0, //Min width allowed (in pixels)
                    min_height: 0, //Min height allowed (in pixels)
                    vertical_center: 1, //Vertically center background
                    horizontal_center: 1, //Horizontally center background
                    fit_portrait: 1, //Portrait images will not exceed browser height
                    fit_landscape: 0, //Landscape images will not exceed browser width
                    //Components
                    navigation: 1, //Slideshow controls on/off
                    thumbnail_navigation: 1, //Thumbnail navigation
                    slide_counter: 1, //Display slide numbers
                    slide_captions: 1, //Slide caption (Pull from "title" in slides array)
                    slides: [//Slideshow Images 
                        {image: 'assets/public/images/slider_image/slider_1.jpg', title: 'Slide 1'},
                        {image: 'assets/public/images/slider_image/slider_2.jpg', title: 'Slide 2'},
                        {image: 'assets/public/images/slider_image/slider_3.jpg', title: 'Slide 3'},
                        {image: 'assets/public/images/slider_image/slider_4.jpg', title: 'Slide 4'}
                    ]
                });
            });
            jssor_1_slider_init();
        </script>
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