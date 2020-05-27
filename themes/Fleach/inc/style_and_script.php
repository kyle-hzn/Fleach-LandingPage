<?php
function ajout_scripts() {

    // main.js
    wp_register_script('main_js', JS_URL.'/script.min.js','','1.0',true);
    wp_enqueue_script('main_js');

    // smooth-scroll
    wp_register_script('smooth-scroll', 'https://cdn.jsdelivr.net/gh/cferdinandi/smooth-scroll@14/dist/smooth-scroll.polyfills.min.js');
    wp_enqueue_script('smooth-scroll');  

    // main.css
    wp_register_style( 'main_style', CSS_URL.'/style.min.css' );
    wp_enqueue_style( 'main_style' );

    // wp_enqueue_script( 'google-map', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyDdM_psX423qiTpneGH4iTdqsb6oqb7VqI', array(), '3', true );

    if ( !is_page('Accueil') ) {
        wp_deregister_script( 'address-autocomplete-using-google-place-api' );
    }

}