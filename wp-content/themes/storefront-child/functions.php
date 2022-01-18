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
        wp_enqueue_style('bootstrap-theme', trailingslashit(get_stylesheet_directory_uri()) . '/lib/bootstrap/css/bootstrap.min.css');
         wp_enqueue_script('custom_js', trailingslashit(get_stylesheet_directory_uri()) . 'custom.js', array('jquery', 'slick_slider_js'), 1, true);

        wp_enqueue_style('style-theme', trailingslashit(get_stylesheet_directory_uri()) . 'css/style.css');
        wp_enqueue_style('animate-theme', trailingslashit(get_stylesheet_directory_uri()) . '/lib/animate/animate.min.css');
        wp_enqueue_style('font-awesome-theme', trailingslashit(get_stylesheet_directory_uri()) . '/lib/font-awesome/css/font-awesome.min.css');
        wp_enqueue_style('ion-icons-theme', trailingslashit(get_stylesheet_directory_uri()) . '/lib/ionicons/css/ionicons.min.css');
        wp_enqueue_style('owl-carousel-theme', trailingslashit(get_stylesheet_directory_uri()) . '/lib/owlcarousel/assets/owl.carousel.min.css');
        wp_enqueue_style('lightbox-theme', trailingslashit(get_stylesheet_directory_uri()) . '/lib/lightbox/css/lightbox.min.css');

        wp_enqueue_script('bootstrap-theme-js', trailingslashit(get_stylesheet_directory_uri()) . '/lib/bootstrap/js/bootstrap.bundle.min.js', array('jquery'), 1, true);
        wp_enqueue_script('easing-theme-js', trailingslashit(get_stylesheet_directory_uri()) . '/lib/easing/easing.min.js', array('jquery'), 1, true);
        wp_enqueue_script('mobile-nav-theme-js', trailingslashit(get_stylesheet_directory_uri()) . '/lib/mobile-nav/mobile-nav.js', array('jquery'), 1, true);
        wp_enqueue_script('wow-theme-js', trailingslashit(get_stylesheet_directory_uri()) . '/lib/wow/wow.min.js', array('jquery'), 1, true);
        wp_enqueue_script('waypoints-theme-js', trailingslashit(get_stylesheet_directory_uri()) . '/lib/waypoints/waypoints.min.js', array('jquery'), 1, true);
        wp_enqueue_script('counterup-theme-js', trailingslashit(get_stylesheet_directory_uri()) . '/lib/counterup/counterup.min.js', array('jquery'), 1, true);
        wp_enqueue_script('owlcarousel-theme-js', trailingslashit(get_stylesheet_directory_uri()) . '/lib/owlcarousel/owl.carousel.min.js', array('jquery'), 1, true);
        wp_enqueue_script('isotope-theme-js', trailingslashit(get_stylesheet_directory_uri()) . '/lib/isotope/isotope.pkgd.min.js', array('jquery'), 1, true);
        wp_enqueue_script('lightbox-theme-js', trailingslashit(get_stylesheet_directory_uri()) . '/lib/lightbox/js/lightbox.min.js', array('jquery'), 1, true);
        wp_enqueue_script('bootstrap-theme-js', trailingslashit(get_stylesheet_directory_uri()) . '/lib/bootstrap/bootstrap.min.js', array('jquery'), 1, true);
        wp_enqueue_script('contactform-theme-js', trailingslashit(get_stylesheet_directory_uri()) . '/contactform/contactform.js', array('jquery'), 1, true);
        wp_enqueue_script('main-theme-js', trailingslashit(get_stylesheet_directory_uri()) . '/js/main.js', array('jquery'), 1, true);

    }
endif;
add_action('wp_enqueue_scripts', 'nec_js_scripts', 30);
add_filter('woocommerce_admin_disabled', '__return_true');
add_action( 'init', 'jk_remove_storefront_handheld_footer_bar' );

function jk_remove_storefront_handheld_footer_bar() {

  remove_action( 'storefront_footer', 'storefront_handheld_footer_bar', 999 );

}
// END ENQUEUE PARENT ACTION