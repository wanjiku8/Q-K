<?php 

function fn_theme_scripts(){
    wp_enqueue_style("fontawesome", get_template_directory_uri(). '/fontawesome-free-6.5.1-web/css/all.css');

    wp_enqueue_style("custom-style", get_stylesheet_uri());

    wp_enqueue_style("custom-responsiveness", get_template_directory_uri(). "/css/bootstrap.min.css");
   
    
}

add_action("wp_enqueue_scripts","fn_theme_scripts");

function addjs() {
  
 
    wp_deregister_script( 'jquery');
    
    wp_register_script( 'jquery', get_template_directory_uri() . '/js/jquery-1.12.4.min.js',array(),1,1,1);
    wp_enqueue_script( 'jquery');
	
    wp_register_script( 'bootstrapmin', get_template_directory_uri() . '/js/bootstrap.min.js',array(),1,1,1);
    wp_enqueue_script( 'bootstrapmin');
      
    wp_register_script( 'multislider', get_template_directory_uri() . '/js/multislider.min.js',array(),1,1,1);
    wp_enqueue_script( 'multislider');
	
	wp_register_script( 'custom', get_template_directory_uri() . '/js/custom.js',array(),1,1,1);
    wp_enqueue_script( 'custom');
  
}
add_action( 'wp_enqueue_scripts', 'addjs');


// adding new features to wordpresstheme
// 
function fn_theme_supports(){
    add_theme_support("title-tag");
    add_theme_support("post_thumbnails");
    add_theme_support("html5",array("search-form"));
    add_theme_support("custom-logo");

}

add_action("after_setup_theme", "fn_theme_supports");


add_theme_support( 'post-thumbnails' );

?>
