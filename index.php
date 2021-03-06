﻿<?php
	$page_title = "miNote | Home";
    require_once '_inc/includes/page_head.php';
    require_once '_inc/includes/account_modals.php';

?>
<body class="no-page-top">
    <!---navigation -->
        <?php

            require_once '_inc/includes/navigation.php';

        ?>
    <!--end navigation -->

    <div id="container">

        <!--hero slider -->
            <?php

                require_once '_inc/includes/hero_slider.php';

             ?>
        <!-- end hero slider -->

        <div class="v-page-wrap no-bottom-spacing">

            <div class="container">
                <div class="v-spacer col-sm-12 v-height-small"></div>
            </div>

            <!-- features area-->
            
            <?php 
            	require_once '_inc/includes/features.php';
            ?>
            <!-- end features area -->

            <div class="container">
                <div class="v-spacer col-sm-12 v-height-standard"></div>
            </div>

            <!--Why Us-->
            <div class="v-parallax v-bg-stylish v-bg-stylish-v4 no-shadow" id="why-us">
                <div class="container">
                    <div class="row app-brief">
                        <div class="col-sm-6">
                            <img class="img-responsive phone-image v-animation" data-animation="fade-from-left" data-delay="250" src="img/landing/2-iphone-left.png" />
                        </div>

                        <div class="col-sm-6">
                            <p class="v-smash-text-large-2x pull-top">
                                <span>Explain why it's best</span>
                            </p>
                            <div class="horizontal-break left"></div>
                            <p class="v-lead">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                                labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                                laboris nisi ut aliquip ex ea commodo consequat.
                            </p>

                            <div class="v-spacer col-sm-12 v-height-small"></div>

                            <ul class="v-list-v2">
                                <li class="v-animation" data-animation="fade-from-right" data-delay="150"><i class="fa fa-check"></i><span class="v-lead">Simple & with endless possibilties.</span></li>
                                <li class="v-animation" data-animation="fade-from-right" data-delay="300"><i class="fa fa-check"></i><span class="v-lead">Everything is perfectly orgainized for future.</span></li>
                                <li class="v-animation" data-animation="fade-from-right" data-delay="450"><i class="fa fa-check"></i><span class="v-lead">Sliders give you the opportunity to showcase.</span></li>
                                <li class="v-animation" data-animation="fade-from-right" data-delay="600"><i class="fa fa-check"></i><span class="v-lead">Multiple layout for home pages, portfolio & blog.</span></li>
                                <li class="v-animation" data-animation="fade-from-right" data-delay="750"><i class="fa fa-check"></i><span class="v-lead">The best way to grow your business</span></li>
                                <li class="v-animation" data-animation="fade-from-right" data-delay="900"><i class="fa fa-check"></i><span class="v-lead">Lorem ipsum dolor sit amet, consectetur.</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Why Us-->

            <!--Describe-->
            <div class="v-parallax v-bg-stylish" id="describe">
                <div class="container">
                    <div class="row app-brief">
                        <div class="col-sm-6">
                            <p class="v-smash-text-large-2x pull-top">
                                <span>Great way to describe your app</span>
                            </p>
                            <div class="horizontal-break left"></div>
                            <p class="v-lead">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                            </p>

                            <p class="v-lead">
                                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                            </p>
                        </div>

                        <div class="col-sm-6">
                            <img class="img-responsive phone-image v-animation" data-animation="fade-from-right" data-delay="300" src="img/landing/2-iphone-right.png" />
                        </div>
                    </div>
                </div>
            </div>
            <!--End Describe-->

            <!--Services-->
            <div class="v-parallax v-parallax-video v-bg-stylish" id="services" style="background-image: url(img/slider/slider4.jpg);">
                <div class="container">
                    <div class="row">

                        <div class="col-sm-4">
                            <div class="feature-box feature-box-secundary-one v-animation" data-animation="grow" data-delay="0">
                                <div class="feature-box-icon small">
                                    <i class="fa fa-laptop v-icon"></i>
                                </div>
                                <div class="feature-box-text clearfix">
                                    <h3>Incredibly Responsive</h3>
                                    <div class="feature-box-text-inner">
                                        <p>
                                            Class aptent taciti sociosqu ad litora torquent per conubia nostra,
                                                    per inceptos himenaeos. Nulla nunc dui, tristique in semper vel.
                                        </p>

                                        <a href="#" class="read-more">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="feature-box feature-box-secundary-one v-animation" data-animation="grow" data-delay="200">
                                <div class="feature-box-icon small">
                                    <i class="fa fa-leaf v-icon"></i>
                                </div>
                                <div class="feature-box-text">
                                    <h3>Fully Customizible</h3>
                                    <div class="feature-box-text-inner">
                                        <p>
                                            Class aptent taciti sociosqu ad litora torquent per conubia nostra,
                                                    per inceptos himenaeos. Nulla nunc dui, tristique in semper vel.<br />
                                        </p>
                                        <a href="#" class="read-more">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="feature-box feature-box-secundary-one v-animation" data-animation="grow" data-delay="400">
                                <div class="feature-box-icon small">
                                    <i class="fa fa-scissors v-icon"></i>
                                </div>
                                <div class="feature-box-text">
                                    <h3>Interactive Elements</h3>
                                    <div class="feature-box-text-inner">
                                        <p>
                                            Class aptent taciti sociosqu ad litora torquent per conubia nostra,
                                                    per inceptos himenaeos. Nulla nunc dui, tristique in semper vel.<br />
                                        </p>
                                        <a href="#" class="read-more">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="v-bg-overlay overlay-colored"></div>
                    </div>
                </div>
            </div>
            <!--End Services-->

            <div class="container">
                <div class="v-spacer col-sm-12 v-height-big"></div>
            </div>

            <div class="container">
                <div class="row center v-counter-wrap">
                    <div class="col-sm-3">
                        <i class="fa fa-building v-icon icn-holder"></i>
                        <div class="v-counter">
                            <div class="count-number" data-from="0" data-to="6218" data-speed="1000" data-refresh-interval="25"></div>
                            <div class="count-divider"><span></span></div>
                            <h6 class="v-counter-text">Line Of Code Written</h6>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <i class="fa fa-flash v-icon icn-holder"></i>
                        <div class="v-counter">
                            <div class="count-number" data-from="0" data-to="1448" data-speed="1500" data-refresh-interval="25"></div>
                            <div class="count-divider"><span></span></div>
                            <h6 class="v-counter-text">Cups Of Coffee</h6>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <i class="fa fa-laptop v-icon icn-holder"></i>
                        <div class="v-counter">
                            <div class="count-number" data-from="0" data-to="2650" data-speed="2000" data-refresh-interval="25"></div>
                            <div class="count-divider"><span></span></div>
                            <h6 class="v-counter-text">Fineshed Projects</h6>
                        </div>
                    </div>

                    <div class="col-sm-3">
                        <i class="fa fa-umbrella v-icon icn-holder"></i>
                        <div class="v-counter">
                            <div class="count-number" data-from="0" data-to="5265" data-speed="2500" data-refresh-interval="25"></div>
                            <div class="count-divider"><span></span></div>
                            <h6 class="v-counter-text">Lorem Input Amet</h6>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="v-spacer col-sm-12 v-height-standard"></div>
            </div>

            <!--Screenshots-->
            <div class="v-parallax v-bg-stylish v-bg-stylish-v4 no-shadow" id="screenshots">
                <div class="container">
                    <div class="row center">
                        <div class="col-sm-12">
                            <p class="v-smash-text-large-2x">
                                <span>Screenshots</span>
                            </p>
                            <div class="horizontal-break"></div>
                            <p class="lead" style="color: #999;">
                                Responsive & optimized for mobile devices.
                            </p>
                        </div>
                        <div class="v-spacer col-sm-12 v-height-standard"></div>
                    </div>

                    <div class="row">
                        <div class="col-sm-12">

                            <div class="carousel-wrap">

                                <div class="owl-carousel" data-plugin-options='{"items": 4, "singleItem": false, "pagination": true}'>
                                    <div class="item">
                                        <figure class="lightbox animated-overlay overlay-alt clearfix">
                                            <img src="img/landing/1.jpg" class="attachment-full">
                                            <a class="view" href="img/landing/1.jpg" rel="image-gallery"></a>
                                            <figcaption>
                                                <div class="thumb-info">
                                                    <h4>Lorem ipsum dolor sit amet.</h4>
                                                    <i class="fa fa-eye"></i>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </div>

                                    <div class="item">
                                        <figure class="lightbox animated-overlay overlay-alt clearfix">
                                            <img src="img/landing/2.jpg" class="attachment-full">
                                            <a class="view" href="img/landing/2.jpg" rel="image-gallery"></a>
                                            <figcaption>
                                                <div class="thumb-info">
                                                    <h4>Lorem ipsum dolor sit amet.</h4>
                                                    <i class="fa fa-eye"></i>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </div>

                                    <div class="item">
                                        <figure class="lightbox animated-overlay overlay-alt clearfix">
                                            <img src="img/landing/3.jpg" class="attachment-full">
                                            <a class="view" href="img/landing/3.jpg" rel="image-gallery"></a>
                                            <figcaption>
                                                <div class="thumb-info">
                                                    <h4>Lorem ipsum dolor sit amet.</h4>
                                                    <i class="fa fa-eye"></i>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </div>

                                    <div class="item">
                                        <figure class="lightbox animated-overlay overlay-alt clearfix">
                                            <img src="img/landing/4.jpg" class="attachment-full">
                                            <a class="view" href="img/landing/4.jpg" rel="image-gallery"></a>
                                            <figcaption>
                                                <div class="thumb-info">
                                                    <h4>Lorem ipsum dolor sit amet.</h4>
                                                    <i class="fa fa-eye"></i>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </div>

                                    <div class="item">
                                        <figure class="lightbox animated-overlay overlay-alt clearfix">
                                            <img src="img/landing/1.jpg" class="attachment-full">
                                            <a class="view" href="img/landing/1.jpg" rel="image-gallery"></a>
                                            <figcaption>
                                                <div class="thumb-info">
                                                    <h4>Lorem ipsum dolor sit amet.</h4>
                                                    <i class="fa fa-eye"></i>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </div>

                                    <div class="item">
                                        <figure class="lightbox animated-overlay overlay-alt clearfix">
                                            <img src="img/landing/2.jpg" class="attachment-full">
                                            <a class="view" href="img/landing/2.jpg" rel="image-gallery"></a>
                                            <figcaption>
                                                <div class="thumb-info">
                                                    <h4>Lorem ipsum dolor sit amet.</h4>
                                                    <i class="fa fa-eye"></i>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Screenshots-->

            <!--Download-->
            <div class="v-parallax v-bg-stylish v-bg-stylish-v10" id="download" style="background-image: url(img/slider/slider4.jpg);">

                <div class="container">
                    <div class="row center">

                        <div class="col-sm-12">

                            <div class="v-content-wrapper">
                                <p class="v-smash-text-large-2x">
                                    <span>Download the app on</span>
                                </p>

                                <div class="v-spacer col-sm-12 v-height-standard"></div>

                                <div id="intro_stores">
                                    <a href="#">
                                        <img src="img/landing/appstore.png" alt="appstore_icon"></a>
                                    <a href="#">
                                        <img src="img/landing/google.png" alt="google_icon"></a>
                                    <a href="#">
                                        <img src="img/landing/amazon.png" alt="amazon_icon"></a>
                                </div>

                                <div class="v-spacer col-sm-12 v-height-big"></div>

                                <p class="v-smash-text-large-2x">
                                    <span>Subscribe Now!</span>
                                </p>

                                <div class="v-spacer col-sm-12 v-height-small"></div>

                                <form class="subscription-form form-inline">

                                    <input type="email" name="EMAIL" placeholder="Your Email" class="subscriber-email form-control input-box">
                                    <a href="#" type="submit" class="subscriber-button btn v-btn v-medium-button no-three-d v-belize-hole"><i class="fa fa-fire"></i>Subscribe</a>
                                </form>
                            </div>

                        </div>

                        <div class="v-bg-overlay overlay-colored"></div>
                    </div>
                </div>
            </div>
            <!--End Download-->

            <!--Call Us-->
            <div class="v-parallax v-bg-stylish" id="contact-us">
                <div class="container">
                    <div class="row center">
                        <div class="col-sm-8 col-sm-offset-2">
                            <p class="v-smash-text-large-2x">
                                <span>Call us today!</span>
                            </p>
                            <br />
                            <p class="lead" style="color: #999;">
                                +181 500 600 1
                            </p>
                            <div class="horizontal-break"></div>

                            <div class="v-spacer col-sm-12 v-height-small"></div>



                            <form action="#" method="post">
                                <div class="row">
                                    <div class="form-group">
                                        <div class="col-sm-4">
                                            <label>Your name <span class="required">*</span></label>
                                            <input type="text" value="" maxlength="100" class="form-control" name="name" id="name">
                                        </div>
                                        <div class="col-sm-4">
                                            <label>Your email address <span class="required">*</span></label>
                                            <input type="email" value="" maxlength="100" class="form-control" name="email" id="email1">
                                        </div>
                                        <div class="col-sm-4">
                                            <label>Website</label>
                                            <input type="text" value="" maxlength="100" class="form-control" name="website" id="website">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <label>Comment <span class="required">*</span></label>
                                            <textarea maxlength="5000" rows="10" class="form-control" name="comment" id="Textarea1"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <br />
                                        <button name="submit" type="submit" id="sendmesage" class="btn v-btn no-three-d">Send Message</button>
                                    </div>
                                </div>
                            </form> 

                        </div>
                    </div>

                    <div class="row">
                        <div class="v-spacer col-sm-12 v-height-small"></div>
                    </div>

                    <div class="row center">
                        <ul class="social-icons large center">
                            <li class="twitter"><a href="http://www.twitter.com/#" target="_blank"><i class="fa fa-twitter"></i><i class="fa fa-twitter"></i></a></li>
                            <li class="facebook"><a href="#" target="_blank"><i class="fa fa-facebook"></i><i class="fa fa-facebook"></i></a></li>
                            <li class="youtube"><a href="#" target="_blank"><i class="fa fa-youtube"></i><i class="fa fa-youtube"></i></a></li>
                            <li class="vimeo"><a href="http://www.vimeo.com/#" target="_blank"><i class="fa fa-vimeo-square"></i><i class="fa fa-vimeo-square"></i></a></li>
                            <li class="tumblr"><a href="http://tumblr.tumblr.com/" target="_blank"><i class="fa fa-tumblr"></i><i class="fa fa-tumblr"></i></a></li>
                            <li class="skype"><a href="skype:#" target="_blank"><i class="fa fa-skype"></i><i class="fa fa-skype"></i></a></li>
                            <li class="linkedin"><a href="#" target="_blank"><i class="fa fa-linkedin"></i><i class="fa fa-linkedin"></i></a></li>
                            <li class="googleplus"><a href="#" target="_blank"><i class="fa fa-google-plus"></i><i class="fa fa-google-plus"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--End Call Us-->
        </div>

        <!--Footer-Wrap-->
        <div class="footer-wrap">
            <footer>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-5">
                            <section class="widget">
                                <img alt="Venue" src="img/logo-white.png" style="height: 40px; margin-bottom: 20px;">
                                <p class="pull-bottom-small">
                                    Class aptent taciti sociosqu ad litora torquent per conubia nostra,
                                    per inceptos himenaeos. Nulla nunc dui, tristique in semper vel,
                                    congue sed ligula auctor fringill torquent per conubia nostra.
                                    Class aptent taciti sociosqu ad litora conubia nostra.
                                </p>
                                <p>
                                    <a href="page-about-us-2.html">Read More →</a>
                                </p>
                            </section>
                        </div>
                        <div class="col-sm-3">
                            <section class="widget">
                                <div class="widget-heading">
                                    <h4>Contact Us</h4>
                                </div>
                                <div class="footer-contact-info">
                                    <ul>
                                        <li>
                                            <p><i class="fa fa-building"></i>Your Company </p>
                                        </li>
                                        <li>
                                            <p><i class="fa fa-map-marker"></i>1 Liberty St New York, NY 5006 </p>
                                        </li>
                                        <li>
                                            <p><i class="fa fa-envelope"></i><strong>Email:</strong> <a href="mailto:mail@example.com">mail@example.com</a></p>
                                        </li>
                                        <li>
                                            <p><i class="fa fa-phone"></i><strong>Phone:</strong> (123) 456-7890</p>
                                        </li>
                                    </ul>
                                    <br />

                                    <ul class="social-icons standard">
                                        <li class="twitter"><a href="#" target="_blank"><i class="fa fa-twitter"></i><i class="fa fa-twitter"></i></a></li>
                                        <li class="facebook"><a href="#" target="_blank"><i class="fa fa-facebook"></i><i class="fa fa-facebook"></i></a></li>
                                        
                                        <li class="youtube"><a href="#" target="_blank"><i class="fa fa-youtube"></i><i class="fa fa-youtube"></i></a></li>
                                        <li class="googleplus"><a href="#" target="_blank"><i class="fa fa-google-plus"></i><i class="fa fa-google-plus"></i></a></li>
                                    </ul>
                                </div>
                            </section>
                        </div>
 
                        <div class="col-sm-3">
                            <section class="widget">
                                <div class="widget-heading">
                                    <h4>Recent Works</h4>
                                </div>
                                <ul class="portfolio-grid">
                                    <li>
                                        <a href="portfolio-single.html" class="grid-img-wrap">
                                            <img src="img/thumbs/project-1.jpg" />
                                            <span class="tooltip">Phasellus enim libero<span class="arrow"></span></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="portfolio-single.html" class="grid-img-wrap">
                                            <img src="img/thumbs/project-2.jpg" />
                                            <span class="tooltip">Phasellus enim libero<span class="arrow"></span></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="portfolio-single.html" class="grid-img-wrap">
                                            <img src="img/thumbs/project-3.jpg" />
                                            <span class="tooltip">Phasellus enim<span class="arrow"></span></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="portfolio-single.html" class="grid-img-wrap">
                                            <img src="img/thumbs/project-4.png" />
                                            <span class="tooltip">Lorem Imput<span class="arrow"></span></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="portfolio-single.html" class="grid-img-wrap">
                                            <img src="img/thumbs/project-5.jpg" />
                                            <span class="tooltip">Phasellus Enim libero<span class="arrow"></span></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="portfolio-single.html" class="grid-img-wrap">
                                            <img src="img/thumbs/project-6.jpg" />
                                            <span class="tooltip">Phasellus Enim<span class="arrow"></span></span>
                                        </a>
                                    </li>
                                </ul>
                            </section>
                        </div>
                    </div>
                </div>
            </footer>

            <div class="copyright">
                <div class="container">
                    <p>© Copyright <?php echo date("Y"); ?>  by Elegant Code. All Rights Reserved.</p>
                    <nav class="footer-menu std-menu">
                        <ul class="menu">
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Services</a></li>
                            <li><a href="#">Portfolio</a></li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">Contact</a></li>
                            <li><a href="#">Buy Now</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <!--End Footer-Wrap-->
    </div>

    <!--// BACK TO TOP //-->
    <div id="back-to-top" class="animate-top"><i class="fa fa-angle-up"></i></div>

    <!-- Libs -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.flexslider-min.js"></script>
    <script src="js/jquery.easing.js"></script>
    <script src="js/jquery.fitvids.js"></script>
    <script src="js/jquery.carouFredSel.min.js"></script>
    <script src="js/theme-plugins.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/imagesloaded.js"></script>

    <script src="js/view.min.js?auto"></script>

    <script src="plugins/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
    <script src="plugins/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>

    <script src="js/theme-core.js"></script>
    <script src="js/custom.js"></script>
</body>
</html>
