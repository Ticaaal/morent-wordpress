<?php

/**
 * Morent functions and definitions
 *
 * @package morent

 */



if ( ! function_exists( 'morent_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.
 */
function morent_setup() {
 
    /**
     * Make theme available for translation.
     * Translations can be placed in the /languages/ directory.
     */
    load_theme_textdomain( 'morent', get_template_directory() . '/languages' );
 
    /**
     * Add default posts and comments RSS feed links to &lt;head>.
     */
    add_theme_support( 'automatic-feed-links' );
 
    /**
     * Enable support for post thumbnails and featured images.
     */
    add_theme_support( 'post-thumbnails' );
 
    /**
     * Add support for two custom navigation menus.
     */
    register_nav_menus( array(
        'primary'   => __( 'Primary Menu', 'morent' ),
        'secondary' => __('Secondary Menu', 'morent' )
    ) );
 
    /**
     * Enable support for the following post formats:
     * aside, gallery, quote, image, and video
     */
    add_theme_support( 'post-formats', array ( 'aside', 'gallery', 'quote', 'image', 'video' ) );



}
function morent_personnal_style() {
    wp_enqueue_style( 'custom-google-fonts', 'https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap', false );
    wp_enqueue_style('custom-css', get_template_directory_uri( ).'/style.css');
    wp_enqueue_style( 'dashicons' );
	wp_enqueue_script('custom-js', get_template_directory_uri( ).'/js/script.js');
	wp_enqueue_script( 'font-awesome', 'https://kit.fontawesome.com/59750f7ec4.js');

}
add_action('wp_enqueue_scripts', 'morent_personnal_style');

// Register Custom Post Type
function custom_post_type() {

	$labels = array(
		'name'                  => _x( 'cars', 'Post Type General Name', 'morent' ),
		'singular_name'         => _x( 'car', 'Post Type Singular Name', 'morent' ),
		'menu_name'             => __( 'Cars', 'morent' ),
		'name_admin_bar'        => __( 'Cars', 'morent' ),
		'archives'              => __( 'Car Archives', 'morent' ),
		'attributes'            => __( 'Car Attributes', 'morent' ),
		'parent_item_colon'     => __( 'Parent Car:', 'morent' ),
		'all_items'             => __( 'All Cars', 'morent' ),
		'add_new_item'          => __( 'Add New Car', 'morent' ),
		'add_new'               => __( 'Add New', 'morent' ),
		'new_item'              => __( 'New Car', 'morent' ),
		'edit_item'             => __( 'Edit Car', 'morent' ),
		'update_item'           => __( 'Update Car', 'morent' ),
		'view_item'             => __( 'View Car', 'morent' ),
		'view_items'            => __( 'View Cars', 'morent' ),
		'search_items'          => __( 'Search Car', 'morent' ),
		'not_found'             => __( 'Not found', 'morent' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'morent' ),
		'featured_image'        => __( 'Featured Image', 'morent' ),
		'set_featured_image'    => __( 'Set featured image', 'morent' ),
		'remove_featured_image' => __( 'Remove featured image', 'morent' ),
		'use_featured_image'    => __( 'Use as featured image', 'morent' ),
		'insert_into_item'      => __( 'Insert into Car', 'morent' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Car', 'morent' ),
		'items_list'            => __( 'Cars list', 'morent' ),
		'items_list_navigation' => __( 'Cars list navigation', 'morent' ),
		'filter_items_list'     => __( 'Filter Cars list', 'morent' ),
	);
	$rewrite = array(
		'slug'                  => 'cars',
		'with_front'            => true,
		'pages'                 => true,
		'feeds'                 => true,
	);
	$args = array(
		'label'                 => __( 'car', 'morent' ),
		'description'           => __( 'cards', 'morent' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'custom-fields', 'post-formats' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'rewrite'               => $rewrite,
		'capability_type'       => 'page',
	);
	register_post_type( 'cars', $args );

}
add_action( 'init', 'custom_post_type', 0 );

endif; // morent_setup
add_action( 'after_setup_theme', 'morent_setup' );

    