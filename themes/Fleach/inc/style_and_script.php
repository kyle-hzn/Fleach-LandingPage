<?php
function ajout_scripts() {

    // main.js
    wp_register_script('main_js', JS_URL.'/script.min.js','','1.0',true);
    wp_enqueue_script('main_js');

    // slider
    wp_register_script('simple_slider', 'https://cdnjs.cloudflare.com/ajax/libs/simple-slider/1.0.0/simpleslider.min.js');
    wp_enqueue_script('simple_slider');
   
    // glide js
    wp_register_script('glidejs', 'https://cdn.jsdelivr.net/npm/@glidejs/glide');
    wp_enqueue_script('glidejs');

    // smooth-scroll
    wp_register_script('smooth-scroll', 'https://cdn.jsdelivr.net/gh/cferdinandi/smooth-scroll@14/dist/smooth-scroll.polyfills.min.js');
    wp_enqueue_script('smooth-scroll');  
    
    // Tweenmax
    wp_register_script('tweenmax', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.0/TweenMax.min.js"');
    wp_enqueue_script('tweenmax');

    // // Bootstrap GRID
    // wp_register_style( 'css_grid', CSS_URL.'/bootstrap-grid.min.css' );
    // wp_enqueue_style( 'css_grid' );

    // main.css
    wp_register_style( 'glidecss', 'https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.3.0/css/glide.core.min.css' );
    wp_register_style( 'glidetheme', 'https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.3.0/css/glide.theme.min.css' );
    wp_enqueue_style( 'glidecss' );
    wp_enqueue_style( 'glidetheme' );

    // main.css
    wp_register_style( 'main_style', CSS_URL.'/style.min.css' );
    wp_enqueue_style( 'main_style' );

    if( is_single() && get_post_type()=='ad' ){
        wp_register_script('calculette-one', JS_URL.'/cafpi.js','','1.0',true);
        wp_enqueue_script('calculette-one');
        wp_register_script('js_lightbox', JS_URL.'/fslightbox.min.js','','1.0',true);
        wp_enqueue_script('js_lightbox');
        wp_register_style( 'css_lightbox', CSS_URL.'/fslightbox.min.css' );
        wp_enqueue_style( 'css_lightbox' );
        wp_register_script( 'jquery-lib', 'https://code.jquery.com/jquery-2.2.4.min.js','','1.0',true );
        wp_enqueue_script( 'jquery-lib' );
        wp_register_script( 'jquery-custom', 'https://www.cafpi.fr/plugws/js/jquery-ui-1.12.1.custom.min.js','','1.0',true );
        wp_enqueue_script( 'jquery-custom' );
        wp_register_script( 'jquery-mobile', 'https://www.cafpi.fr/plugws/js/jquery.ui.touch-punch.min.js','','1.0',true );
        wp_enqueue_script( 'jquery-mobile' );
        wp_register_script('calculette', JS_URL.'/cafpi2.js','','1.0',true);
        wp_enqueue_script('calculette');
    }

    // wp_enqueue_script( 'google-map', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyDdM_psX423qiTpneGH4iTdqsb6oqb7VqI', array(), '3', true );

    if ( !is_page('Accueil') ) {
        wp_deregister_script( 'address-autocomplete-using-google-place-api' );
    }

    if(is_page()){
        global $wp_query;
    
            $template_name = get_post_meta( $wp_query->post->ID, '_wp_page_template', true );
        if($template_name == 'home.php'){
           wp_enqueue_script('slider', 'https://cdnjs.cloudflare.com/ajax/libs/simple-slider/1.0.0/simpleslider.min.js');
        }
    }

}

function my_deregister_javascript() {
    if ( !is_page('Vendre mon bien') ) {
     wp_deregister_script( 'address-autocomplete-using-google-place-api' );
      }
 }