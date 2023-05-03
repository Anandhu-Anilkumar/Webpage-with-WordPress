<?php
/**
 * OceanWP Child Theme Functions
 *
 * When running a child theme (see http://codex.wordpress.org/Theme_Development
 * and http://codex.wordpress.org/Child_Themes), you can override certain
 * functions (those wrapped in a function_exists() call) by defining them first
 * in your child theme's functions.php file. The child theme's functions.php
 * file is included before the parent theme's file, so the child theme
 * functions will be used.
 *
 * Text Domain: oceanwp
 * @link http://codex.wordpress.org/Plugin_API
 *
 */

/**
 * Load the parent style.css file
 *
 * @link http://codex.wordpress.org/Child_Themes
 */
function oceanwp_child_enqueue_parent_style() {

	// Dynamically get version number of the parent stylesheet (lets browsers re-cache your stylesheet when you update the theme).
	$theme   = wp_get_theme( 'OceanWP' );
	$version = $theme->get( 'Version' );

	// load the scripts
	wp_enqueue_script( 'bootstrap-js', 'https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/js/bootstrap.min.js', array(), '5.2.3', true );

	// Load the stylesheet.
	wp_enqueue_style('bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css');
	wp_enqueue_style('custom-js', get_theme_file_uri('assets/css/style.min.css'));
}

add_action( 'wp_enqueue_scripts', 'oceanwp_child_enqueue_parent_style' );

function navigation() {
    register_post_type('navigation',
        array(
            'labels' => array(
                'name' => __('All Navigations'),
                'singular_name' => __('Navigation')
            ),
            'public' => true,
            'has_archive' => true,
            'supports' => array('title'),
        )
    );
}
add_action('init', 'navigation');

function hero_banner() {
    register_post_type('hero-banner',
        array(
            'labels' => array(
                'name' => __('All Hero Banners'),
                'singular_name' => __('Hero Banner')
            ),
            'public' => true,
            'has_archive' => true,
            'supports' => array('title'),
        )
    );
}
add_action('init', 'hero_banner');


function key_people() {
    register_post_type('key-people',
        array(
            'labels' => array(
                'name' => __('All Key People'),
                'singular_name' => __('Key People')
            ),
            'public' => true,
            'has_archive' => true,
            'supports' => array('title'),
        )
    );
}
add_action('init', 'key_people');


function event() {
    register_post_type('event',
        array(
            'labels' => array(
                'name' => __('All Events'),
                'singular_name' => __('Event')
            ),
            'public' => true,
            'has_archive' => true,
            'supports' => array('title'),
        )
    );
}
add_action('init', 'event');