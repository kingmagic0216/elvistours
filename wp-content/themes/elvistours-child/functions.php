<?php
add_action('wp_enqueue_scripts', function () {
  wp_enqueue_style('parent', get_template_directory_uri().'/style.css');
  wp_enqueue_style('child', get_stylesheet_directory_uri().'/dist/style.css', ['parent'], '1.0');
  wp_enqueue_script('child', get_stylesheet_directory_uri().'/dist/app.js', [], '1.0', true);
});

