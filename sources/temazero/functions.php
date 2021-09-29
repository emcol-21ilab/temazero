<?php

    function temazero_register_styles() {

        $version = wp_get_theme()->get('Version');
        wp_enqueue_style('temazero_style', get_template_directory_uri() . '/style.css', array('bootstrap_style'), $version, 'all');
        wp_enqueue_style('bootstrap_style', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css', array(), '5.1.0', 'all');
    }

    function temazero_register_scripts() {

        $version = wp_get_theme()->get('Version');
        wp_enqueue_script('bootstrap-scripts', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js', array('jquery-scripts'), '5.1.0');
        wp_enqueue_script('jquery-scripts', 'https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js', array(), '3.6.0');
        wp_enqueue_script('temazero-scripts', get_template_directory_uri() . '/assets/js/temazero.js', array('bootstrap-scripts','jquery-scripts'), $version);
    }

    add_action('wp_enqueue_scripts', 'temazero_register_styles');
    add_action('wp_enqueue_scripts', 'temazero_register_scripts');

    function temazero_theme_support() {
        add_theme_support('title-tag');
    }
    
    add_action('after_setup_theme', 'temazero_theme_support');

?>