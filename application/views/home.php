<div class="row">
    <div class="container">
        <div class="col-md-8 col-sm-6 col-md-offset-4 text-center" style="min-height: 700px;">
            <div>
                <div class="hotel-tagline text-center">
                    <h3>Welcome To</h3>
                    <h1>TRAVEL GEEK BD</h1>
                </div>
            </div>
        </div>
    </div>
</div>
<section id="home-hotel-intro">
    <div class="row">
        <div class="container hotel-desc">
            <div class="col-md-6 col-sm-6">
                <div class="hotel-intro">
                    <h2 class="color-green">WHY TRAVEL GEEK BD</h2>
                    <p style="text-align:justify;" class="color-text">Travel Geek BD has introduced the most wide range of tour packages and concentrated travel enthusiast geek people in it's arsenal from different discipline. We have Photographers, film makers, Doctors, Journalists, River Explorer, social activists and disaster managers in our geek body who will be your friend and guide through out the trip across the country.</p>
                </div>
            </div>
            <div class="col-md-6 col-sm-6">
                <br/>
                <p class="color-text">But there is some special features we would like to introduce to our guests:</p>
                <ul class="color-text">
                    <li>Free Airport Pic up and Drop.</li>
                    <li>Free Online Support for helping help you to tailor your trip. It really doesn't matter if you pick us as your tour operator but we believe the universal right of everyone should travel according to their budget. We are more than happy to assist you to tailor your trip within the best possible budget.</li>
                    <li>Booking your Hotel and Travel Tickets without any service charge.</li>
                    <li>Refund if the tour cancels within 3 Business Days.</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<section id="home-top-destination">
    <div class="row image-background">
        <div class="td-overlay">
            <div class="container">
                <div class="light-section-title text-center">
                    <h2>OUR TOURS</h2>
                    <h4>EXPLORE</h4>
                </div>
                <div class="col-md-10 col-md-offset-1 on-top clear-padding">
                    <?php
                    foreach ($all_tour as $v_tour) {
                        ?>
                        <div class="col-md-6 col-sm-6 td-product text-center clear-padding wow slideInUp" data-wow-delay="0.2s">
                            <img src="<?php echo base_url() . $v_tour->tour_additional_image_0; ?>" style="height: 310px; width: 100%;">
                            <div class="overlay">
                                <div class="wrapper">
                                    <h3 class="color-green"><span><?php echo $v_tour->tour_title; ?></span></h3>
                                    <p class="color-orange"><?php echo $v_tour->tour_price; ?></p>
                                    <a href="<?php echo base_url(); ?>evis_travel/tour_details/<?php echo $v_tour->tour_id; ?>">KNOW MORE</a>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                    ?>
                    <div class="clearfix visible-md-block"></div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="recent-blog">
    <div class="row top-offer">
        <div class="container">
            <div class="section-title text-center">
                <h2 class="color-green">PEOPLE THOUGHT ABOUT TRAVEL GEEK</h2>
                <h4 class="color-orange">USER REVIEW</h4>
            </div>
        </div>
    </div>
</section>
<section id="user-review">
    <div class="row">
        <div class="container">
            <div id="jssor_1" style="position: relative; margin: 0 auto; top: 40px; left: 0px; width: 600px; height: 300px; overflow: hidden; visibility: hidden;">
                <div data-u="loading" style="position: absolute; top: 0px; left: 0px;">
                    <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
                    <div style="position:absolute;display:block;background:url('images/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
                </div>
                <div data-u="slides" style="cursor: default; position: relative; top: 0px; left: 0px; width: 600px; height: 300px; overflow: hidden;">
                    <div data-p="112.50" style="display: none;">
                        <div class="user-review ">
                            <div class="user-review-body col-lg-12">
                                <div class="user-img-area fl">
                                    <div class="user-img">
                                        <img src="<?php echo base_url(); ?>assets/public/images/user_review/sohan.png" class="img-responsive">
                                    </div>
                                </div>
                                <div class="col-lg-9 col-md-9 col-sm-9">
                                    <span class="fa fa-quote-left fa-2x ">&nbsp;</span>
                                    <h4 class="fix" style="padding:0px 15px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, Lorem ipsum dolor sit amet, </h4>
                                    <span class="fa fa-quote-right fa-2x fr fix" style="margin:0px 0px 0px 0px;"></span>
                                    <div class="col-lg-12" style="text-align:right;">
                                        <span class="fa fa-minus"></span>   
                                        <h4 class="fr" style="margin:0px 40px 0px 0px;">&nbsp;&nbsp;Jhone Doe</h4>
                                    </div>                                                  
                                </div>
                            </div>
                        </div>
                    </div>
                    <div data-p="112.50" style="display: none;">
                        <div class="user-review ">
                            <div class="user-review-body col-lg-12">
                                <div class="user-img-area fl col-lg-3">
                                    <div class="user-img">
                                        <img src="<?php echo base_url(); ?>assets/public/images/user_review/sohan.png" class="img-responsive">
                                    </div>
                                </div>
                                <div class="col-lg-9  user-comment">
                                    <span class="fa fa-quote-left fa-2x ">&nbsp;</span>
                                    <h4 class="fix" style="padding:0px 15px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, Lorem ipsum dolor sit amet, </h4>
                                    <span class="fa fa-quote-right fa-2x fr" style="margin:0px 0px 0px 0px;"></span>
                                    <div class="col-lg-12" style="text-align:right;">
                                        <span class="fa fa-minus"></span>   
                                        <h4 class="fr" style="margin:0px 40px 0px 0px;">&nbsp;&nbsp;Jhone Doe</h4>
                                    </div>                                                   
                                </div>
                            </div>
                        </div>
                    </div>
                    <div data-p="112.50" style="display: none;">
                        <div class="user-review ">
                            <div class="user-review-body col-lg-12">
                                <div class="user-img-area fl col-lg-3">
                                    <div class="user-img">
                                        <img src="<?php echo base_url(); ?>assets/public/images/user_review/sohan.png" class="img-responsive">
                                    </div>
                                </div>
                                <div class="col-lg-9  user-comment">
                                    <span class="fa fa-quote-left fa-2x">&nbsp;</span>
                                    <h4 class="fix" style="padding:0px 15px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, Lorem ipsum dolor sit amet, </h4>
                                    <span class="fa fa-quote-right fa-2x fr" style="margin:0px 0px 0px 0px;"></span>
                                    <div class="col-lg-12" style="text-align:right;">
                                        <span class="fa fa-minus"></span>   
                                        <h4 class="fr" style="margin:0px 40px 0px 0px;">&nbsp;&nbsp;Jhone Doe</h4>
                                    </div>                                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <span data-u="arrowleft" class="jssora05l" style="top:45%;left:40%;width:40px;height:40px;" ></span>
                <span data-u="arrowright" class="jssora05r" style="top:45%;right:40%;width:40px;height:40px;"></span>
            </div>
        </div>
    </div>
</section>
<section id="recent-blog">
    <div class="row top-offer">
        <div class="container">
            <div class="section-title text-center">
                <h2 class="color-green">RECENT BLOG POSTS</h2>
                <h4 class="color-orange">NEWS</h4>
            </div>
        </div>
    </div>
</section>
<section id="hotel-gallery">
    <div class="row flex-row">
        <?php
        foreach ($recent_blog as $v_blog) {
            ?>
            <div class="col-lg-5 col-md-5 col-sm-5 hotel-gallery-desc flex-item">
                <div class="section-title">
                    <h2 class="color-green"><?php echo $v_blog->blog_title; ?></h2>
                    <h4><?php echo $v_blog->blog_time; ?> / By <span style="color: #ed6c22"><?php echo $v_blog->admin_name; ?></span></h4>
                </div>
                <p><?php echo $v_blog->blog; ?></p>
            </div>
            <?php
        }
        ?>
        <div class="col-lg-7 col-md-7 col-sm-7 clear-padding flex-item hotel-gallery-img">
            <div id="room-gallery" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#room-gallery" data-slide-to="0" class="active"></li>
                    <li data-target="#room-gallery" data-slide-to="1"></li>
                    <li data-target="#room-gallery" data-slide-to="2"></li>
                    <li data-target="#room-gallery" data-slide-to="3"></li>
                </ol>
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img src="<?php echo base_url(); ?>assets/public/images/slider_image/slider_1.jpg" alt="">
                    </div>
                    <div class="item">
                        <img src="<?php echo base_url(); ?>assets/public/images/slider_image/slider_2.jpg" alt="">
                    </div>
                    <div class="item">
                        <img src="<?php echo base_url(); ?>assets/public/images/slider_image/slider_3.jpg" alt="">
                    </div>
                    <div class="item">
                        <img src="<?php echo base_url(); ?>assets/public/images/slider_image/slider_4.jpg" alt="">
                    </div>
                </div>
                <a class="left carousel-control" href="#room-gallery" role="button" data-slide="prev">
                    <span class="fa fa-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#room-gallery" role="button" data-slide="next">
                    <span class="fa fa-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
</section>
<section id="subscribe">
    <div class="row hotel-subscribe-row">
        <div class="container text-center">
            <div class="section-title">
                <h2 class="color-green">GET IN TOUCH</h2>
                <h4 class="color-orange">SUBSCRIBE</h4>
                <div class="space"></div>

            </div>
            <div class="col-md-8 col-md-offset-2 subscribe-box">
                <form action="<?php echo base_url(); ?>evis_travel/save_subscription" method="POST">
                    <div class="col-md-11 col-sm-11 col-xs-10 clear-padding">
                        <input type="email" name="subscription_email" required class="form-control" required name="email" placeholder="Enter Your Email to Subscribe">
                    </div>
                    <div class="col-md-1 col-sm-1 col-xs-2 clear-padding">
                        <button type="submit" class="subscribe-btn btn"><i class="fa fa-paper-plane"></i></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>