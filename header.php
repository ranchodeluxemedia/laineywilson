<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

	<head>
		<meta charset="utf-8">

		<?php // force Internet Explorer to use the latest rendering engine available ?>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<title><?php wp_title(''); ?></title>

		<?php // mobile meta (hooray!) ?>
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1"/>

		<?php // icons & favicons (for more: http://www.jonathantneal.com/blog/understand-the-favicon/) ?>
		<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/apple-touch-icon.png">
		<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
		<!--[if IE]>
			<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
		<![endif]-->
		<?php // or, set /favicon.ico for IE10 win ?>
		<meta name="msapplication-TileColor" content="#f01d4f">
		<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/assets/images/win8-tile-icon.png">
            <meta name="theme-color" content="#121212">

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    

		<?php // wordpress head functions ?>
		<?php wp_head(); ?>
		<?php // end of wordpress head ?>

		<?php // drop Google Analytics Here ?>
		<?php // end analytics ?>

	</head>

	<body <?php body_class(); ?> itemscope itemtype="http://schema.org/WebPage" ng-app="app">

  <script>
  var app = angular.module('app', ['plangular'])
    .config(function(plangularConfigProvider){
      plangularConfigProvider.clientId = '907a5e05cc762d441c0229e4eff2a408'
    });
  </script>
  <script>
    var icons = document.querySelectorAll('.js-geomicon');
    geomicons.inject(icons);
  </script>

		<div id="container">

			<header class="header" role="banner" itemscope itemtype="http://schema.org/WPHeader">

        <!-- Start Topbar Header -->
        <div id="topbar" class="cf">
          <div id="inner-topbar" class="wrap cf">
            <div id="topbar-first" class="grid-3 first cf audio-player" plangular="https://soundcloud.com/chriscanterbury/sets/the-other-side-ep">
            <span><a ng-click="playPause(index)">
              <i ng-if="player.playing !== track.src" class="fa fa-play"></i>
              <i ng-if="player.playing === track.src" class="fa fa-pause"></i>
            </a></span>
            <span><a ng-click="next()"><i class="fa fa-forward"></i></a></span>
            <span style="font-family: 'ambroise-std';">{{ track.title }} - {{ currentTime | hhmmss}} | {{ duration | hhmmss }} </span>
            
            </div>
            
            <div id="topbar-last" class="grid-3 last cf">
              <span>CLick here for social media!</span>
            </div>
          </div>
        </div>

				<div id="inner-header" class="wrap cf">

					<?php // to use a image just replace the bloginfo('name') with your img src and remove the surrounding <p> ?>
					
         <div id="logo" class="cf">
           <img src="<?php echo get_template_directory_uri(); ?>/assets/images/siteLogo.png">
         </div>           


					<?php // if you'd like to use the site description you can un-comment it below ?>
					<?php // bloginfo('description'); ?>

          <div class="navbar">
            <ul id="menu">
              <li><a href="<?php bloginfo('url'); ?>/">Home</a></li>
              <li><a href="<?php bloginfo('url'); ?>/bio">Bio</a></li>
              <li><a href="<?php bloginfo('url'); ?>/shows">Shows</a></li>
              <li><a href="<?php bloginfo('url'); ?>/media">Media</a></li>
              <li><a href="<?php bloginfo('url'); ?>/music">Music</a></li>
              <li><a href="<?php bloginfo('url'); ?>/store">Store</a></li>
              <!-- <li><a href="<?php // bloginfo('url'); ?>/connect">Connect</a></li> -->
              <li><a href="<?php bloginfo('url'); ?>/contact">Contact</a></li>
            </ul>
          </div>

				</div>


			</header>
      <div class="header-border"></div>

            <?php if (is_front_page()) { ?>

            <div class="slider">
                <?php echo get_new_royalslider(1); ?>
            </div>

            <?php } ?>
