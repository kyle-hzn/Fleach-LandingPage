<?php

// Create const, refers to files path
define( 'THEME_PATH',      get_template_directory() );
// define( 'TEMPLATE_PATH',   THEME_PATH.'/templates' );
define( 'THEME_URL',       get_template_directory_uri() );
define( 'CSS_URL',         THEME_URL.'/dist/css' );
define( 'IMAGES_URL',      THEME_URL.'/dist/img' );
define( 'JS_URL',          THEME_URL.'/dist/js' );
define( 'FAVICONS_URL',    THEME_URL.'/dist/favicon' );
// define( 'ADMIN_IMAGES_URL',IMAGES_URL.'/admin' );


foreach ( glob( THEME_PATH . "/inc/*.php" ) as $file ) {
    include_once $file;
}

show_admin_bar(false);

function my_acf_google_map_api( $api ){
	
	$api['key'] = 'AIzaSyDdM_psX423qiTpneGH4iTdqsb6oqb7VqI';
	
	return $api;
	
}

add_filter('acf/fields/google_map/api', 'my_acf_google_map_api');

add_action( 'wp_enqueue_scripts', 'ajout_scripts', 'my_deregister_javascript' );

/*Redirection page 404*/
function page404_redirection()
{
 global $mapage;
 if(is_404())
 {
    wp_redirect(home_url("error-404"));
    exit;
 }
}

function reg_cat() {
    register_taxonomy_for_object_type('category','testimonial');
}
add_action('init', 'reg_cat');
 
add_action('wp', 'page404_redirection',1);
?>
