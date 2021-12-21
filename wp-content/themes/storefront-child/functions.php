<?php
// Exit if accessed directly
if (!defined('ABSPATH')) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if (!function_exists('chld_thm_cfg_locale_css')) :
    function chld_thm_cfg_locale_css($uri)
    {
        if (empty($uri) && is_rtl() && file_exists(get_template_directory() . '/rtl.css'))
            $uri = get_template_directory_uri() . '/rtl.css';
        return $uri;
    }
endif;
add_filter('locale_stylesheet_uri', 'chld_thm_cfg_locale_css');

if (!function_exists('child_theme_configurator_css')) :
    function child_theme_configurator_css()
    {
        wp_enqueue_style('chld_thm_cfg_separate', trailingslashit(get_stylesheet_directory_uri()) . 'ctc-style.css', array('storefront-gutenberg-blocks', 'storefront-style', 'storefront-style', 'storefront-icons'));
    }
endif;
add_action('wp_enqueue_scripts', 'child_theme_configurator_css', 30);

if (!function_exists('nec_js_scripts')) :
    function nec_js_scripts()
    {
        wp_enqueue_script('slick_slider_js', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js', array('jquery'));
        wp_enqueue_style('slick_slidertheme_css', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css');
        wp_enqueue_style('slick_slidertheme_map_css', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css.map');
        wp_enqueue_style('slick_slider_css', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css');
        wp_enqueue_style('slick_slider_map_css', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css.map');
        wp_enqueue_script('custom_js', trailingslashit(get_stylesheet_directory_uri()) . 'custom.js', array('jquery', 'slick_slider_js'));
    }
endif;
add_action('wp_enqueue_scripts', 'nec_js_scripts', 30);
add_filter('woocommerce_admin_disabled', '__return_true');
// END ENQUEUE PARENT ACTION
