<?php
  global $TEDxMenus;
  $template_directory = get_template_directory_uri();
?>
<!doctype html>
<!--
 
       _____ ___________      _____ _           _   _   
      |_   _|  ___|  _  \    /  __ \ |         | | | |  
        | | | |__ | | | |_  _| /  \/ |__   __ _| |_| |_ 
        | | |  __|| | | \ \/ / |   | '_ \ / _` | __| __|
        | | | |___| |/ / >  <| \__/\ | | | (_| | |_| |_ 
        \_/ \____/|___/ /_/\_\\____/_| |_|\__,_|\__|\__|
                                                                                   
                                                                                   
###############################################################
#              Welcome to TEDxChattanooga.com!                # 
#              Follow us on Twitter @TEDxChatt                #
#          Like us on Facebook.com/TEDxChattanooga            #
###############################################################

-->
<html <?php language_attributes(); ?> class="no-js" ng-app="TEDxTheme">
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php wp_title(''); ?>></title>
  <link href="//www.google-analytics.com" rel="dns-prefetch">
  <link href="//code.jquery.com" rel="dns-prefetch">
  <link href="//fonts.googleapis.com" rel="dns-prefetch">
  <link href="//d3cy3tcndbcsij.cloudfront.net" rel="dns-prefetch">

  <!-- Favicons -->
	<link rel="shortcut icon" href="<?= $template_directory; ?>/assets/img/favicons/favicon.ico" type="image/x-icon" />
	<link rel="apple-touch-icon" sizes="57x57" href="<?= $template_directory; ?>/assets/img/favicons/apple-touch-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="<?= $template_directory; ?>/assets/img/favicons/apple-touch-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="<?= $template_directory; ?>/assets/img/favicons/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="<?= $template_directory; ?>/assets/img/favicons/apple-touch-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="<?= $template_directory; ?>/assets/img/favicons/apple-touch-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="<?= $template_directory; ?>/assets/img/favicons/apple-touch-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="<?= $template_directory; ?>/assets/img/favicons/apple-touch-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="<?= $template_directory; ?>/assets/img/favicons/apple-touch-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="<?= $template_directory; ?>/assets/img/favicons/apple-touch-icon-180x180.png">
	<link rel="icon" type="image/png" href="<?= $template_directory; ?>/assets/img/favicons/favicon-16x16.png" sizes="16x16">
	<link rel="icon" type="image/png" href="<?= $template_directory; ?>/assets/img/favicons/favicon-32x32.png" sizes="32x32">
	<link rel="icon" type="image/png" href="<?= $template_directory; ?>/assets/img/favicons/favicon-96x96.png" sizes="96x96">
	<link rel="icon" type="image/png" href="<?= $template_directory; ?>/assets/img/favicons/android-chrome-192x192.png" sizes="192x192">
	<meta name="msapplication-square70x70logo" content="<?= $template_directory; ?>/assets/img/favicons/smalltile.png" />
	<meta name="msapplication-square150x150logo" content="<?= $template_directory; ?>/assets/img/favicons/mediumtile.png" />
	<meta name="msapplication-wide310x150logo" content="<?= $template_directory; ?>/assets/img/favicons/widetile.png" />
	<meta name="msapplication-square310x310logo" content="<?= $template_directory; ?>/assets/img/favicons/largetile.png" />

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	
<a class="skip-main" tabindex="1" href="#content"><strong>Skip to:&nbsp;</strong><?php wp_title(''); ?>&nbsp;&rarr;</a>

<div id="fb-root"></div>
	<script>
	  window.fbAsyncInit = function() {
	    FB._https = true;
	    FB.init({
	      appId      : '935747023150293',
	      xfbml      : true,
	      version    : 'v2.4'
	    });
	  };
	
	  (function(d, s, id){
	     var js, fjs = d.getElementsByTagName(s)[0];
	     if (d.getElementById(id)) {return;}
	     js = d.createElement(s); js.id = id;
	     js.src = "//connect.facebook.net/en_US/sdk.js";
	     fjs.parentNode.insertBefore(js, fjs);
	   }(document, 'script', 'facebook-jssdk'));
	</script>

  <div class="black-bg">
    <div class="container">
      <header>

        <div class="row">
          <div class="col-lg-9 col-md-8 col-sm-7 hidden-xs">
            <a href="<?= get_theme_mod('logo_link', '/'); ?>">
              <?php (get_theme_mod('logo')) ? $logo = get_theme_mod('logo') : $logo = 'https://placehold.it/540x84.png' ?>
              <img src="<?= $logo ?>" width="540" height="auto" alt="TEDxChattanooga" class="header-wordmark pull-left">
            </a>
            <div class="header-date-location pull-left">
              <time class="date" datetime="2014-10-02"><?= get_theme_mod('event_date', 'Event Date') ?></time>
              <span class="location"><?= get_theme_mod('event_location', 'Event Location') ?></span>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-sm-5 hidden-xs">
            <div class="call-to-action">

              <?php $button_callout_text = get_theme_mod('button_callout_text', 'CTA');?>

              <?php if(!empty($button_callout_text)): ?>
              <a href="<?= get_theme_mod('button_callout_link', '/'); ?>" class="btn btn-danger pull-right"><?= $button_callout_text ?></a>
              <?php endif;?>
              <span class="copy pull-right clear"><?= get_theme_mod('header_callout', 'Header Callout') ?></span>
            </div>
          </div>
        </div><!-- .row -->

        <nav class="primary-nav" ng-controller="NavCtrl" ng-class="{'mobile-visible': isVisible}">
          <div class="toggle visible-xs " ng-click="toggleMenu()"><img src="<?= $logo ?>"  width="77%" alt=" TEDxChattanooga"><i class="fa fa-navicon fa-lg pull-right"></i></div>
          <?= $TEDxMenus->primary_nav(); ?>
          <div class="hidden-xs hidden-sm hidden-md hidden-lg"><?= get_theme_mod('event_location', 'Event Location') ?></div>
          
          <div class="hidden-xs hidden-sm hidden-md hidden-lg">
	          <?php $button_callout_text = get_theme_mod('button_callout_text', 'CTA');?>

              <?php if(!empty($button_callout_text)): ?>
              <a href="<?= get_theme_mod('button_callout_link', '/'); ?>" class="btn btn-danger pull-right"><?= $button_callout_text ?></a>
              <?php endif;?>
              <span class="copy pull-right clear"><?= get_theme_mod('header_callout', 'Header Callout') ?></span>
              </div>
          
        </nav>

          <div class="col-xs-12 visible-xs text-center">
		  	<div class="small-time">
              <time datetime="2016-02-11"><?= get_theme_mod('event_date', 'Event Date') ?>&nbsp;|&nbsp;</time>
              <?= get_theme_mod('event_location', 'Event Location') ?><br />
              <?= get_theme_mod('header_callout', 'Header Callout') ?><?php $button_callout_text = get_theme_mod('button_callout_text', 'CTA');?>
              <?php if(!empty($button_callout_text)): ?>
              <a href="<?= get_theme_mod('button_callout_link', '/'); ?>"><?= $button_callout_text ?>&nbsp;&rarr;</a>
              <?php endif;?>
		  	</div>
              

          </div>

      </header>

    </div>
  </div><!-- .black-bg -->

  <?php if($TEDxMenus->show_secondary_nav()): ?>
    <div class="primary-nav-secondary-container">
      <div class="container ">
        <nav class="primary-nav-secondary">
          <?= $TEDxMenus->secondary_nav(); ?>
        </nav>
      </div>
    </div>
  <?php endif; ?>
