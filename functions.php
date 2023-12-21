<?php


function eliThemeSupport() {
  // Adds Dynamic title
  add_theme_support('title-tag');
}

add_action('after_setup_theme', 'eliThemeSupport');

function getVersion() {
  return wp_get_theme()->get('Version');
}

function eliRegisterStyles() {
  wp_enqueue_style(
    'eli-style', 
    get_template_directory_uri() . "/style.css", 
    array('eli-bootstrap'), 
    getVersion(), 
    'all'
  );
  wp_enqueue_style(
    'eli-bootstrap', 
    "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css", 
    array(), 
    '4.4.1', 
    'all'
  );
  wp_enqueue_style(
    'eli-fontawesome', 
    "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css", 
    array(), 
    '5.13.0', 
    'all'
  );
}

add_action('wp_enqueue_scripts', 'eliRegisterStyles');


function eliRegisterScripts() {
  wp_enqueue_script(
    'eli-jquery',
    'https://code.jquery.com/jquery-3.4.1.slim.min.js',
    array(),
    '3.4.1',
    true
  );
  wp_enqueue_script(
    'eli-popper',
    'https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js',
    array(),
    '1.16.0',
    true
  );
  wp_enqueue_script(
    'eli-bootstrap',
    'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js',
    array(),
    '3.4.1',
    true
  );
  wp_enqueue_script(
    'eli-main',
    get_template_directory_uri() . "/assets/js/main.js",
    array(),
    getVersion(),
    true
  );
}

add_action('wp_enqueue_scripts', 'eliRegisterScripts');

?>