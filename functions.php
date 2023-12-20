<?php

function eliRegisterStyles() {
  $version = wp_get_theme()->get('Version');
  wp_enqueue_style(
    'eli-style', 
    get_template_directory_uri() . "/style.css", 
    array('eli-bootstrap'), 
    $version, 
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

?>