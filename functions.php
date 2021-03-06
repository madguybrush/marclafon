<?php
/**
 * marclafon functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package marclafon
 */

if ( ! function_exists( 'marclafon_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function marclafon_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on marclafon, use a find and replace
		 * to change 'marclafon' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'marclafon', get_template_directory() . '/languages' );

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

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'marclafon' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'marclafon_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'marclafon_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function marclafon_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'marclafon_content_width', 640 );
}
add_action( 'after_setup_theme', 'marclafon_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function marclafon_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'marclafon' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'marclafon' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'marclafon_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function marclafon_scripts() {
    
    /*css files*/
    
    wp_enqueue_style( 'marclafon-animateCss', get_template_directory_uri() . '/animate.css',false,null,'all');
     wp_enqueue_style( 'marclafon-normalizeCss', get_template_directory_uri() . '/normalize.css',false,null,'all');
     wp_enqueue_style( 'marclafon-swiperCss', get_template_directory_uri() . '/swiper/css/swiper.min.css',false,null,'all');
    wp_enqueue_style( 'marclafon-bootstrapCss', get_template_directory_uri() . '/bootstrap/css/bootstrap.min.css',false,null,'all');
    
	wp_enqueue_style( 'marclafon-style', get_stylesheet_uri() );
    //wp_enqueue_style( 'dash', '/wp-includes/css/dashicons.min.css?ver=4.8.3');
    
    /*js*/
    
        wp_enqueue_script( 'marclafon-Jquery', get_template_directory_uri() . '/js/jquery-3.2.1.min.js', array(), null, true );
    
    
      wp_enqueue_script( 'marclafon-imagesLoaded', get_template_directory_uri() . '/js/imagesloaded.pkgd.min.js', array(), null, true );
    
     wp_enqueue_script( 'marclafon-masonry', get_template_directory_uri() . '/js/masonry.pkgd.min.js', array(), null, true );
    
    wp_enqueue_script( 'marclafon-bootstrapJS', get_template_directory_uri() . '/bootstrap/js/bootstrap.min.js', array(), null, true );
    
     wp_enqueue_script( 'marclafon-swiper', get_template_directory_uri() . '/swiper/js/swiper.min.js', array(), null, true );
    
         wp_enqueue_script( 'marclafon-script', get_template_directory_uri() . '/js/script.js', array(), null, true );
    
	wp_enqueue_script( 'marclafon-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'marclafon-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'marclafon_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}



/**
* Add a custom link to the end of a specific menu that uses the wp_nav_menu() function
*/

/*
add_filter('wp_nav_menu_items', 'add_behance_link', 10, 2);
function add_behance_link($items, $args){
    if( $args->theme_location == 'menu-1' ){
        $path = get_stylesheet_directory_uri() .'/img/behance.png';
        //echo $path;
        $items .= '<li><a href="https://www.behance.net/marclafon" target="blank"><img class="logobehance" src="'.$path.'" /></a></li>';
        
        
    }
    return $items;
}*/



/**********https://stackoverflow.com/questions/11248628/disable-wordpress-from-adding-p-tags**********/
remove_filter( 'the_content', 'wpautop' );
remove_filter( 'the_excerpt', 'wpautop' );


/**************gestion class active du menu*****************/
add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);

function special_nav_class ($classes, $item) {
    if (in_array('current-menu-item', $classes) ){
        $classes[] = 'active ';
    }
    return $classes;
}


/******************* recovering current template************/

add_filter( 'template_include', 'var_template_include', 1000 );
function var_template_include( $t ){
    $GLOBALS['current_theme_template'] = basename($t);
    return $t;
}

function get_current_template( $echo = false ) {
    if( !isset( $GLOBALS['current_theme_template'] ) )
        return false;
    if( $echo )
        echo $GLOBALS['current_theme_template'];
    else
        return $GLOBALS['current_theme_template'];
}


/******************* image gallery metadata************/

function get_post_gallery_images_with_info($postvar = NULL) {
    if(!isset($postvar)){
        global $post;
        $postvar = $post;//if the param wasnt sent
    }


    $post_content = $postvar->post_content;
    if (preg_match('/\[gallery.*ids=.(.*).\]/', $post_content, $ids)){
    $images_id = explode(",", $ids[1]); //we get the list of IDs of the gallery as an Array


    $image_gallery_with_info = array();
    //we get the info for each ID
    foreach ($images_id as $image_id) {
        $attachment = get_post($image_id);
        array_push($image_gallery_with_info, array(
            'alt' => get_post_meta($attachment->ID, '_wp_attachment_image_alt', true),
            'caption' => $attachment->post_excerpt,
            'description' => $attachment->post_content,
            'href' => get_permalink($attachment->ID),
            'src' => $attachment->guid,
            'title' => $attachment->post_title
                )
        );
    }
    return $image_gallery_with_info;
     } else {
        return null;
    }
    
}


