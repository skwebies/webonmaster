<?php
    function load_scripts() {
        wp_enqueue_style('bootstrap', get_template_directory_uri(). '/assets/css/bootstrap.css', array(), '4.1.0', 'all');
        wp_enqueue_style('style', get_template_directory_uri(). '/style.css', array(), '1.0', 'all');
        wp_enqueue_script('bootstrap-js', get_template_directory_uri(). '/assets/js/bootstrap.js', array('jquery'), '4.1.0', true);
    }
    add_action('wp_enqueue_scripts', 'load_scripts');