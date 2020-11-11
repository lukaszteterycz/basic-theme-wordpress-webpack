<?php 

// include all functions 

require 'inc/debug.php';
require 'inc/helpers.php';
require 'inc/sidebars.php';

function config($key) {
    $key = explode('.',$key);
    $config = include "configs/$key[0].php";
    $config_value = $config[$key[1]];
    return $config_value;
}

class Theme {
    function __construct() {
        // $this->register_menu_locations();

        // if (!is_admin()) {
        //     $this->add_styles_and_scripts();
        // } else {
        //     $this->add_styles_and_scripts_admin();
        // }

        // $this->enable_post_thumbnails();
        // $this->change_excerpt_lenght(20);
    }

    private function enable_post_thumbnails() {
        add_theme_support( 'post-thumbnails' );
    }

    private function change_excerpt_lenght($length_words) {
        add_filter( 'excerpt_length', function () use ($length_words) {
            return $length_words;
        }, 999 );
    }

    private function register_menu_locations() {
        add_action( 'after_setup_theme', function() {
            register_nav_menus([
                'header_top' => 'Menu nad headerem',
                'header_bottom' => 'Menu pod headerem',
            ]);
        });
    }

    private function add_styles_and_scripts() {
        wp_enqueue_style( 'main', get_template_directory_uri()."/dist/main.css" );
        wp_enqueue_script( 'main', get_template_directory_uri()."/dist/bundle.js" );
    }

    private function add_styles_and_scripts_admin() {
        wp_enqueue_style( 'main-admin', get_template_directory_uri()."/assets/css/admin.css" );
    }
}

new Theme();