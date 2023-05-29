<?php
function comercio_framework(){

    wp_register_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css', 'all');

    wp_enqueue_style('bootstrap');

}
add_action('wp_enqueue_scripts', 'comercio_framework');