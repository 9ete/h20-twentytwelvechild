<?php

function lowermedia_register_menus() {
  register_nav_menus(
    array(
      'header-topright-menu' => __( 'Header Top Right Menu' ),
      'footer-menu' => __( 'Footer Menu' )
    )
  );
}
add_action( 'init', 'lowermedia_register_menus' );
