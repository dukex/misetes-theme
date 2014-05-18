<?php
/**
 * Misetes functions and definitions
 *
 * @package Misetes
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 640; /* pixels */
}

if ( ! function_exists( 'misetes_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function misetes_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Misetes, use a find and replace
	 * to change 'misetes' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'misetes', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'footer' 	=> __(  'Footer Menu', 'misetes'),
		'primary' => __( 'Primary Menu', 'misetes' ),
	) );

	// Enable support for Post Formats.
	add_theme_support( 'post-formats', array('video'));# array( 'aside', 'image', 'video', 'quote', 'link' ) );

	// Setup the WordPress core custom background feature.
	// add_theme_support( 'custom-background', apply_filters( 'misetes_custom_background_args', array(
	// 	'default-color' => 'ffffff',
	// 	'default-image' => '',
	// ) ) );

	// Enable support for HTML5 markup.
	add_theme_support( 'html5', array(
		'comment-list',
		'search-form',
		'comment-form',
		'gallery',
		'caption',
	) );


	add_theme_support('post-thumbnails');
	set_post_thumbnail_size(300,300, true);
}
endif; // misetes_setup
add_action( 'after_setup_theme', 'misetes_setup' );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function misetes_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'misetes' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
}
add_action( 'widgets_init', 'misetes_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function misetes_scripts() {
	wp_enqueue_style( 'misetes-fonts', 'http://fonts.googleapis.com/css?family=Lusitana:400,700|Merriweather:400,300,300italic,400italic,700,700italic,900,900italic|Merriweather+Sans:400,300,300italic,400italic,700italic,700,800,800italic');

	wp_enqueue_style( 'misetes-style', get_stylesheet_uri() );

	wp_enqueue_script( 'misetes-jquery', '//code.jquery.com/jquery-1.11.0.min.js');
	wp_enqueue_script( 'misetes-jquery', '//code.jquery.com/jquery-migrate-1.2.1.min.js' );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'misetes_scripts' );

/**
 * Implement the Custom Header feature.
 */
//require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';
