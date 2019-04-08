<?php
function css_script_scripts_and_styles()
{
    wp_enqueue_style('bootstrap-cdn-css', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css');
    wp_enqueue_script('bootstrap-cdn-js', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js');
    wp_enqueue_style('styles', get_template_directory_uri() . "/css/styles.css");
}

add_action('wp_enqueue_scripts', 'css_script_scripts_and_styles');
