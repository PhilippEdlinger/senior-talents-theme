<?php

function senior_talents_files() {
  wp_enqueue_style('senior_talents_styles', get_stylesheet_uri());
  //wp_enqueue_style('login-style',  get_template_directory_uri() . '/css/login-style.css');
    if ( is_page() && !is_page_template( 'login.php' ) ) {
      wp_enqueue_style( 'login-template', get_stylesheet_uri() . '/css/login-style.css' );
    }
  wp_enqueue_script('load-pages.js', get_theme_file_uri('/js/page-loader.js'), true);
  
}

add_action('wp_enqueue_scripts', 'senior_talents_files');

?>
