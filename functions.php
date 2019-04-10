<?php
function css_script_scripts_and_styles()
{
    wp_enqueue_style('bootstrap-cdn-css', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css', 'all');
    wp_enqueue_script('bootstrap-cdn-js', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js', true);
    wp_enqueue_style('styles', get_template_directory_uri() . "/css/styles.css", 'all');
}

add_action('wp_enqueue_scripts', 'css_script_scripts_and_styles');

function awesome_theme_setup(){
    add_theme_support('menus');
    register_nav_menu('primary', 'Primary Header Navigation');
    register_nav_menu('secondary', 'Footer Navigation');

}

add_action('init', 'awesome_theme_setup');
