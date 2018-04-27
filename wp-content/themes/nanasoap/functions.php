<?php
/**
 * nanasoap functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package nanasoap
 */

if ( ! function_exists( 'nanasoap_setup' ) ) :
	function nanasoap_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on nanasoap, use a find and replace
		 * to change 'nanasoap' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'nanasoap', get_template_directory() . '/languages' );
		add_theme_support( 'title-tag' );
		add_theme_support( 'post-thumbnails' );
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'nanasoap' ),
		) );
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );
		add_theme_support( 'custom-background', apply_filters( 'nanasoap_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );
		add_theme_support( 'customize-selective-refresh-widgets' );
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'nanasoap_setup' );

/**
 * Enqueue scripts and styles.
 */
function nanasoap_scripts() {
	wp_enqueue_style( 'nanasoap-style', get_stylesheet_uri() );
	wp_enqueue_script( 'nanasoap-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );
	wp_enqueue_script( 'nanasoap-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'nanasoap_scripts' );
require get_template_directory() . '/inc/custom-header.php';
require get_template_directory() . '/inc/template-tags.php';
require get_template_directory() . '/inc/template-functions.php';
require get_template_directory() . '/inc/customizer.php';
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}
if (!function_exists('my_custom_post_types')):
    function my_custom_post_types() {
        register_post_type('Products', array (
            'label' => 'Products',
            'public'=> true,
            'publicly_queryable' => true,
            'menu_position' => null,
            'show ui' => true,
            'menu_icon'           => 'dashicons-wordpress-alt',
            'capability_type' => 'post',
            'hierarchical' => false,
            'rewrite' => true,
            'query_var' => true,
            'supports' => array (
                'title',
                'editor',
                'excerpt',
                'trackbacks',
                'custom-fields',
                'comments',
                'revisions',
                'thumbnail',
                'author',
                'page-attributes',)
        ));
    }
    add_action('init', 'my_custom_post_types');
endif;
/* Custom post type */
if (!function_exists('my_custom_post_types')):
    function my_custom_post_types() {
        register_post_type('Products', array (
            'label' => 'Products',
            'public'=> true,
            'publicly_queryable' => true,
            'menu_position' => null,
            'show ui' => true,
            'menu_icon'           => 'dashicons-wordpress-alt',
            'capability_type' => 'post',
            'hierarchical' => false,
            'rewrite' => true,
            'query_var' => true,
            'supports' => array (
                'title',
                'editor',
                'excerpt',
                'trackbacks',
                'custom-fields',
                'comments',
                'revisions',
                'thumbnail',
                'author',
                'page-attributes',)
        ));
    }
    add_action('init', 'my_custom_post_types');
endif;