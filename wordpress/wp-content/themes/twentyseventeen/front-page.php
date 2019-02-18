
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <title>EasyWebLearning</title>
        <meta name="description" content="An easy way to learn how to do web programming in South Africa. We aim to teach kids, parents and siblings to learn to code websites and web applications for a very cheap and affordable price.">
        <meta name="keywords" content="South Africa, Learning, Online Education, Web Development, Programming, HTML, CSS, Javascript, Cape Town">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" type="image/png" href="favicon.png"/>

        <!--Google Font link-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,400i,700,700i" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

        <link rel="stylesheet" href="assets/css/slick.css"> 
        <link rel="stylesheet" href="assets/css/slick-theme.css">
        <link rel="stylesheet" href="assets/css/animate.css">
        <link rel="stylesheet" href="assets/css/iconfont.css">
        <!--<link rel="stylesheet" href="assets/css/font-awesome.min.css">-->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
        <link rel="stylesheet" href="assets/css/bootstrap.css">
        <link rel="stylesheet" href="assets/css/magnific-popup.css">
        <link rel="stylesheet" href="assets/css/bootsnav.css">
        <!--For Plugins external css-->
        <link rel="stylesheet" href="assets/css/plugins.css" />
        <!--Theme custom css -->
        <link rel="stylesheet" href="assets/css/style.css">
        <!--Theme Responsive css-->
        <link rel="stylesheet" href="assets/css/responsive.css" />
        <script src="assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>

        <!-- Facebook Pixel Code -->
        <script>
          !function(f,b,e,v,n,t,s)
          {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
          n.callMethod.apply(n,arguments):n.queue.push(arguments)};
          if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
          n.queue=[];t=b.createElement(e);t.async=!0;
          t.src=v;s=b.getElementsByTagName(e)[0];
          s.parentNode.insertBefore(t,s)}(window, document,'script',
          'https://connect.facebook.net/en_US/fbevents.js');
          fbq('init', '288099365236482');
          fbq('track', 'PageView');
        </script>
        <noscript><img height="1" width="1" style="display:none"
          src="https://www.facebook.com/tr?id=288099365236482&ev=PageView&noscript=1"
        /></noscript>
        <!-- End Facebook Pixel Code -->
    </head>

    <body data-spy="scroll" data-target=".navbar-collapse" data-offset="100">

        <style type="text/css">
            #mailpoet_form_1 { display: none }
        </style>

        <?php
            $form_widget = new \MailPoet\Form\Widget();
            echo $form_widget->widget(array('form' => 1, 'form_type' => 'php'));
        ?>

        <!-- Preloader -->
        <div id="loading">
            <div id="loading-center">
                <div id="loading-center-absolute">
                    <div class="object" id="object_one"></div>
                    <div class="object" id="object_two"></div>
                    <div class="object" id="object_three"></div>
                    <div class="object" id="object_four"></div>
                </div>
            </div>
        </div><!--End off Preloader -->
        <div class="culmn">
            <!--Home page style-->
            <nav class="navbar navbar-default bootsnav navbar-fixed no-background white">

                <!-- Start Top Search -->
                <div class="top-search">
                    <div class="container">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-search"></i></span>
                            <input type="text" class="form-control" placeholder="Search">
                            <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
                        </div>
                    </div>
                </div>
                <!-- End Top Search -->

                <div class="container"> 
                    <!-- Start Header Navigation -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                            <i class="fa fa-bars"></i>
                        </button>
                        <a class="navbar-brand" href="#brand">
                            <img src="assets/images/logos/logo_transparent_inverse.png" class="logo" alt="EWL Logo">
                        </a>

                    </div>
                    <!-- End Header Navigation -->

                    <!-- navbar menu -->
                    <div class="collapse navbar-collapse" id="navbar-menu">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="#home">Home</a></li>                    
                            <li><a href="#about">About</a></li>
                            <li><a href="#service">Service</a></li>
                            <!--<li><a href="#portfolio">Portfolio</a></li>
                            <li><a href="#test">Testimonial</a></li>-->
                            <li><a href="#pricing">Pricing</a></li>
                            <li><a href="#contact">Contact</a></li>
                            <li><a href="course-videos/">Course</a></li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div>
            </nav>

            <!--Home Sections-->
            <section id="home" class="home bg-black fix">
                <div class="overlay"></div>
                <div class="container">
                    <div class="row">
                        <div class="main_home text-center">
                            <div class="col-md-12">
                                <div class="close_video">X</div>
                                <iframe class="intro_video" width="560" height="315" src="" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                <div class="hello">
                                    <div class="slid_item">
                                        <div class="home_text ">
                                            <h1 class="text-yellow">Welcome to Easy Web Learning</h1>
                                            <h3 class="text-white text-uppercase">Professional web development training for people who have never coded a website in their lives.</h3>
                                            <!--<a href="#" class="btn btn-primary view_intro_video">View intro video</a>-->
                                        </div>
                                    </div><!-- End off slid item -->

                                </div>
                            </div>
                        </div>
                        <a class="mouse-scroll" href="#about"> 
                            <span class="mouse">
                                <span class="mouse-movement"></span>
                            </span>
                            <span class="mouse-message fadeIn">Explore</span> <br />
                            <!--<i class="fa fa-angle-down m-top-10 fadeIn mouse-message"></i>--> 
                        </a>
                    </div><!--End off row-->
                </div><!--End off container -->
            </section> <!--End off Home Sections-->

            <!--About Us Section-->
            <section id="about" class="features bg-white">
                <div class="container">
                    <div class="row">
                        <div class="main_features fix roomy-70">
                            <div class="col-md-12">
                                <div class="features_item">

                                    <div class="head_title">
                                        <h2 class="text-uppercase">Why teach <strong>web programming?</strong></h2>
                                    </div>
                                    <div class="featured_content">
                                        <p>We <strong>LIVE</strong> and <strong>BREATH</strong> web programming and our mission is to teach as <strong>many people as possible</strong> to code a website.</p>
                                        <p>The demand for web developers is <strong>growing everyday</strong>. We are here to help <strong>you</strong> get on board.</p>
                                    </div>

                                    <div class="head_title">
                                        <h2 class="text-uppercase">Who are <strong>we?</strong></h2>
                                    </div>
                                    <div class="featured_content">
                                        <p><strong>Cape Town South Africa</strong> is where we are at.</p>
                                        <p>With over <strong>15 years of industry experience and expertize</strong>, we've been around the park for a long time.</p> 
                                    </div>

                                    <div class="head_title">
                                        <h2 class="text-uppercase">Why learn with <strong>us?</strong></h2>
                                    </div>
                                    <div class="featured_content">
                                        <p>We believe in learning <strong>with a twist!</strong></p>
                                        <p>So you won't only learn to code websites but also learn about industry trends, the job market, how to make money through websites...</p>
                                        <p>...<strong>WHILE HAVING FUN!...and getting FREE stuff</strong> from time to time (read more below).</p>
                                    </div>                                                                  
                                </div>
                            </div>
                            <!--
                            <div class="col-md-6 col-md-offset-1 sm-m-top-50">
                                <div class="features_item2_area">
                                    <div class="features_item2 text-center">
                                        <div class="divider_horizontal"></div>
                                        <div class="divider_vertical"></div>
                                        <div class="col-xs-6">
                                            <div class="features_item_text">
                                                <img src="assets/images/featured1.jpg" alt="" class="img-circle" />
                                                <p class="m-top-20">Empower Kids</p>
                                            </div>
                                        </div>
                                        <div class="col-xs-6">
                                            <div class="features_item_text">
                                                <img src="assets/images/featured2.jpg" alt="" class="img-circle" />
                                                <p class="m-top-20">Financial Benefits</p>
                                            </div>
                                        </div>
                                        <div class="col-xs-6">
                                            <div class="features_item_text m-top-50">
                                                <img src="assets/images/featured3.jpg" alt="" class="img-circle" />
                                                <p class="m-top-20">Tech know-how</p>
                                            </div>
                                        </div>
                                        <div class="col-xs-6">
                                            <div class="features_item_text m-top-50">
                                                <img src="assets/images/featured4.jpg" alt="" class="img-circle" />
                                                <p class="m-top-20">Demand & Supply</p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            hidden read more content 
                            <div class="readmore-content">
                                When we started this idea a few years ago the dream was to have physical classrooms all over the show...almost like a walk-in building where kids and adults could come and sit at a computer and have experts teach them, while not having to pay an arm and a leg for it. From there the idea ev
                            </div>-->

                        </div>
                    </div><!-- End off row -->
                </div><!-- End off container -->
            </section><!-- End off Featured Section-->

            <!--Choose section-->
            <section id="choose" class="choose bg-grey roomy-80">
                <div class="container">
                    <div class="row">
                        <div class="main_choose">

                            <div class="head_title">
                                <h2 class="text-uppercase">What we <strong>Offer</strong></h2>
                            </div>                            

                            <!--
                            <div class="col-md-6">
                                <div class="choose_mac">
                                    <div class="choose_slide">
                                        <div class="choose_item">
                                            <img src="assets/images/choose-img1.png" alt="" />
                                        </div>
                                        <div class="choose_item">
                                            <img src="assets/images/choose-img1.png" alt="" />
                                        </div>
                                        <div class="choose_item">
                                            <img src="assets/images/choose-img1.png" alt="" />
                                        </div>
                                    </div>
                                </div>
                            </div> End off col-md-6 -->

                            <div class="col-md-6">
                                <div class="choose_content m-top-40">
                                    
                                    <div class="choose_item_text fix">
                                        <h6><i class="fa fa-check-square-o"></i> Easy to understand lessons.</h6>
                                        <p>If you can use a laptop, tablet or cellphone...you are set</p>
                                    </div>
                                    <div class="choose_item_text fix m-top-20">
                                        <h6><i class="fa fa-check-square-o"></i> Not only code.</h6>
                                        <p>Practical info, tips and guidance on everything web. </p>
                                    </div>
                                    <div class="choose_item_text fix m-top-20">
                                        <h6><i class="fa fa-check-square-o"></i> The whole family in one classroom.</h6>
                                        <p>Mom, dad, brother and sister can all learn together. </p>
                                    </div>
                                </div>
                            </div><!-- End off col-md-6 -->


                            <div class="col-md-6">
                                <div class="choose_content m-top-40">
                                    
                                    <div class="choose_item_text fix m-top-20">
                                        <h6><i class="fa fa-check-square-o"></i> Free weekly webinars.</h6>
                                        <p>We provide answers to any web related question you might have on a weekly basis, via a free webinar on our facebook page.</p>
                                    </div>
                                    <div class="choose_item_text fix m-top-20">
                                        <h6><i class="fa fa-check-square-o"></i> We give away free stuff.</h6>
                                        <p>To build and strengthen our relationship with you we give away online shopping vouchers, subscriptions and more, from time to time.</p>
                                    </div>                                                                          
                                    <!--<div class="choose_item_text fix m-top-20">
                                        <h6><i class="fa fa-check-square-o"></i> Cost effective.</h6>
                                        <p>The whole family can learn. </p>
                                    </div>-->
                                </div>
                            </div><!-- End off col-md-6 -->
                        </div>
                    </div><!-- End off row -->
                </div><!-- End off container -->
            </section><!-- End off choose section -->

            <!--Services Section-->
            <section id="service" class="service bg-white roomy-70">
                <div class="container">
                    <div class="row">
                        <div class="main_service">
                            <div class="col-md-6">
                                <div class="service_slid">
                                    <div class="slid_shap bg-yellow"></div>
                                    <div class="service_slid_item text-center">
                                        <div class="service_slid_text">
                                            <span class="icon icon icon-building112 text-black"></span>
                                            <h5 class="text-black m-top-20">HTML</h5>
                                        </div>
                                        <div class="service_slid_text">
                                            <span class="icon icon icon-sports-2 text-black"></span>
                                            <h5 class="text-black m-top-20">CSS</h5>
                                        </div>
                                        <div class="service_slid_text">
                                            <span class="icon icon icon-sports-2 text-black"></span>
                                            <h5 class="text-black m-top-20">JavaScript</h5>
                                        </div>                                        
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5 col-md-offset-1">
                                <div class="service_item sm-m-top-50">
                                    <div class="head_title">
                                        <h2 class="text-uppercase">Our <strong>Service</strong></h2>
                                    </div>
                                    <div class="service_content">
                                        <p>So in a nutshell, we will be teaching you the three basic languages of the web: HTML, CSS and Javascript. We have created short, easy to understand lessons so things remain simple. We not only teach you how to program but also provide industry standard tips, news, guidance and practical ways of using your new found skills to create websites on your own, for fun or for financial gain.</p>

                                        <!--<a href="" class="btn btn-default m-top-40">Read More</a>-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section><!-- End off Business section -->            

            <!--Pricing Section-->
            <section id="pricing" class="about bg-yellow roomy-80">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="main_about text-center">
                                <h1 class="text-black">Check out our free tutorial below</h1>
                                <a href="/course-videos/" class="btn btn-primary m-top-30">View video tutorial</a>
                                <h2 class="text-white m-top-30">- THEN -</h2>
                                <h3 class="text-black text-uppercase">Learn to code for the price of a...</h3>
                                <!--<p class="m-top-30">Pricing will be available soon...watch this space!</p>
                                <a href="/course-videos/" class="btn btn-primary m-top-100">View course content</a>-->

                                <div class="col-md-3 products">
                                    <div class="title text-black">Bread & Milk</div>
                                    <ul>
                                        <li>R55 per month</li>
                                        <li>Access to ALL video content <i class="fas fa-check-circle"></i></li>
                                        <li>Free access to weekly webinar <i class="fas fa-check-circle"></i></li>
                                        <li>&nbsp;</li>
                                        <li>&nbsp;</li>
                                    </ul>
                                    <a href="/membership-account/membership-checkout/?level=1" class="btn btn-secondary">Read more & Subscribe</a>
                                </div>
                                <div class="col-md-3 products">
                                    <div class="title text-black">1 Bag of Shopping</div>
                                    <ul>
                                        <li>R399 ONCE OFF</li>
                                        <li>Access to ALL video content <i class="fas fa-check-circle"></i></li>
                                        <li>Pay ONCE and NEVER again <i class="fas fa-check-circle"></i></li>
                                        <li>Win FREE vouchers <i class="fas fa-check-circle"></i></li>
                                        <li>Free access to weekly webinar <i class="fas fa-check-circle"></i></li>
                                    </ul>
                                    <a href="/membership-account/membership-checkout/?level=2" class="btn btn-secondary">Read more & Buy now</a>                                    
                                </div>
                                <!--
                                <div class="col-md-3 products">
                                    <div class="title text-black">R99 Masterclass</div>
                                    <ul>
                                        <li>Once-off 2 hour lesson <i class="fas fa-check-circle"></i></li>
                                        <li>Lesson available for 24 hours <i class="fas fa-check-circle"></i></li>
                                        <li>Free weekly webinar <i class="fas fa-check-circle"></i></li>
                                        <li>Inc 1 month free subscription <i class="fas fa-check-circle"></i></li>
                                    </ul>
                                    <a href="/membership-account/membership-checkout/?level=3" class="btn btn-secondary">Buy now</a>                                    
                                </div>
                                -->

                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!--Footer Section-->
            <footer id="contact" class="footer action-lage bg-black p-top-80">
                <div class="container">
                    <div class="row">
                        <div class="widget_area">

                            <div class="col-md-3">
                                <div class="widget_item widget_about">
                                    <h5 class="text-white">About Us</h5>
                                    <p class="m-top-30">We are people passionate about web development, aiming to teach as many people possible, about web programming.</p>
                                </div>
                            </div>
 
                            <div class="col-md-3">
                                <div class="widget_item widget_about">
                                    <h5 class="text-white">Email address</h5>
                                    <p class="m-top-30">info@easyweblearning.co.za</p>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="widget_item widget_about">
                                    <h5 class="text-white">Social Media</h5>
                                    <p class="m-top-30"><a href="https://www.facebook.com/Easy-Web-Learning-305871990062611" target="_blank"><img src="assets/images/facebook-icon_cropped.png" alt="Facebook" style="width: 32px"></a></p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="container p-top-40">
                    <a href="/assets/pdf/TermsandConditions.pdf" target="_blank">Terms &amp; Conditions</a>
                </div>
            </footer>
        </div>

        <!-- JS includes -->
        <script src="assets/js/vendor/jquery-1.11.2.min.js"></script>
        <script src="assets/js/vendor/bootstrap.min.js"></script>
        <script src="assets/js/jquery.magnific-popup.js"></script>
        <!--<script src="assets/js/jquery.easypiechart.min.js"></script>-->
        <script src="assets/js/jquery.easing.1.3.js"></script>
        <!--<script src="assets/js/slick.js"></script>-->
        <script src="assets/js/slick.min.js"></script>
        <script src="assets/js/js.isotope.js"></script>
        <script src="assets/js/jquery.collapse.js"></script>
        <script src="assets/js/bootsnav.js"></script>
        <script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>
        <script src="assets/js/plugins.js"></script>
        <script src="assets/js/main.js"></script>
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-132841812-1"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());

          gtag('config', 'UA-132841812-1');
        </script>
    </body>
</html>
