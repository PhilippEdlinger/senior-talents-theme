<?php

function senior_talents_files() {
  wp_enqueue_style('senior_talents_styles', get_stylesheet_uri());
  wp_enqueue_script('load-pages.js', get_theme_file_uri('/js/page-loader.js'), true);
}

add_action('wp_enqueue_scripts', 'senior_talents_files');