<?php

/**

 * @package WordPress

 * @subpackage Default_Theme

 */



$content_width = 450;



add_theme_support( 'automatic-feed-links' );

add_theme_support( 'post-thumbnails' );

add_image_size( 'post-img', 270, 200, true );

add_image_size( 'video-img', 220, 150, true );

add_image_size( 'post-thumb', 210, 130, true );



function new_excerpt_length($length) {

    return 39;

}

add_filter('excerpt_length', 'new_excerpt_length');



// Changing excerpt more

function new_excerpt_more($more) {

global $post;

return '';

}

add_filter('excerpt_more', 'new_excerpt_more');



if (!is_admin()) add_action("wp_enqueue_scripts", "my_jquery_enqueue", 1);

function my_jquery_enqueue() {
 
   //wp_deregister_script('jquery');
   
  // wp_register_script('jquery', "https" . ($_SERVER['SERVER_PORT'] == 443 ? "s" : "") . "://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js", false, null);
   
   wp_enqueue_script( 'slick', get_template_directory_uri() . '/js/slick.js', array( 'jquery' ), date('Y-m-d'), true );
   
   wp_enqueue_script( 'fancybox', get_template_directory_uri() . '/js/jquery.fancybox.js', array( 'jquery' ), date('Y-m-d'), true );
   
   wp_enqueue_script( 'mmenu', get_template_directory_uri() . '/js/jquery.mmenu.min.all.js', array( 'jquery' ), date('Y-m-d'), true );
   
   wp_enqueue_script( 'Custom Js', get_template_directory_uri() . '/js/custom.js', array( 'jquery' ), date('Y-m-d'), true );
   
   wp_enqueue_style( 'Fonts', get_template_directory_uri()."/fonts/fonts.css", array(), date('Y-m-d') );
 
   wp_enqueue_style( 'Font Awesome', get_template_directory_uri()."/css/font-awesome.css", array(), date('Y-m-d') );
   
   wp_enqueue_style( 'slick css', get_template_directory_uri()."/css/slick.css", array(), date('Y-m-d') );
   
   wp_enqueue_style( 'fancy css', get_template_directory_uri()."/css/jquery.fancybox.css", array(), date('Y-m-d') );
   
   wp_enqueue_style( 'mmenu css', get_template_directory_uri()."/css/jquery.mmenu.all.css", array(), date('Y-m-d') );
   
   wp_enqueue_style( 'Responsive CSS', get_template_directory_uri()."/css/responsive.css", array(), date('Y-m-d') );
    
   wp_enqueue_script('jquery');
}




if ( function_exists('register_sidebar') ) {
	
	register_sidebar(array(

		'name' => 'Header Widget',

		'id' => 'header_widget',

		'before_widget' => '<div id="%1$s" class="widget %2$s">',

		'after_widget' => '</div>',

		'before_title' => '<h3 class="widgettitle">',

		'after_title' => '</h3>',

	));		

	register_sidebar(array(

		'name' => 'Footer Widget',

		'id' => 'footer_widget',

		'before_widget' => '<div id="%1$s" class="widget %2$s">',

		'after_widget' => '</div>',

		'before_title' => '<h3 class="widgettitle">',

		'after_title' => '</h3>',

	));
	
	register_sidebar(array(

		'name' => 'Footer Copyright Widget',

		'id' => 'footer_copyright_widget',

		'before_widget' => '<div id="%1$s" class="widget %2$s">',

		'after_widget' => '</div>',

		'before_title' => '<h3 class="widgettitle">',

		'after_title' => '</h3>',

	));	
	
	register_sidebar(array(

		'name' => 'Blog Widget',

		'id' => 'blog_widget',

		'before_widget' => '<div id="%1$s" class="widget %2$s">',

		'after_widget' => '</div>',

		'before_title' => '<h3 class="widgettitle">',

		'after_title' => '</h3>',

	));	

}



/** Menus */

add_action( 'after_setup_theme', 'register_my_menu' );

function register_my_menu() {

  register_nav_menu( 'primary-menu', __( 'Primary Menu') );

  register_nav_menu( 'secondary-menu', __( 'Secondary Menu') );

}



add_filter( 'login_headerurl', 'custom_loginlogo_url' );

function custom_loginlogo_url($url) {

	return home_url();

}




// Theme Options

define( 'OPTIONS_FRAMEWORK_DIRECTORY', get_template_directory_uri() . '/theme-options/' );

require_once dirname( __FILE__ ) . '/theme-options/options-framework.php';


// Our Career custom post type function
function create_videos_posttype() {
	register_post_type( 'videos',
	// CPT Options
		array(

			'labels' => array(

				'name' => __( 'Videos' ),

				'singular_name' => __( 'Videos' )

			),

			'public' => true,

			'has_archive' => true,

			'rewrite' => array('slug' => 'videos'),

			'supports' => array( 'title', 'thumbnail'),

		)

	);

}

// Hooking up our function to theme setup
add_action( 'init', 'create_videos_posttype' );


/*function SearchFilter($query) {

if ($query->is_search) {

$query->set('post_type', 'post');

}

return $query;

}



if( !is_admin() ){

add_filter('pre_get_posts','SearchFilter');

}*/





function wpb_move_comment_field_to_bottom( $fields ) {

$comment_field = $fields['comment'];

unset( $fields['comment'] );

$fields['comment'] = $comment_field;

return $fields;

}



add_filter( 'comment_form_fields', 'wpb_move_comment_field_to_bottom' );

function cc_mime_types($mimes) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');


function custom_excerpt_length( $length ) {
return 500;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );