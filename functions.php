<?php
/**
 * Green House functions and definitions
 * Enqueue scripts and styles for front end.
 */

/* First, Hook/Enqueue Script */

function greenhouse_scripts_styles() {
	global $wp_styles;

	// Adds Bootstrap JS and Jquery 
	wp_enqueue_script('bs_script','https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js');

	// loads bootstrap css cdn
    wp_enqueue_style('bs_css','https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css');
    
	// Loads our main stylesheet.
	wp_enqueue_style( 'greenhouse-style', get_stylesheet_uri() );

}
add_action( 'wp_enqueue_scripts', 'greenhouse_scripts_styles' );


/** 
 * Add theme setup
*/
function greenhouse_setup() {

	load_theme_textdomain( 'greenhouse' );

	// This theme supports a variety of post formats.
	add_theme_support( 'post-formats', array( 'aside', 'image', 'link', 'quote', 'status' ) );

	// This theme uses a custom image size for featured images, displayed on "standard" posts.
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 624, 9999 ); // Unlimited height, soft crop
}
add_action( 'after_setup_theme', 'greenhouse_setup' );
/**
 * Nav menu walker
 */

require_once get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';
register_nav_menu('primary', __('primary', 'greenhouse'));

/**
 * Filter the page menu arguments.
 */
function greenhouse_page_menu_args( $args ) {
	if ( ! isset( $args['show_home'] ) )
		$args['show_home'] = true;
	return $args;
}
add_filter( 'wp_page_menu_args', 'greenhouse_page_menu_args' );

/* Add Footer Widget */
function greenhouse_widgets_init() {
	register_sidebar(
		array(
			'name'          => __( 'Footer', 'greenhouse' ),
			'id'            => 'footer-widget',
			'description'   => __( 'Appears on footer', 'greenhouse' ),
			'before_widget' => '<div id="%1$s" class="col-md widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h4 class="widget-title">',
			'after_title'   => '</h4>',
		)
	);
}
add_action( 'widgets_init', 'greenhouse_widgets_init' );


/**
 * Set up post entry meta.
 */

if ( ! function_exists( 'greenhouse_entry_meta' ) ) :

    function greenhouse_entry_meta() {
        // Translators: used between list items, there is a space after the comma.
        $categories_list = get_the_category_list( __( ', ', 'greenhouse' ) );
    
        // Translators: used between list items, there is a space after the comma.
        $tag_list = get_the_tag_list( '', __( ', ', 'greenhouse' ) );
    
        $date = sprintf( '<a href="%1$s" title="%2$s" rel="bookmark"><time class="entry-date" datetime="%3$s">%4$s</time></a>',
            esc_url( get_permalink() ),
            esc_attr( get_the_time() ),
            esc_attr( get_the_date( 'c' ) ),
            esc_html( get_the_date() )
        );
    
        $author = sprintf( '<span class="author vcard"><a class="url fn n" href="%1$s" title="%2$s" rel="author">%3$s</a></span>',
            esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ),
            esc_attr( sprintf( __( 'View all posts by %s', 'greenhouse' ), get_the_author() ) ),
            get_the_author()
        );
    
        // Translators: 1 is category, 2 is tag, 3 is the date and 4 is the author's name.
        if ( $tag_list ) {
            $utility_text = __( 'This entry was posted in %1$s and tagged %2$s on %3$s<span class="by-author"> by %4$s</span>.', 'greenhouse' );
        } elseif ( $categories_list ) {
            $utility_text = __( 'This entry was posted in %1$s on %3$s<span class="by-author"> by %4$s</span>.', 'greenhouse' );
        } else {
            $utility_text = __( 'This entry was posted on %3$s<span class="by-author"> by %4$s</span>.', 'greenhouse' );
        }
    
        printf(
            $utility_text,
            $categories_list,
            $tag_list,
            $date,
            $author
        );
    }
endif;



