<?php
/**
 * Ministore functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Ministore
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function ministore_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on Ministore, use a find and replace
		* to change 'ministore' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'ministore', get_template_directory() . '/languages' );

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
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support( 'post-thumbnails' );

	// Set up a size of images
	add_image_size( 'ministore_insta', 475, 475, true );
	add_image_size( 'ministore_slider', 657, 676, true );
	add_image_size( 'ministore_blogpost-prev', 450, 320, true );
	add_image_size( 'ministore_blogpost-full', 1300, 670, true );

	// This theme uses wp_nav_menu() in three location.
	register_nav_menus(
		array(
			'header-menu' => esc_html__( 'Main menu', 'ministore' ),
			'footer-menu_1' => esc_html__( 'First menu in the footer', 'ministore' ),
			'footer-menu_2' => esc_html__( 'Second menu in the footer', 'ministore' ),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	// add_theme_support(
	// 	'custom-background',
	// 	apply_filters(
	// 		'ministore_custom_background_args',
	// 		array(
	// 			'default-color' => 'ffffff',
	// 			'default-image' => '',
	// 		)
	// 	)
	// );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 140,
			'width'       => 26,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'ministore_setup' );

/**
 * Register Custom Post Types
 */
function ministore_register_post_types() {
	register_post_type( 'main-slider', [
		'labels' => [
			'name'               => esc_html__( 'Slider', 'ministore' ),
			'singular_name'      => esc_html__( 'Slide', 'ministore' ),
			'add_new'            => esc_html__( 'Add slide', 'ministore' ),
			'add_new_item'       => esc_html__( 'Adding slide', 'ministore' ),
			'edit_item'          => esc_html__( 'Edit slide', 'ministore' ),
			'new_item'           => esc_html__( 'New slide', 'ministore' ),
			'view_item'          => esc_html__( 'View slide', 'ministore' ),
		],
		'public'                 => true,
		'menu_position'       => null,
		'menu_icon'           => 'dashicons-slides',
		'supports'            => [ 'title' ],		
	] );
	register_post_type( 'review-slider', [
		'labels' => [
			'name'               => esc_html__( 'Reviews', 'ministore' ),
			'singular_name'      => esc_html__( 'Review', 'ministore' ),
			'add_new'            => esc_html__( 'Add review', 'ministore' ),
			'add_new_item'       => esc_html__( 'Adding review', 'ministore' ),
			'edit_item'          => esc_html__( 'Edit review', 'ministore' ),
			'new_item'           => esc_html__( 'New review', 'ministore' ),
			'view_item'          => esc_html__( 'View review', 'ministore' ),
		],
		'public'                 => true,
		'menu_position'       => null,
		'menu_icon'           => 'dashicons-testimonial',
		'supports'            => [ 'title' ],		
	] );
}
add_action( 'init', 'ministore_register_post_types' );


/**
 * Create menus using the BEM methodology
 */

class Ministore_Walker_Nav_Menu extends Walker_Nav_Menu {

	// add classes to ul sub-menus
	function start_lvl( &$output, $depth = 0, $args = NULL ) {
		// depth dependent classes
		$indent = ( $depth > 0  ? str_repeat( "\t", $depth ) : '' ); // code indent
		$classes = array( 'menu__submenu', 'submenu' );
		$class_names = implode( ' ', $classes );

		// build html
		$output .= "\n" . '<span class="menu__arrow arrow"></span>' . "\n" . $indent . '<ul class="' . $class_names . '">' . "\n";
	}

	// add main/sub classes to li's and links
	function start_el( &$output, $data_object, $depth = 0, $args = null, $current_object_id = 0 ) {
		global $wp_query;

		// Restores the more descriptive, specific name for use within this method.
		$item = $data_object;

		$indent = ( $depth > 0 ? str_repeat( "\t", $depth ) : '' ); // code indent

		// depth dependent classes
		if ( $args->theme_location === 'header-menu' ) {
			$depth_classes = array( ( $depth == 0 ? 'menu__item' : 'submenu__item' ) );
		} else {
			$depth_classes = array( 'menu-footer__item' );
		}

		$depth_class_names = esc_attr( implode( ' ', $depth_classes ) );

		// build html
		$output .= $indent . '<li class="' . $depth_class_names . '">';

		// link attributes
		$attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
		$attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
		$attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
		$attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : '';

		if ( $args->theme_location === 'header-menu' ) {
			$attributes .= ' class="' . ( $depth > 0 ? 'submenu__link' : 'menu__link' ) . ( $item->current ? ' active' : '' ) . '"';
			
		} else {
			$attributes .= ' class="' . 'menu-footer__link' . '"';
		}

		$item_output = sprintf( '%1$s<a%2$s>%3$s%4$s%5$s</a>%6$s',
			$args->before,
			$attributes,
			$args->link_before,
			apply_filters( 'the_title', $item->title, $item->ID ),
			$args->link_after,
			$args->after
		);

		// build html
		$output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
	}
}

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function ministore_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'ministore_content_width', 640 );
}
add_action( 'after_setup_theme', 'ministore_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function ministore_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Blog sidebar', 'ministore' ),
			'id'            => 'blogsidebar',
			'description'   => esc_html__( 'Add widgets here.', 'ministore' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<div class="block-links__title title title_s">',
			'after_title'   => '</div>',
		)
	);
}
add_action( 'widgets_init', 'ministore_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function ministore_scripts() {
	wp_enqueue_style( 'ministore-style', get_stylesheet_uri(), array(), _S_VERSION );	
	wp_enqueue_script( 'ministore-script', get_template_directory_uri() . '/assets/js/app.js', array(), null, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}	
}
add_action( 'wp_enqueue_scripts', 'ministore_scripts' );

/**
 * Implement the Custom Header feature.
 */
// require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Breadcrumbs
 */
require get_template_directory() . '/inc/breadcrumbs.php';

/**
 * Customizer additions.
 */
// require get_template_directory() . '/inc/customizer.php';

/**
 * Redux Framework.
 */
// require get_template_directory() . '/inc/redux-options.php';

/**
 * Load Jetpack compatibility file.
 */
// if ( defined( 'JETPACK__VERSION' ) ) {
// 	require get_template_directory() . '/inc/jetpack.php';
// }

// Share on social networks
function ministore_get_share($type = 'fb', $permalink = false, $title = false) {
	if (!$permalink) {
		$permalink = get_permalink();
	}
	if (!$title) {
		$title = get_the_title();
	}
	switch ($type) {
		case 'twi':
			return 'http://twitter.com/home?status=' . $title . '+-+' . $permalink;
			break;
		case 'fb':
			return 'http://www.facebook.com/sharer.php?u=' . $permalink . '&t=' . $title;
			break;
		case 'goglp':
			return 'https://plus.google.com/share?url='. urlencode($permalink);
			break;
		case 'pin':
			return 'http://pinterest.com/pin/create/button/?url=' . $permalink;
			break;
		default:
			return '';
	}
}

// Comment function
function ministore_comment( $comment, $args, $depth ) {
	?>
	<div id="comment-<?php comment_ID() ?>">
		<div class="comments__item item-comments<?php echo ( $depth > 1 ) ? ' item-comments_reply' : ''; ?>">

			<div class="item-comments__img">
				<?php
				if ( $args['avatar_size'] != 0 ) {
					echo get_avatar( $comment, $args['avatar_size'] );
				}
				?>
			</div>

			<?php if ( $comment->comment_approved == '0' ) { ?>
				<em class="comment-awaiting-moderation">
					<?php _e( 'Your comment is awaiting moderation.' ); ?>
				</em><br/>
			<?php } ?>

			<div class="item-comments__body">
				<div class="item-comments__head">
					<?php printf( __( '<span>%s</span>' ), get_comment_author_link() ); ?>
					<a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ); ?>">
						<?php
						printf(
							__( '%1$s at %2$s' ), get_comment_date(), get_comment_time() 
						); 
						?>
					</a>
					<?php edit_comment_link( __( '(Edit)' ), '  ', '' ); ?>
				</div>
				<div class="item-comments__text">
					<?php comment_text(); ?>
				</div>
				
				<div class="item-comments__link">
					<?php
					comment_reply_link(
						array_merge(
							$args,
							array(
								'depth'     => $depth,
								'max_depth' => $args['max_depth']
							)
						)
					); 
					?>
				</div>
			</div>
		</div>

	<?php
}
