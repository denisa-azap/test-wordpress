<?php
function add_theme_scripts() {
 wp_enqueue_style( 'style', get_stylesheet_uri() );
}

add_theme_support( 'custom-logo' );


function register_my_menu() {
  register_nav_menu('footer-menu',__( 'Footer Menu' ));
}
add_action( 'init', 'register_my_menu' );
 ?>
