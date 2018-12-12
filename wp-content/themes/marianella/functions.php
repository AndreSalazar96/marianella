<?php

/*FUNCTIONS MARIANELLA*/
add_action('wp_enqueue_scripts', 'mycustomscript_enqueue');

function mycustomscript_enqueue(){
    wp_enqueue_script('custom-script', get_stylesheet_directory_uri() . '/assets/js/main.js', array('jquery'), null, true);
}

add_action('wp_print_styles','charge_css_code');

function charge_css_code(){
    wp_register_style('style-extra', get_template_directory_uri() . '/style.css', array() , '1.0', 'all');
    wp_enqueue_style('style-extra');
}