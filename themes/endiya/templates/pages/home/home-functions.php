<?php
    // ENQUEUE SCRIPTS
    function home_scripts_and_styles() {
            wp_enqueue_style( 'endiya-basic-style', get_stylesheet_uri() );
            wp_register_script( 'new-slick-script', get_template_directory_uri() . '/assets/js/slick.min.js', array('jquery'), null, true );
            wp_enqueue_script('new-slick-script');
            // wp_register_style('slick_styles', 'https://cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick.css');
            // wp_enqueue_style( 'slick_styles');
            // wp_register_style('lato_font_styles', 'https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700,700i&display=swap"');
            // wp_enqueue_style( 'lato_font_styles');
            // wp_register_style('main_style', get_template_directory_uri() . '/assets\css\main.css', array());
            // wp_enqueue_style( 'main_style');
    }
    add_action( 'wp_enqueue_scripts', 'home_scripts_and_styles' );
?>

