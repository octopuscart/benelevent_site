<!DOCTYPE html>
<html lang="en-US" ng-app="App">

    <!-- Mirrored from asianitbd.com/wp/eventtime/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 10 Jun 2020 11:26:41 GMT -->
    <!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
    <head>
        <!-- Basic -->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Favcon -->
        <link rel="shortcut icon" type="image/png" href="<?php echo base_url(); ?>assets/theme/images/favicon.html">
        <?php
        meta_tags();
        ?>
        <style type="text/css">
            img.wp-smiley,
            img.emoji {
                display: inline !important;
                border: none !important;
                box-shadow: none !important;
                height: 1em !important;
                width: 1em !important;
                margin: 0 .07em !important;
                vertical-align: -0.1em !important;
                background: none !important;
                padding: 0 !important;
            }
        </style>
        <link rel='stylesheet' id='contact-form-7-css'  href='<?php echo base_url(); ?>assets/theme/plugins/contact-form-7/includes/css/stylesa94e.css?ver=4.4.1' type='text/css' media='all' />
        <link rel='stylesheet' id='rs-plugin-settings-css'  href='<?php echo base_url(); ?>assets/theme/plugins/revslider/public/assets/css/settingsc6ac.css?ver=5.1.5' type='text/css' media='all' />
        <link rel='stylesheet' id='eventtime_bootstrap-css'  href='<?php echo base_url(); ?>assets/theme/css/bootstrap.min68a4.css?ver=4.4.22' type='text/css' media='all' />
        <link rel='stylesheet' id='eventtime_fontawesom-css'  href='<?php echo base_url(); ?>assets/theme/css/font-awesome.min68a4.css?ver=4.4.22' type='text/css' media='all' />
        <link rel='stylesheet' id='eventtime_animate-css'  href='<?php echo base_url(); ?>assets/theme/css/animate68a4.css?ver=4.4.22' type='text/css' media='all' />
        <link rel='stylesheet' id='eventtime_hover-css'  href='<?php echo base_url(); ?>assets/theme/css/hover68a4.css?ver=4.4.22' type='text/css' media='all' />
        <link rel='stylesheet' id='eventtime_fancybox-css'  href='<?php echo base_url(); ?>assets/theme/css/jquery.fancybox68a4.css?ver=4.4.22' type='text/css' media='all' />
        <link rel='stylesheet' id='eventtime_bx_slider-css'  href='<?php echo base_url(); ?>assets/theme/css/jquery.bxslider68a4.css?ver=4.4.22' type='text/css' media='all' />
        <link rel='stylesheet' id='eventtime_owl_slider-css'  href='<?php echo base_url(); ?>assets/theme/css/owl.carousel68a4.css?ver=4.4.22' type='text/css' media='all' />
        <link rel='stylesheet' id='eventtime_owl_theme-css'  href='<?php echo base_url(); ?>assets/theme/css/owl.theme.default.min68a4.css?ver=4.4.22' type='text/css' media='all' />
        <link rel='stylesheet' id='eventtime_settings-css'  href='<?php echo base_url(); ?>assets/theme/css/settings68a4.css?ver=4.4.22' type='text/css' media='all' />
        <link rel='stylesheet' id='eventtime_main-style-css'  href='<?php echo base_url(); ?>assets/theme/style68a4.css?ver=4.4.22' type='text/css' media='all' />
        <link rel='stylesheet' id='eventtime_responsive-css'  href='<?php echo base_url(); ?>assets/theme/css/responsive68a4.css?ver=4.4.22' type='text/css' media='all' />
        <link rel='stylesheet' id='eventtime_custom-style-css'  href='<?php echo base_url(); ?>assets/theme/css/custom68a4.css?ver=4.4.22' type='text/css' media='all' />
        <link rel='stylesheet' id='eventtime_custom-style-css'  href='<?php echo base_url(); ?>assets/theme/css/customcss.css' type='text/css' media='all' />
        <link rel='stylesheet' id='carshire-theme-slug-fonts-css'  href='https://fonts.googleapis.com/css?family=Raleway%3A100%2C200%2C300%2C400%2C500%2C600%2C700%2C800%2C900%7COpen+Sans%3A400%2C400italic%2C600%2C300italic%2C300&amp;subset=latin%2Clatin-ext' type='text/css' media='all' />
        <link rel='stylesheet' id='js_composer_front-css'  href='<?php echo base_url(); ?>assets/theme/plugins/js_composer/assets/css/js_composer.minc422.css?ver=4.11.1' type='text/css' media='all' />
        <script type='text/javascript' src='<?php echo base_url(); ?>assets/theme/includes/js/jquery/jqueryc1d8.js?ver=1.11.3'></script>
        <script type='text/javascript' src='<?php echo base_url(); ?>assets/theme/includes/js/jquery/jquery-migrate.min1576.js?ver=1.2.1'></script>
        <script type='text/javascript' src='<?php echo base_url(); ?>assets/theme/plugins/revslider/public/assets/js/jquery.themepunch.tools.minc6ac.js?ver=5.1.5'></script>
        <script type='text/javascript' src='<?php echo base_url(); ?>assets/theme/plugins/revslider/public/assets/js/jquery.themepunch.revolution.minc6ac.js?ver=5.1.5'></script>
        <script type='text/javascript' src='http://maps.google.com/maps/api/js?sensor=true&amp;ver=4.4.22'></script>
        <script type='text/javascript' src='<?php echo base_url(); ?>assets/theme/js/html5shiv68a4.js?ver=4.4.22'></script>
        <script type='text/javascript' src='<?php echo base_url(); ?>assets/theme/js/respond.min68a4.js?ver=4.4.22'></script>
        <script type='text/javascript' src='<?php echo base_url(); ?>assets/theme/js/googlemaps68a4.js?ver=4.4.22'></script>
        <style type="text/css">.recentcomments a{display:inline !important;padding:0 !important;margin:0 !important;}</style>
        <script>
            var App = angular.module('App', []).config(function ($interpolateProvider, $httpProvider) {
                //$interpolateProvider.startSymbol('{$');
                //$interpolateProvider.endSymbol('$}');
                $httpProvider.defaults.headers.common = {};
                $httpProvider.defaults.headers.post = {};
            });
            var baseurl = "<?php echo site_url(); ?>";
            var imageurlg = "<?php echo PRODUCTIMAGELINK; ?>";
            var globlecurrency = "<?php echo globle_currency; ?>";
            var avaiblecredits = 0;
        </script>
    </head>
    <body class="home page page-id-10 page-template page-template-tpl-visual_composer page-template-tpl-visual_composer-php wpb-js-composer js-comp-ver-4.11.1 vc_responsive">
        <div class="page-wraper">

            <!-- #header -->
            <header id="header" class="gradient-overlay">
                <div class="container">
                    <div class="row">
                        <!-- .logo -->
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 logo">
                            <a href="<?php echo site_url("/")?>"><img class="img-responsive" src="<?php echo base_url(); ?>assets/theme/img/resources/logo.png" alt="image"></a>
                        </div>
                        <!-- /.logo -->

                        <!-- .mainmenu-container -->
                        <nav class="col-lg-9 col-md-9 col-sm-6 col-xs-6 mainmenu-container">
                            <button class="nav-toggler">Navigation <i class="fa fa-bars"></i></button>		
                            <ul class="mainmenu clearfix">
                                <?php
                             
                                  include('menu.php');
                                foreach ($menuArrayMain as $key => $value) {
                                    ?>
                                    <li id="menu-item-250" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-250 active"><a title="EVENT" href="<?php echo $value['link'];?>" class="hvr-underline-from-left1" data-scroll data-options="easing: easeOutQuart"><?php echo $value['title'];?></a></li>
                                    <?php
                                }
                                ?>
                            </ul>
                        </nav>
                        <!-- /.mainmenu-container -->
                    </div>
                </div>
            </header>
            <!--sweet alert-->
            <script src="<?php echo base_url(); ?>assets/theme2/sweetalert/sweetalert2.min.js"></script>
            <link rel="stylesheet" href="<?php echo base_url(); ?>assets/theme/sweetalert2/sweetalert2.min.css">

            <script src="<?php echo base_url(); ?>assets/theme/angular/angular.min.js"></script>



            <style>
                /* Page Loader CSS */
                .css3-spinner:before,.pizza .slice:after,.pizza .slice:before{content:''}.css3-spinner{height:100vh;-webkit-box-align:center;-ms-flex-align:center;align-items:center;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;background:#FFF}.css3-spinner:before{position:absolute;top:50%;left:50%;-webkit-transform:translateX(-50%) translateY(-50%);transform:translateX(-50%) translateY(-50%);width:15vmin;height:2vmin;background:#DDD;margin-top:17.5vmin;-webkit-filter:blur(10px);filter:blur(10px);border-radius:100%}.pizza{height:20vmin;width:20vmin;-webkit-box-align:center;-ms-flex-align:center;align-items:center;background:0 0;position:relative;-webkit-animation:rotate 13s linear infinite;animation:rotate 13s linear infinite}@-webkit-keyframes rotate{to{-webkit-transform:rotate(360deg);transform:rotate(360deg)}}@keyframes rotate{to{-webkit-transform:rotate(360deg);transform:rotate(360deg)}}.pizza .slice{z-index:-1;overflow:visible;position:absolute;width:0;height:0;border-style:solid;border-width:10vmin 2.75vmin 0;border-color:#ffdc73 transparent transparent;left:7.5vmin;top:0;-webkit-transform-origin:50% 100%;transform-origin:50% 100%;-webkit-transform:rotate(0);transform:rotate(0);-webkit-animation:loading 1.8125s ease-in-out infinite;animation:loading 1.8125s ease-in-out infinite}@-webkit-keyframes loading{0%,100%,49%{opacity:1}50%,99%{opacity:0}}@keyframes loading{0%,100%,49%{opacity:1}50%,99%{opacity:0}}.pizza .slice:nth-of-type(2n):after{box-shadow:.5vmin 2.5vmin 0 #cc333f}.pizza .slice:nth-of-type(4n):after{box-shadow:.5vmin 2.5vmin 0 #cc333f,1.5vmin 5vmin 0 #cc333f}.pizza .slice:nth-of-type(1){-webkit-transform:rotate(-27.75deg);transform:rotate(-27.75deg);-webkit-animation-delay:-62.5ms;animation-delay:-62.5ms}.pizza .slice:nth-of-type(2){-webkit-transform:rotate(-55.5deg);transform:rotate(-55.5deg);-webkit-animation-delay:-125ms;animation-delay:-125ms}.pizza .slice:nth-of-type(3){-webkit-transform:rotate(-83.25deg);transform:rotate(-83.25deg);-webkit-animation-delay:-.1875s;animation-delay:-.1875s}.pizza .slice:nth-of-type(4){-webkit-transform:rotate(-111deg);transform:rotate(-111deg);-webkit-animation-delay:-.25s;animation-delay:-.25s}.pizza .slice:nth-of-type(5){-webkit-transform:rotate(-138.75deg);transform:rotate(-138.75deg);-webkit-animation-delay:-.3125s;animation-delay:-.3125s}.pizza .slice:nth-of-type(6){-webkit-transform:rotate(-166.5deg);transform:rotate(-166.5deg);-webkit-animation-delay:-375ms;animation-delay:-375ms}.pizza .slice:nth-of-type(7){-webkit-transform:rotate(-194.25deg);transform:rotate(-194.25deg);-webkit-animation-delay:-.4375s;animation-delay:-.4375s}.pizza .slice:nth-of-type(8){-webkit-transform:rotate(-222deg);transform:rotate(-222deg);-webkit-animation-delay:-.5s;animation-delay:-.5s}.pizza .slice:nth-of-type(9){-webkit-transform:rotate(-249.75deg);transform:rotate(-249.75deg);-webkit-animation-delay:-.5625s;animation-delay:-.5625s}.pizza .slice:nth-of-type(10){-webkit-transform:rotate(-277.5deg);transform:rotate(-277.5deg);-webkit-animation-delay:-625ms;animation-delay:-625ms}.pizza .slice:nth-of-type(11){-webkit-transform:rotate(-305.25deg);transform:rotate(-305.25deg);-webkit-animation-delay:-.6875s;animation-delay:-.6875s}.pizza .slice:nth-of-type(12){-webkit-transform:rotate(-333deg);transform:rotate(-333deg);-webkit-animation-delay:-.75s;animation-delay:-.75s}.pizza .slice:before{position:absolute;height:1.5vmin;width:6vmin;background:#bbb083;top:-10.5vmin;left:-3vmin;border-radius:100vmin 100vmin .5vmin .5vmin/50vmin}.pizza .slice:after{border-radius:100%;position:absolute;width:1.25vmin;height:1.25vmin;background:#cc333f;left:-1vmin;top:-7vmin;z-index:2}
            </style>
        </head>