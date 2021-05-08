<?php

function awesometheme_script_enqueue(){

    wp_enqueue_style('customstyle', get_template_directory_uri().'/css/awesome.css', [], '1.0.0', 'all');
    wp_enqueue_script('customjs', get_template_directory_uri().'/js/awesome.js', [], '1.0.0', true);
}

add_action('wp_enqueue_scripts', 'awesometheme_script_enqueue');

function awesometheme_setup(){

    add_theme_support('menus');

    register_nav_menu('primary', 'primary header navigation');

    register_nav_menu('secondary', 'footer navigation');
}

add_action('init', 'awesometheme_setup');