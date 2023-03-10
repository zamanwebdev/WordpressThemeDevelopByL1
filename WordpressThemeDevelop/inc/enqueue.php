<?php 

function zaman_css_js_file_caling(){
    wp_enqueue_style('zaman-style', get_stylesheet_uri());
    
    wp_register_style( 'bootstrap', get_template_directory_uri().'/css/bootstrap.css', array(), '5.0.2', 'all' );
    wp_register_style( 'bxslider', get_template_directory_uri().'/css/bxslider.min.css', array(), 'v4.2.12', 'all' );
    wp_register_style( 'owl.carousel.min', get_template_directory_uri().'/css/owl.carousel.min.css', array(), 'v2.3.4', 'all' );
    wp_register_style( 'owl.theme.default.min', get_template_directory_uri().'/css/oowl.theme.default.min.css', array(), 'v2.3.4', 'all' );
    wp_register_style( 'custom', get_template_directory_uri().'/css/custom.css', array(), '1.0.0', 'all' );

    wp_enqueue_style('bootstrap');
    wp_enqueue_style('bxslider');
    wp_enqueue_style('owl.carousel.min');
    wp_enqueue_style('owl.theme.default.min');
    wp_enqueue_style('custom');

    
    
    // jQuery
    wp_enqueue_script('jquery');
    // wp_enqueue_script('jquery.min', get_template_directory_uri().'/js/jquery.min.js', array(), 'v3.1.1', 'ture');
    wp_enqueue_script('bootstrap', get_template_directory_uri().'/js/bootstrap.js', array(), '5.0.2', 'ture');
    wp_enqueue_script('bxslider', get_template_directory_uri().'/js/bxslider.min.js', array(), 'v4.2.12', 'ture');
    wp_enqueue_script('owl.carousel.min', get_template_directory_uri().'/js/owl.carousel.min.js', array(), 'v2.3.4', 'ture');
    wp_enqueue_script('main', get_template_directory_uri().'/js/main.js', array(), '1.0.0', 'ture');
}
add_action( 'wp_enqueue_scripts', 'zaman_css_js_file_caling');

// Google Fonts Enqueue
function zaman_add_google_fonts(){
    wp_enqueue_style('zaman_google_fonts', 'https://fonts.googleapis.com/css2?family=Oswald&family=Roboto:wght@400;700&display=swap', false);
  }
  add_action('wp_enqueue_scripts', 'zaman_add_google_fonts');