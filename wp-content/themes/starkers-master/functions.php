<?php
/**
 * Starkers functions and definitions
 *
 * For more information on hooks, actions, and filters, see http://codex.wordpress.org/Plugin_API.
 *
 * @package 	WordPress
 * @subpackage 	Starkers
 * @since 		Starkers 4.0
 */

/* ======================================================================		
   Required external files
   ====================================================================== */

require_once( 'external/starkers-utilities.php' );

/* ======================================================================		
   Theme specific settings
   Uncomment register_nav_menus to enable a single menu with the title of "Primary Navigation" in your theme
   ====================================================================== */

add_theme_support('post-thumbnails');

// register_nav_menus(array('primary' => 'Primary Navigation'));

/* ======================================================================	
   Actions and Filters
   ====================================================================== */

add_action( 'wp_enqueue_scripts', 'starkers_script_enqueuer' );

add_filter( 'body_class', array( 'Starkers_Utilities', 'add_slug_to_body_class' ) );

/* ======================================================================	
   Custom Post Types - include custom post types and taxonimies here e.g.

   e.g. require_once( 'custom-post-types/your-custom-post-type.php' );
   ====================================================================== */



/* ======================================================================	
   Scripts 
   ====================================================================== */

/**
 * Add scripts via wp_head()
 *
 * @return void
 * @author Keir Whitaker
 */
 
add_action( 'wp_enqueue_script', 'load_jquery' );

function load_jquery() {
    wp_enqueue_script( 'jquery' );
}

function starkers_script_enqueuer() {

	wp_register_script( 'site', get_template_directory_uri().'/js/site.js', array( 'jquery' ) );
	wp_enqueue_script( 'site' );
	
	wp_register_script( 'modernizr', get_template_directory_uri().'/js/modernizr.custom.min.js', array( 'jquery' ) );
	wp_enqueue_script( 'modernizr' );
	
	wp_register_script( 'fitvids', get_template_directory_uri().'/js/fitvids.js', array( 'jquery' ) );
	wp_enqueue_script( 'fitvids' );
	
	wp_register_script( 'respond', get_template_directory_uri().'/js/respond.min.js', array( 'jquery' ) );
	wp_enqueue_script( 'respond' );
	
	wp_register_script( 'html5shiv', get_template_directory_uri().'/js/html5shiv.js', array( 'jquery' ) );
	wp_enqueue_script( 'html5shiv' );	

	wp_register_style( 'screen', get_stylesheet_directory_uri().'/style.css', '', '', 'screen' );
	wp_enqueue_style( 'screen' );
	
	wp_register_style( 'main', get_stylesheet_directory_uri().'/css/main.css');
	wp_enqueue_style( 'main' );
}	

/* ======================================================================	
   Comments 
   ====================================================================== */

/**
 * Custom callback for outputting comments 
 *
 * @return void
 * @author Keir Whitaker
 */
function starkers_comment( $comment, $args, $depth ) {
	$GLOBALS['comment'] = $comment; 
	?>
	<?php if ( $comment->comment_approved == '1' ): ?>	
	<li>
		<article id="comment-<?php comment_ID() ?>">
			<?php echo get_avatar( $comment ); ?>
			<h4><?php comment_author_link() ?></h4>
			<time><a href="#comment-<?php comment_ID() ?>" pubdate><?php comment_date() ?> at <?php comment_time() ?></a></time>
			<?php comment_text() ?>
		</article>
	<?php endif;
}

/* ======================================================================	
   Menus 
   ====================================================================== */

function register_my_menus() {
  register_nav_menus(
    array(
      'top-nav' => __( 'Top Nav' )
    )
  );
}
add_action( 'init', 'register_my_menus' );

/* ======================================================================	
   Hide Wordpress Admin Bar
   ====================================================================== */
   
add_filter('show_admin_bar', '__return_false');

/* ======================================================================	
   Add Classes to Menu Items
   ====================================================================== */

function add_first_and_last($output) {
  $output = preg_replace('/class="menu-item/', 'class="first-menu-item menu-item', $output, 1);
  $output = substr_replace($output, 'class="last-menu-item menu-item', strripos($output, 'class="menu-item'), strlen('class="menu-item'));
  return $output;
}
add_filter('wp_nav_menu', 'add_first_and_last');

/* ======================================================================	
   Register Sidebars
   ====================================================================== */
   
add_action( 'widgets_init', 'my_register_sidebars' );

function my_register_sidebars() {

	/* Register the 'primary' sidebar. */
	register_sidebar(
		array(
			'id' => 'main',
			'name' => __( 'Main' ),
			'description' => __( 'Do not put widgets in here' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h4 class="widget-title">',
			'after_title' => '</h4>'
		)
	);

	/* Repeat register_sidebar() code for additional sidebars. */
}
   