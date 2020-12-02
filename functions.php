<?php

function file_setup()
{
  wp_enqueue_script('main_scripts', get_theme_file_uri('/js/main.js?v1'), NULL, '1.0', true);
  wp_enqueue_style('google-fonts-preconnect', 'https://fonts.gstatic.com');
  wp_enqueue_style('custom-google-fonts', 'https://fonts.googleapis.com/css2?family=Castoro&family=PT+Sans:ital,wght@0,400;0,700;1,400&display=swap');
  wp_enqueue_style('main_styles', get_template_directory_uri() . '/css/styles.css');
}

add_action('wp_enqueue_scripts', 'file_setup');

function website_features()
{
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
  add_image_size('hero-image', 1600, 500, true);
  add_image_size('post-thumbnail', 400, 200, true);
  add_image_size('project-thumbnail', 800, 600, true);
}

add_action('after_setup_theme', 'website_features');
