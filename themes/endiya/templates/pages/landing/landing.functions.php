<?php
    // ENQUEUE SCRIPTS
    function landing_scripts_and_styles() {
        $version = $_GET['v']; 
        $fileVersion = "5.1.3";
        if(!isset($version)){
            $version = "3";
        }
        if(is_page("landing")){
            wp_register_script( 'new-jquery-nice-select-script', get_stylesheet_directory_uri() . '/assets/js/jquery.nice-select.js', array('jquery'), null, true );
            wp_register_script( 'new-slick-script', get_stylesheet_directory_uri() . '/assets/js/slick.min.js', array('jquery'), null, true );
            wp_register_script( 'lazyload', get_stylesheet_directory_uri() . '/assets/js/load.js', null, false);            
            
            wp_enqueue_script('new-slick-script');
            wp_enqueue_script('lazyload');
            wp_enqueue_script('new-jquery-nice-select-script');
            
            if($version == "1"){
                wp_register_script( 'new-search-landing-v1-script', get_stylesheet_directory_uri() . '/assets/js/landing-page.js', array('jquery', 'new-slick-script'), $fileVersion, true );
                wp_enqueue_script('new-search-landing-v1-script');
            }
            if($version == "2" || $version == "3"){
                wp_register_script( 'new-search-landing-v2-script', get_stylesheet_directory_uri() . '/assets/js/landing-page-v1.js', array('jquery','new-slick-script'), $fileVersion, true );
                wp_enqueue_script('new-search-landing-v2-script');
            }

            // Styles
            if($version == "1"){
                wp_register_style('landing_styles', get_stylesheet_directory_uri() . '/assets/css/main.css', array(), $fileVersion);
                wp_enqueue_style( 'landing_styles');
            }
            elseif($version == "2"){
                wp_register_style('landing_v2_styles', get_stylesheet_directory_uri() . '/assets/css/landingpagev1.css', array(), $fileVersion);
                wp_enqueue_style( 'landing_v2_styles');
            }
            elseif($version == "3"){
                wp_register_style('landing_v3_styles', get_stylesheet_directory_uri() . '/assets/css/landingpagev2.css', array(), $fileVersion);
                wp_enqueue_style( 'landing_v3_styles');
            }

            
            wp_register_style('slick_styles', 'https://cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick.css');
            wp_enqueue_style( 'slick_styles');

            wp_register_style('aleo_font_styles', 'https://fonts.googleapis.com/css?family=Aleo');
            wp_enqueue_style( 'aleo_font_styles');
        }
    }
    add_action( 'wp_enqueue_scripts', 'landing_scripts_and_styles' );
?>

