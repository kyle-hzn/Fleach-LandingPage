<?php
add_action( 'init', 'pp_menu' );


function pp_menu() {
  add_theme_support( 'main-menu' );
  register_nav_menu( 'header', 'Menu entête' );
  register_nav_menu( 'footer', 'Menu bas de page' );
}