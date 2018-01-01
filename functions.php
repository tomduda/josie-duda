<?php
/**
 * joshua main theme functions and definitions
 *
 * @package joshua
 */

/**
 * For child theme authors: To disable the styles and layouts from joshua properly, 
 * add the following code to your child theme functions.php file:
 *
 * <?php
 * add_action( 'wp_enqueue_scripts', 'dequeue_parent_theme_styles', 11 );
 * function dequeue_parent_theme_styles() {
 *     wp_dequeue_style( 'joshua-parent-style' );
 *     wp_dequeue_style( 'joshua-layout' );
 * }
 *
 */

if ( ! function_exists( 'joshua_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function joshua_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on joshua, use a find and replace
	 * to change 'joshua' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'joshua', get_template_directory() . '/languages' );
        
        /**
        * Set the content width based on the theme's design and stylesheet.
        */
        if ( ! isset( $content_width ) ) {
               $content_width = 700; /* pixels */
        }
        
        // This theme styles the visual editor to resemble the theme style.
        $font_url = '//fonts.googleapis.com/css?family=Roboto|Roboto+Condensed|Alegreya:700';
        add_editor_style( array( 'inc/editor-style.css', str_replace( ',', '%2C', $font_url ) ) );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );
        // Featured image sizes for resesponsive display
        add_image_size('large-thumb', 1060, 650, true);
        add_image_size('medium-thumb', 800, 490);
        add_image_size('small-thumb', 400, 245);
        // Featured image size for small image in archives
        add_image_size('index-thumb', 780, 250, true);

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu'),
		'secondary' => __('Secondary Menu'),
                'social' => __( 'Social Menu'),
	) );

	// Enable support for Post Formats.
	add_theme_support( 'post-formats', array( 'aside','gallery', 'link' ) );

	// Setup the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'joshua_custom_background_args', array(
		'default-color' => 'b2b2b2',
		'default-image' => get_template_directory_uri() . '/images/pattern.svg',
	) ) );

	// Enable support for HTML5 markup.
	add_theme_support( 'html5', array(
		'comment-list',
		'search-form',
		'comment-form',
		'gallery',
                'caption',
	) );
}
endif; // joshua_setup
add_action( 'after_setup_theme', 'joshua_setup' );

/**
 * Register widgetized area and update sidebar with default widgets.
 */
function joshua_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'joshua' ),
		'id'            => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
        
        register_sidebar( array(
		'name'          => __( 'Footer Widgets', 'joshua' ),
                'description'   => __( 'Footer widgets area appears, not surprisingly, in the footer of the site.', 'joshua' ),
		'id'            => 'sidebar-2',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
}
add_action( 'widgets_init', 'joshua_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function joshua_scripts_main() {
        
        // Get the current layout setting (sidebar left or right)
        $joshua_layout = get_option( 'layout_setting' );

        // Load parent theme stylesheet even when child theme is active
        if ( is_child_theme() ) {
                wp_enqueue_style( 'joshua-parent-style', trailingslashit( get_template_directory_uri() ) . 'style.css' );
        } else {
                wp_enqueue_style( 'joshua-style', get_stylesheet_uri() );
                
        }

        if (is_page_template('page-templates/page-nosidebar.php') || ! is_active_sidebar( 'sidebar-1' )) {
            wp_enqueue_style( 'joshua-layout' , get_template_directory_uri() . '/layouts/no-sidebar.css' );
        } elseif ( $joshua_layout == 'left-sidebar' ) {
            wp_enqueue_style( 'joshua-layout' , get_template_directory_uri() . '/layouts/sidebar-content.css' );
        } else {
            wp_enqueue_style( 'joshua-layout' , get_template_directory_uri() . '/layouts/content-sidebar.css' );

        }

        // Load child theme stylesheet
        if ( is_child_theme() ) {
                wp_enqueue_style( 'joshua-style', get_stylesheet_uri() );
        }

        // Lato http://www.google.com/fonts/specimen/Lato + PT Serif http://www.google.com/fonts/specimen/PT+Serif
        wp_enqueue_style( 'joshua-google-fonts', '//fonts.googleapis.com/css?family=Roboto|Roboto+Condensed|Alegreya:700' );
        
        // FontAwesome
        wp_enqueue_style('joshua_fontawesome',  '//maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css"');

	wp_enqueue_script( 'joshua-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );
        
        wp_enqueue_script( 'joshua-search', get_template_directory_uri() . '/js/hide-search.js', array(), '20120206', true );
        
        wp_enqueue_script( 'joshua-superfish', get_template_directory_uri() . '/js/superfish.min.js', array('jquery'), '20140328', true );
        
        wp_enqueue_script( 'joshua-superfish-settings', get_template_directory_uri() . '/js/superfish-settings.js', array('jquery'), '20140328', true );
        
        wp_enqueue_script( 'joshua-masonry', get_template_directory_uri() . '/js/masonry-settings.js', array('masonry'), '20140401', true );
        
        wp_enqueue_script( 'joshua-enquire', get_template_directory_uri() . '/js/enquire.min.js', false, '20140429', true );
        
        wp_enqueue_script( 'joshua-picturefill', get_template_directory_uri() . '/js/picturefill.min.js', false, '20140512', false );


 wp_enqueue_script('joshua-script' , get_stylesheet_directory_uri()  . '/js/joshua_scripts.js', array('jquery'), '20150803');


       // wp_enqueue_script( 'jquery-apps', get_template_directory_uri() . '/js/jquery-apps.js', false, '20150101', false );
       // wp_enqueue_script('joshua-top-menu' ,get_template_directory_uri()  . '/js/stick-to-top-menu.js', array('jquery'), '20150803');

// wp_enqueue_script( 'lander-scripts', get_stylesheet_directory_uri() . '/js/landerscripts.js', array('jquery'), '20140602', false);
                
        if (is_single() || is_author() ) {
            	wp_enqueue_script( 'joshua-hide', get_template_directory_uri() . '/js/hide.js', array('jquery'), '20140310', true );
        }

	wp_enqueue_script( 'joshua-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'joshua_scripts_main' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

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


// Functions for front page

# FUNCTION 1: replace the default "le.v. a rep.y" heading

function change_comment_title ($arg) {

  $arg['title_reply'] = __('Have your say' );

  return $arg;

}

add_filter('comment_form_defaults','change_comment_title');



# FUNCTION 2: replace the default "em.il add.ess is not pub.ish.d" text

function change_emailnote ($arg) {

  $arg['comment_notes_before'] = __('<p class="comment-notes">' . __( 'email address is not displayed.' ) . ( $req ? $required_text : '' ) . '</p>');

  return $arg;

}

add_filter('comment_form_defaults','change_emailnote');



/* 

 This is the functions file for the Joshua-Duda child theme

 */

function joshua_scripts(){

    if(is_front_page()){

        wp_enqueue_style('joshua-styles', get_stylesheet_directory_uri()  . '/joshua-style.css');

       
        wp_enqueue_script('joshua-script' , get_stylesheet_directory_uri()  . '/js/joshua_scripts.js', array('jquery'), '20150803');




       wp_enqueue_script("jquery");

    }

     

}

function my_add_frontend_scripts() {
        wp_enqueue_script('jquery');
        wp_enqueue_script('jquery-ui-core');
}
add_action('wp_enqueue_scripts', 'my_add_frontend_scripts');


wp_enqueue_script('parallax_script' , get_stylesheet_directory_uri()  . '/js/parallax.js');


add_action('wp_enqueue_scripts', 'joshua_scripts');
add_image_size('testimonial-mug', 253,253,true);

// prevent testimonials from displaying in blog posts


function exclude_testimonials( $query){

    if(!$query->is_catagory('testimonials') && $query->is_main_query()){

        $query->set('cat','-15');

    }

}

add_action('pre_get_posts', 'exclude_testimonials');