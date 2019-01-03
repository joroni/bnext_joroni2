<?php
/**
 * bneXt functions and definitions
 *
 * Set up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * When using a child theme you can override certain functions (those wrapped
 * in a function_exists() call) by defining them first in your child theme's
 * functions.php file. The child theme's functions.php file is included before
 * the parent theme's file, so the child theme functions would be used.
 *
 * @link https://codex.wordpress.org/Theme_Development
 * @link https://codex.wordpress.org/Child_Themes
 *
 * Functions that are not pluggable (not wrapped in function_exists()) are
 * instead attached to a filter or action hook.
 *
 * For more information on hooks, actions, and filters,
 * {@link https://codex.wordpress.org/Plugin_API}
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since bneXt 1.0
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 *
 * @since bneXt 1.0
 */
if ( ! isset( $content_width ) ) {
	$content_width = 660;
}

/**
 * bneXt only works in WordPress 4.1 or later.
 */
if ( version_compare( $GLOBALS['wp_version'], '4.1-alpha', '<' ) ) {
	require get_template_directory() . '/inc/back-compat.php';
}

if ( ! function_exists( 'bneXt_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 *
 * @since bneXt 1.0
 */
function bneXt_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed at WordPress.org. See: https://translate.wordpress.org/projects/wp-themes/bneXt
	 * If you're building a theme based on bneXt, use a find and replace
	 * to change 'bneXt' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'bneXt' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * See: https://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 825, 510, true );

	// This theme uses wp_nav_menu() in two locations.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu',      'bneXt' ),
		'social'  => __( 'Social Links Menu', 'bneXt' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
	) );

	/*
	 * Enable support for Post Formats.
	 *
	 * See: https://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'quote', 'link', 'gallery', 'status', 'audio', 'chat'
	) );

	/*
	 * Enable support for custom logo.
	 *
	 * @since bneXt 1.5
	 */
	add_theme_support( 'custom-logo', array(
		'height'      => 248,
		'width'       => 248,
		'flex-height' => true,
	) );

	//$color_scheme  = bneXt_get_color_scheme();
	$default_color = trim( $color_scheme[0], '#' );

	// Setup the WordPress core custom background feature.

	/**
	 * Filter bneXt custom-header support arguments.
	 *
	 * @since bneXt 1.0
	 *
	 * @param array $args {
	 *     An array of custom-header support arguments.
	 *
	 *     @type string $default-color     		Default color of the header.
	 *     @type string $default-attachment     Default attachment of the header.
	 * }
	 */
	add_theme_support( 'custom-background', apply_filters( 'bneXt_custom_background_args', array(
		'default-color'      => $default_color,
		'default-attachment' => 'fixed',
	) ) );

	/*
	 * This theme styles the visual editor to resemble the theme style,
	 * specifically font, colors, icons, and column width.
	 */
	add_editor_style( array( 'css/editor-style.css', 'genericons/genericons.css', bneXt_fonts_url() ) );

	// Indicate widget sidebars can use selective refresh in the Customizer.
	add_theme_support( 'customize-selective-refresh-widgets' );
}
endif; // bneXt_setup
add_action( 'after_setup_theme', 'bneXt_setup' );

/**
 * Register widget area.
 *
 * @since bneXt 1.0
 *
 * @link https://codex.wordpress.org/Function_Reference/register_sidebar
 */
function bneXt_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Widget Area', 'bneXt' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Add widgets here to appear in your sidebar.', 'bneXt' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'bneXt_widgets_init' );

if ( ! function_exists( 'bneXt_fonts_url' ) ) :
/**
 * Register Google fonts for bneXt.
 *
 * @since bneXt 1.0
 *
 * @return string Google fonts URL for the theme.
 */
function bneXt_fonts_url() {
	$fonts_url = '';
	$fonts     = array();
	$subsets   = 'latin,latin-ext';

	/*
	 * Translators: If there are characters in your language that are not supported
	 * by Noto Sans, translate this to 'off'. Do not translate into your own language.
	 */
	if ( 'off' !== _x( 'on', 'Noto Sans font: on or off', 'bneXt' ) ) {
		$fonts[] = 'Noto Sans:400italic,700italic,400,700';
	}

	/*
	 * Translators: If there are characters in your language that are not supported
	 * by Noto Serif, translate this to 'off'. Do not translate into your own language.
	 */
	if ( 'off' !== _x( 'on', 'Noto Serif font: on or off', 'bneXt' ) ) {
		$fonts[] = 'Noto Serif:400italic,700italic,400,700';
	}

	/*
	 * Translators: If there are characters in your language that are not supported
	 * by Inconsolata, translate this to 'off'. Do not translate into your own language.
	 */
	if ( 'off' !== _x( 'on', 'Inconsolata font: on or off', 'bneXt' ) ) {
		$fonts[] = 'Inconsolata:400,700';
	}

	/*
	 * Translators: To add an additional character subset specific to your language,
	 * translate this to 'greek', 'cyrillic', 'devanagari' or 'vietnamese'. Do not translate into your own language.
	 */
	$subset = _x( 'no-subset', 'Add new subset (greek, cyrillic, devanagari, vietnamese)', 'bneXt' );

	if ( 'cyrillic' == $subset ) {
		$subsets .= ',cyrillic,cyrillic-ext';
	} elseif ( 'greek' == $subset ) {
		$subsets .= ',greek,greek-ext';
	} elseif ( 'devanagari' == $subset ) {
		$subsets .= ',devanagari';
	} elseif ( 'vietnamese' == $subset ) {
		$subsets .= ',vietnamese';
	}

	if ( $fonts ) {
		$fonts_url = add_query_arg( array(
			'family' => urlencode( implode( '|', $fonts ) ),
			'subset' => urlencode( $subsets ),
		), 'https://fonts.googleapis.com/css' );
	}

	return $fonts_url;
}
endif;

/**
 * JavaScript Detection.
 *
 * Adds a `js` class to the root `<html>` element when JavaScript is detected.
 *
 * @since bneXt 1.1
 */
function bneXt_javascript_detection() {
	echo "<script>(function(html){html.className = html.className.replace(/\bno-js\b/,'js')})(document.documentElement);</script>\n";
}
add_action( 'wp_head', 'bneXt_javascript_detection', 0 );

/**
 * Enqueue scripts and styles.
 *
 * @since bneXt 1.0
 */
function bneXt_scripts() {
	// Add custom fonts, used in the main stylesheet.
	wp_enqueue_style( 'bneXt-fonts', bneXt_fonts_url(), array(), null );

	// Add Genericons, used in the main stylesheet.
	wp_enqueue_style( 'genericons', get_template_directory_uri() . '/genericons/genericons.css', array(), '3.2' );

	// Load our main stylesheet.
	wp_enqueue_style( 'bneXt-style', get_stylesheet_uri() );

	// Load the Internet Explorer specific stylesheet.
	wp_enqueue_style( 'bneXt-ie', get_template_directory_uri() . '/css/ie.css', array( 'bneXt-style' ), '20141010' );
	wp_style_add_data( 'bneXt-ie', 'conditional', 'lt IE 9' );

	// Load the Internet Explorer 7 specific stylesheet.
	wp_enqueue_style( 'bneXt-ie7', get_template_directory_uri() . '/css/ie7.css', array( 'bneXt-style' ), '20141010' );
	wp_style_add_data( 'bneXt-ie7', 'conditional', 'lt IE 8' );

	wp_enqueue_script( 'bneXt-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20141010', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	if ( is_singular() && wp_attachment_is_image() ) {
		wp_enqueue_script( 'bneXt-keyboard-image-navigation', get_template_directory_uri() . '/js/keyboard-image-navigation.js', array( 'jquery' ), '20141010' );
	}

	wp_enqueue_script( 'bneXt-script', get_template_directory_uri() . '/js/functions.js', array( 'jquery' ), '20150330', true );
	wp_localize_script( 'bneXt-script', 'screenReaderText', array(
		'expand'   => '<span class="screen-reader-text">' . __( 'expand child menu', 'bneXt' ) . '</span>',
		'collapse' => '<span class="screen-reader-text">' . __( 'collapse child menu', 'bneXt' ) . '</span>',
	) );
}
add_action( 'wp_enqueue_scripts', 'bneXt_scripts' );

/**
 * Add preconnect for Google Fonts.
 *
 * @since bneXt 1.7
 *
 * @param array   $urls          URLs to print for resource hints.
 * @param string  $relation_type The relation type the URLs are printed.
 * @return array URLs to print for resource hints.
 */
function bneXt_resource_hints( $urls, $relation_type ) {
	if ( wp_style_is( 'bneXt-fonts', 'queue' ) && 'preconnect' === $relation_type ) {
		if ( version_compare( $GLOBALS['wp_version'], '4.7-alpha', '>=' ) ) {
			$urls[] = array(
				'href' => 'https://fonts.gstatic.com',
				'crossorigin',
			);
		} else {
			$urls[] = 'https://fonts.gstatic.com';
		}
	}

	return $urls;
}
add_filter( 'wp_resource_hints', 'bneXt_resource_hints', 10, 2 );



function my_home_category( $query ) {
    if ( $query->is_home() && $query->is_main_query() ) {
		$query->set( 'categories', '5' );
		echo 'filtering';
    }
}
add_action( 'pre_get_posts', 'my_home_category' );
           
    
/**
 * Add featured image as background image to post navigation elements.
 *
 * @since bneXt 1.0
 *
 * @see wp_add_inline_style()
 */
function bneXt_post_nav_background() {
	if ( ! is_single() ) {
		return;
	}

	$previous = ( is_attachment() ) ? get_post( get_post()->post_parent ) : get_adjacent_post( false, '', true );
	$next     = get_adjacent_post( false, '', false );
	$css      = '';

	if ( is_attachment() && 'attachment' == $previous->post_type ) {
		return;
	}

	if ( $previous &&  has_post_thumbnail( $previous->ID ) ) {
		$prevthumb = wp_get_attachment_image_src( get_post_thumbnail_id( $previous->ID ), 'post-thumbnail' );
		$css .= '
			.post-navigation .nav-previous { background-image: url(' . esc_url( $prevthumb[0] ) . '); }
			.post-navigation .nav-previous .post-title, .post-navigation .nav-previous a:hover .post-title, .post-navigation .nav-previous .meta-nav { color: #fff; }
			.post-navigation .nav-previous a:before { background-color: rgba(0, 0, 0, 0.4); }
		';
	}

	if ( $next && has_post_thumbnail( $next->ID ) ) {
		$nextthumb = wp_get_attachment_image_src( get_post_thumbnail_id( $next->ID ), 'post-thumbnail' );
		$css .= '
			.post-navigation .nav-next { background-image: url(' . esc_url( $nextthumb[0] ) . '); border-top: 0; }
			.post-navigation .nav-next .post-title, .post-navigation .nav-next a:hover .post-title, .post-navigation .nav-next .meta-nav { color: #fff; }
			.post-navigation .nav-next a:before { background-color: rgba(0, 0, 0, 0.4); }
		';
	}

	wp_add_inline_style( 'bneXt-style', $css );
}
add_action( 'wp_enqueue_scripts', 'bneXt_post_nav_background' );

/**
 * Display descriptions in main navigation.
 *
 * @since bneXt 1.0
 *
 * @param string  $item_output The menu item output.
 * @param WP_Post $item        Menu item object.
 * @param int     $depth       Depth of the menu.
 * @param array   $args        wp_nav_menu() arguments.
 * @return string Menu item with possible description.
 */
function bneXt_nav_description( $item_output, $item, $depth, $args ) {
	if ( 'primary' == $args->theme_location && $item->description ) {
		$item_output = str_replace( $args->link_after . '</a>', '<div class="menu-item-description">' . $item->description . '</div>' . $args->link_after . '</a>', $item_output );
	}

	return $item_output;
}
add_filter( 'walker_nav_menu_start_el', 'bneXt_nav_description', 10, 4 );

/**
 * Add a `screen-reader-text` class to the search form's submit button.
 *
 * @since bneXt 1.0
 *
 * @param string $html Search form HTML.
 * @return string Modified search form HTML.
 */
function bneXt_search_form_modify( $html ) {
	return str_replace( 'class="search-submit"', 'class="search-submit screen-reader-text"', $html );
}
add_filter( 'get_search_form', 'bneXt_search_form_modify' );

/**
 * Modifies tag cloud widget arguments to display all tags in the same font size
 * and use list format for better accessibility.
 *
 * @since bneXt 1.9
 *
 * @param array $args Arguments for tag cloud widget.
 * @return array The filtered arguments for tag cloud widget.
 */
function bneXt_widget_tag_cloud_args( $args ) {
	$args['largest']  = 22;
	$args['smallest'] = 8;
	$args['unit']     = 'pt';
	$args['format']   = 'list';

	return $args;
}

function page_title_sc( ){
	return get_the_title();
 }
 add_shortcode( 'page_title', 'page_title_sc' );

 

add_filter( 'widget_tag_cloud_args', 'bneXt_widget_tag_cloud_args' );


  function wpb_custom_new_menu() {
	register_nav_menus(
	  array(
		'my-custom-menu' => __( 'My Custom Menu' ),
		'inner-custom-menu' => __( 'Inner Page Menu' )
	  )
	);
  }
  add_action( 'init', 'wpb_custom_new_menu' );




  /**
 * Add a home link to your menu
 *
 * @since 4.0
 */
function wpex_add_menu_home_link( $items, $args ) {

	// Only used for the main menu
	if ( 'Home' != $args->theme_location ) {
		return $items;
	}

	// Create home link
	$home_link = '<li><a href="' . esc_url( home_url( '/' ) ) . '">Home</a></li>';

	// Add home link to the menu items
	$items = $home_link . $items;

	// Return menu items
	return $items;
	
}
add_filter( 'wp_nav_menu_items', 'wpex_add_menu_home_link', 10, 2 );





  
/*
function wptuts_scripts_with_jquery(){
	////wordpress3/wp-content/plugins/C:/xampp/htdocs/wordpress3/wp-content/themes/bneXt/js/

	wp_register_script( 'jquery-script', plugins_url( 'jquery-2.1.3.min.js', __FILE__ ), array( 'jquery' ) );
	wp_register_script( 'plugins-script', plugins_url( 'plugins.js', __FILE__ ), array( 'jquery' ) );
	wp_register_script( 'main-script', plugins_url( '/js/main.js', __FILE__ ), array( 'jquery' ) );
    // or
    // Register the script like this for a theme:
    wp_register_script( 'jquery-script', get_template_directory_uri() . 'jquery-2.1.3.min.js', array( 'jquery' ) );
 
	wp_register_script( 'plugins-script', get_template_directory_uri() . 'plugins.js', array( 'jquery' ) );

	wp_register_script( 'main-script', get_template_directory_uri() . '/js/main.js', array( 'jquery' ) );
    // For either a plugin or a theme, you can then enqueue the script:
	wp_enqueue_script( 'jquery-script');
	wp_enqueue_script( 'plugins-script');
	wp_enqueue_script( 'main-script');
}
add_action( 'wp_enqueue_scripts', 'wptuts_scripts_with_jquery' );
*/

/**
 * Implement the Custom Header feature.
 *
 * @since bneXt 1.0
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 *
 * @since bneXt 1.0
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Customizer additions.
 *
 * @since bneXt 1.0
 */
require get_template_directory() . '/inc/customizer.php';
