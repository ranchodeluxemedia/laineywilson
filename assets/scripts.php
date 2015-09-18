<?php 

/*********************
SCRIPTS & ENQUEUEING
*********************/

// loading modernizr and jquery, and reply script
function bones_scripts_and_styles() {

  global $wp_styles; 

  if (!is_admin()) {

    
    wp_register_script( 'modernizr', get_stylesheet_directory_uri() . '/assets/js/libs/modernizr.custom.min.js', array(), '2.5.3', false );
    wp_register_script( 'angular', get_stylesheet_directory_uri() . '/bower_components/angular/angular.min.js', array(), '', false );
    wp_register_script( 'plangular', get_stylesheet_directory_uri() . '/bower_components/plangular/dist/plangular.min.js', array(), '', false );
    wp_register_script( 'geomicons', get_stylesheet_directory_uri() . '/bower_components/geomicons-open/dist/geomicons.min.js', array(), '', false );
    
    wp_register_script( 'soundcloud-audio', get_stylesheet_directory_uri() . '/assets/js/libs/soundcloud-audio.min.js', array(), '', false );
    wp_register_script( 'tabby', get_stylesheet_directory_uri() . '/assets/js/libs/tabby.min.js', array(), '', false );

    wp_register_style( 'bones-stylesheet', get_stylesheet_directory_uri() . '/assets/css/style.css', array(), '', 'all' );
    wp_register_style( 'geomicons-css', get_stylesheet_directory_uri() . '/bower_components/geomicons-open/dist/geomicons.css', array(), '', 'all' );
    wp_register_style( 'bones-ie-only', get_stylesheet_directory_uri() . '/assets/css/ie.css', array(), '' );


    if ( is_singular() AND comments_open() AND (get_option('thread_comments') == 1)) {
      wp_enqueue_script( 'comment-reply' );
    }

    wp_register_script( 'bones-js', get_stylesheet_directory_uri() . '/assets/js/scripts.js', array( 'jquery' ), '', true );
    wp_register_script( 'readmorejs', get_stylesheet_directory_uri() . '/assets/js/libs/readmore.min.js', array( 'jquery' ), '', true );
    wp_register_script( 'backstretch', get_stylesheet_directory_uri() . '/assets/js/libs/backstretch.min.js', array( 'jquery' ), '', true );
    wp_register_script( 'instafeed', get_stylesheet_directory_uri() . '/assets/js/libs/instafeed.min.js', array( 'jquery' ), '', true );
    wp_register_script( 'soundcloud', get_stylesheet_directory_uri() . '/assets/js/libs/scPlayer.js', array( '' ), '', false );
    wp_register_script( 'slicknav', '//cdnjs.cloudflare.com/ajax/libs/SlickNav/1.0.4/jquery.slicknav.min.js', array( 'jquery' ), '', true );

    wp_enqueue_script( 'modernizr' );
    wp_enqueue_script( 'angular' );
    wp_enqueue_script( 'plangular' );
    wp_enqueue_script( 'geomicons' );
    wp_enqueue_script( 'soundcloud-audio' );
    wp_enqueue_script( 'tabby' );
    wp_enqueue_style( 'bones-stylesheet' );
    wp_enqueue_style( 'geomicons-css' );
    wp_enqueue_style( 'bones-ie-only' );

    $wp_styles->add_data( 'bones-ie-only', 'conditional', 'lt IE 9' ); // add conditional wrapper around ie stylesheet

    /*
    I recommend using a plugin to call jQuery
    using the google cdn. That way it stays cached
    and your site will load faster.
    */
    wp_enqueue_script( 'jquery' );
    wp_enqueue_script( 'readmorejs' );
    wp_enqueue_script( 'backstretch' );
    wp_enqueue_script( 'instafeed' );
    wp_enqueue_script( 'soundcloud' );
    wp_enqueue_script( 'slicknav' );
    wp_enqueue_script( 'bones-js' );

  }
}

 ?>