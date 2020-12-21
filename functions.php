<?php

function file_setup()
{
  wp_enqueue_script('feather-icons', 'https://unpkg.com/feather-icons', NULL, '1.0', false);
  wp_enqueue_script('gsap', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js', NULL, '1.0', true);
  wp_enqueue_script('aos', 'https://unpkg.com/aos@next/dist/aos.js', NULL, '1.0', true);
  wp_enqueue_script('main_scripts', get_theme_file_uri('/js/main.js?v1'), NULL, '1.0', true);
  wp_enqueue_style( 'aos', 'https://unpkg.com/aos@next/dist/aos.css');
  wp_enqueue_style('main', get_template_directory_uri() . '/css/styles.css?v1', array(), filemtime(get_template_directory() . '/css/styles.css'), false);
}

add_action('wp_enqueue_scripts', 'file_setup');

function add_google_fonts() {
  echo "<link rel='preconnect' href='https://fonts.gstatic.com'>";
  echo "<link href='https://fonts.googleapis.com/css2?family=Castoro&family=PT+Sans:ital,wght@0,400;0,700;1,400&display=swap' rel='stylesheet'> ";
}

add_action('wp_head','add_google_fonts');

function website_features()
{
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
  add_image_size('hero-image', 1500, 500, true);
  add_image_size('project-thumbnail', 800, 600, true);
}

add_action('after_setup_theme', 'website_features');
