<?php
	/*-----------------------------------------------------------------------------------*/
	/* This file will be referenced every time a template/page loads on your Wordpress site
	/* This is the place to define custom fxns and specialty code
	/*-----------------------------------------------------------------------------------*/

// Define the version so we can easily replace it throughout the theme
define( 'NAKED_VERSION', 1.0 );

/*-----------------------------------------------------------------------------------*/
/*  Set the maximum allowed width for any content in the theme
/*-----------------------------------------------------------------------------------*/
if ( ! isset( $content_width ) ) $content_width = 900;

/*-----------------------------------------------------------------------------------*/
/* Add Rss feed support to Head section
/*-----------------------------------------------------------------------------------*/
add_theme_support( 'automatic-feed-links' );


/*-----------------------------------------------------------------------------------*/
/* Register main menu for Wordpress use
/*-----------------------------------------------------------------------------------*/
add_action( 'init', 'my_custom_menus' );
function my_custom_menus() {
    register_nav_menus(
        array(
            'primary' => __( 'Primary Menu' ),
            'secondary' => __( 'Sidebar Menu' ),
            'footer' => __( 'Footer Menu' ),
        )
    );
}

/*-----------------------------------------------------------------------------------*/
/* Activate sidebar for Wordpress use
/*-----------------------------------------------------------------------------------*/
function naked_register_sidebars() {
	register_sidebar(array(				// Start a series of sidebars to register
		'id' => 'sidebar', 					// Make an ID
		'name' => 'Sidebar',				// Name it
		'description' => 'Take it on the side...', // Dumb description for the admin side
		'before_widget' => '<div>',	// What to display before each widget
		'after_widget' => '</div>',	// What to display following each widget
		'before_title' => '<h3 class="side-title">',	// What to display before each widget's title
		'after_title' => '</h3>',		// What to display following each widget's title
		'empty_title'=> '',					// What to display in the case of no title defined for a widget
		// Copy and paste the lines above right here if you want to make another sidebar, 
		// just change the values of id and name to another word/name
	));
} 
// adding sidebars to Wordpress (these are created in functions.php)
add_action( 'widgets_init', 'naked_register_sidebars' );

/*-----------------------------------------------------------------------------------*/
/* Enqueue Styles and Scripts
/*-----------------------------------------------------------------------------------*/

function naked_scripts()  { 

	// FANCYBOX SCRIPT / STYLES
	wp_register_style('fancycss', get_template_directory_uri() . '/js/fancybox/source/jquery.fancybox.css?v=2.1.6');
	wp_enqueue_style('fancycss');
	
	wp_register_script('fancyscript', get_template_directory_uri() . '/js/fancybox/source/jquery.fancybox.pack.js?v=2.1.6', array( 'jquery' ), NAKED_VERSION, true);
	wp_enqueue_script('fancyscript');
	
	// FITIE
	wp_register_script('fitie', get_template_directory_uri() . '/js/fitie.js', array( 'jquery' ), NAKED_VERSION);
	wp_enqueue_script('fitie');
	
	// POLYFILL
	wp_register_script('polyfill', 'https://cdn.polyfill.io/v2/polyfill.min.js', array( 'jquery' ), NAKED_VERSION);
	wp_enqueue_script('polyfill');
	
	// get the theme directory style.css and link to it in the header
	wp_enqueue_style('style.css', get_stylesheet_directory_uri() . '/style.css');
	
	// add fitvid
	wp_enqueue_script( 'naked-fitvid', get_template_directory_uri() . '/js/jquery.fitvids.js', array( 'jquery' ), NAKED_VERSION, true );
	
	// add fitie
	//wp_enqueue_script( 'fitie', get_template_directory_uri() . '/js/fitie.js', array( 'jquery' ), NAKED_VERSION, true );
	
	// add scripts
	wp_enqueue_script( 'scripts', get_template_directory_uri() . '/js/scripts.js', array( 'jquery' ), NAKED_VERSION, true );
	
	// modernizr
	//wp_enqueue_script( 'modernizr', get_template_directory_uri() . '/js/modernizr.js', array( 'jquery' ), NAKED_VERSION, true );
	
	// add theme scripts
	wp_enqueue_script( 'naked', get_template_directory_uri() . '/js/theme.min.js', array(), NAKED_VERSION, true );
	
	// fontAwesome
	wp_enqueue_script( 'fontawesome', 'https://use.fontawesome.com/6ccd600e51.js', array( 'jquery' ), NAKED_VERSION, true );
  
}
add_action( 'wp_enqueue_scripts', 'naked_scripts' ); // Register this fxn and allow Wordpress to call it automatcally in the header

if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page();
	
	acf_add_options_sub_page('Header');
	acf_add_options_sub_page('Projects');
	
}
add_theme_support( 'post-thumbnails' );

// Custom styles in WP text editor
function wpb_mce_buttons_2($buttons) {
	array_unshift($buttons, 'styleselect');
	return $buttons;
}
add_filter('mce_buttons_2', 'wpb_mce_buttons_2');

function my_mce_before_init_insert_formats( $init_array ) { 
	$style_formats = array( 
	array( 
		'title' => 'Web Link Button', 
		'block' => 'p', 
		'classes' => 'web-link',	
		'wrapper' => false,
		)
); 

$init_array['style_formats'] = json_encode( $style_formats ); 
	return $init_array; 
}

add_filter( 'tiny_mce_before_init', 'my_mce_before_init_insert_formats' );

// Added to extend allowed files types in Media upload
add_filter('upload_mimes', 'custom_upload_mimes');
function custom_upload_mimes ( $existing_mimes=array() ) {

// Add *.EPS files to Media upload
$existing_mimes['eps'] = 'application/postscript';

// Add *.AI files to Media upload
$existing_mimes['ai'] = 'application/postscript';

return $existing_mimes;
}
remove_action('wp_head', 'wp_generator');

function td_big_image_size_threshold( $threshold, $imagesize, $file, $attachment_id ) {
    return 4096;
}
add_filter( 'big_image_size_threshold', 'td_big_image_size_threshold', 10, 4 );
