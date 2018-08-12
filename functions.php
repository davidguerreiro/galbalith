<?php
/**
 * Main functions theme file
 * 
 * @package galbalith
 */


 /**
  * Load css and js
  *
  * @return void
  */
  function g_enqueue_scripts() {
    $version = intval( date('s') ) * rand( 1, 99999 );
    wp_enqueue_style( '_theme-style', get_template_directory_uri() . '/css/style.css', array(), $version, 'all' );
  }

  add_action( 'wp_enqueue_scripts', 'g_enqueue_scripts' );