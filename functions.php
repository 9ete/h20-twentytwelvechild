<?php

/*
#
#	REGISTER CUSTOM MENU'S
#
*/

function lowermedia_register_menus() {
  register_nav_menus(
    array(
      'header-topright-menu' => __( 'Header Top Right Menu' ),
      'footer-menu' => __( 'Footer Menu' )
    )
  );
}
add_action( 'init', 'lowermedia_register_menus' );

/*
#
#	REGISTER CUSTOM JS
#
*/

function lowermedia_scripts() {
    wp_enqueue_script(
        'custom-script',
        get_stylesheet_directory_uri() . '/lowermedia_js/device-nav.js',
        array( 'jquery' )
    );
}

add_action( 'wp_enqueue_scripts', 'lowermedia_scripts' );