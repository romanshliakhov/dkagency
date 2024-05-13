<?php

if ( ! defined( '_S_VERSION' ) ) {
	define( '_S_VERSION', '1.0.0' );
}

function connect__assets() {
	wp_enqueue_style( 'main_style', get_stylesheet_directory_uri() . '/assets/css/style.css', array(), _S_VERSION );
	wp_enqueue_script( 'main_script', get_template_directory_uri() . '/assets/js/main.js', array(), _S_VERSION, true );
}

add_action( 'wp_enqueue_scripts', 'connect__assets' );

// ajax js start
function add_ajax_scripts() {
	wp_enqueue_script( 'my-ajax-handle', get_template_directory_uri() . '/ajax-filter.js', array() );
	wp_localize_script( 'my-ajax-handle', 'ajax_object', array( 'ajax_url' => admin_url( 'admin-ajax.php' ) ) );
}

add_action( 'wp_enqueue_scripts', 'add_ajax_scripts' );
// ajax js end


function theme_setup() {
	add_theme_support( 'post-thumbnails' );
}

add_action( 'after_setup_theme', 'theme_setup' );


function create_technologies_post_type() {
	register_post_type( 'technologies', array(
		'labels'      => array(
			'name'               => __( "Технологии" ),
			'singular_name'      => __( 'Технология' ),
			'add_new'            => __( 'Добавить технологию' ),
			'add_new_item'       => __( 'Добавить новую технологию' ),
			'edit_item'          => __( 'Редактировать технологию' ),
			'new_item'           => __( 'Новая технология' ),
			'view_item'          => __( 'Просмотр технологии' ),
			'search_items'       => __( 'Искать технологии' ),
			'not_found'          => __( 'Технологии не найдены' ),
			'not_found_in_trash' => __( 'В корзине технологии не найдены' ),
			'all_items'          => __( 'Все технологии' ),
			'menu_name'          => __( 'Технологии' )
		),
		'public'      => true,
		'has_archive' => true,
		'rewrite'     => array( 'slug' => 'technologies' ),
		'supports'    => array( 'title', 'thumbnail' ),
		'menu_icon'   => 'dashicons-hammer'
	) );
}

add_action( 'init', 'create_technologies_post_type' );


function change_post_labels() {
	global $wp_post_types;
	$post_object = $wp_post_types['post'];

	$post_object->labels->name               = __( 'Наша команда' );
	$post_object->labels->singular_name      = __( 'Разработчик' );
	$post_object->labels->add_new            = __( 'Добавить разработчика' );
	$post_object->labels->add_new_item       = __( 'Добавить разработчика' );
	$post_object->labels->edit_item          = __( 'Редактировать разработчика' );
	$post_object->labels->new_item           = __( 'Новый разработчик' );
	$post_object->labels->view_item          = __( 'Просмотреть разработчика' );
	$post_object->labels->search_items       = __( 'Искать разработчика' );
	$post_object->labels->not_found          = __( 'Разработчики не найдены' );
	$post_object->labels->not_found_in_trash = __( 'В корзине разработчика не найдены' );
	$post_object->labels->all_items          = __( 'Все разработчики' );
	$post_object->labels->menu_name          = __( 'Наша команда' );
	$post_object->labels->name_admin_bar     = __( 'Разработчика' );

	add_theme_support( 'post-thumbnails' );
}

add_action( 'init', 'change_post_labels' );

function change_post_icon() {
	global $menu;
	$icon_class = 'dashicons-groups';
	foreach ( $menu as $key => $value ) {
		if ( $menu[ $key ][2] == 'edit.php' ) {
			$menu[ $key ][6] = $icon_class;
		}
	}
}

add_action( 'admin_menu', 'change_post_icon' );

function remove_post_taxonomies() {
	unregister_taxonomy_for_object_type( 'category', 'post' );
	unregister_taxonomy_for_object_type( 'post_tag', 'post' );
}

add_action( 'init', 'remove_post_taxonomies' );


function create_custom_post_projects() {
	$args = array(
		'labels' => array(
			'name'               => __( 'Наши проекты' ),
			'singular_name'      => __( 'Проект' ),
			'menu_name'          => __( 'Наши проекты' ),
			'name_admin_bar'     => __( 'Проект' ),
			'add_new'            => __( 'Добавить новый' ),
			'add_new_item'       => __( 'Добавить новый проект' ),
			'new_item'           => __( 'Новый проект' ),
			'edit_item'          => __( 'Редактировать проект' ),
			'view_item'          => __( 'Просмотреть проект' ),
			'all_items'          => __( 'Все проекты' ),
			'search_items'       => __( 'Искать проекты' ),
			'parent_item_colon'  => __( 'Родительский проект:' ),
			'not_found'          => __( 'Проекты не найдены' ),
			'not_found_in_trash' => __( 'В корзине проектов не найдено' ),
		),

		'public'      => true,
		'has_archive' => true,
		'supports'    => array( 'title', 'thumbnail', 'galery' ),
		'menu_icon'   => 'dashicons-portfolio'
	);

	register_post_type( 'projects', $args );
}

add_action( 'init', 'create_custom_post_projects' );

function create_project_taxonomies() {
	$labels = array(
		'name'              => __( 'Категории проектов' ),
		'singular_name'     => __( 'Категория проекта' ),
		'search_items'      => __( 'Искать категории проектов' ),
		'all_items'         => __( 'Все категории проектов' ),
		'parent_item'       => __( 'Родительская категория проекта' ),
		'parent_item_colon' => __( 'Родительская категория проекта:' ),
		'edit_item'         => __( 'Изменить категорию проекта' ),
		'update_item'       => __( 'Обновить категорию проекта' ),
		'add_new_item'      => __( 'Добавить новую категорию проекта' ),
		'new_item_name'     => __( 'Название новой категории проекта' ),
		'menu_name'         => __( 'Категории проектов' ),
	);

	$args = array(
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'project-category' ),
	);

	register_taxonomy( 'project_category', array( 'projects' ), $args );
}

add_action( 'init', 'create_project_taxonomies', 0 );


function register_my_menus() {
	register_nav_menus(
		array(
			'main_nav'   => __( 'Основное меню' ),
			'footer_nav' => __( 'Меню футера' )
		)
	);
}

add_action( 'after_setup_theme', 'register_my_menus' );


function disable_plugin_updates( $value ) {
	if ( isset( $value ) && is_object( $value ) ) {
		if ( isset( $value->response ) && is_array( $value->response ) ) {
			foreach ( $value->response as $plugin => $data ) {
				unset( $value->response[ $plugin ] );
			}
		}
	}

	return $value;
}

add_filter( 'site_transient_update_plugins', 'disable_plugin_updates' );

function remove_head_scripts() {
	remove_action( 'wp_head', 'wp_print_scripts' );
	remove_action( 'wp_head', 'wp_print_head_scripts', 9 );
	remove_action( 'wp_head', 'wp_enqueue_scripts', 1 );
	remove_action( 'wp_head', 'wp_print_styles', 99 );
	remove_action( 'wp_head', 'wp_enqueue_style', 99 );

	add_action( 'wp_footer', 'wp_print_scripts', 5 );
	add_action( 'wp_footer', 'wp_enqueue_scripts', 5 );
	add_action( 'wp_footer', 'wp_print_head_scripts', 5 );
	add_action( 'wp_head', 'wp_print_styles', 30 );
	add_action( 'wp_head', 'wp_enqueue_style', 30 );

	wp_dequeue_style( 'wp-block-library' );
	wp_dequeue_style( 'global-styles' );
	wp_dequeue_style( 'classic-theme-styles' );

	wp_deregister_style( 'classic-theme-styles' );
}

add_action( 'wp_enqueue_scripts', 'remove_head_scripts' );


// options ACF
if ( function_exists( 'acf_add_options_sub_page' ) ) {
	acf_add_options_sub_page();
}

//  helpers
load_template( get_template_directory() . '/helpers/contactFormHooks.php', true );
// load_template( get_template_directory() . '/helpers/string_translates.php', true );
load_template( get_template_directory() . '/components/main_top.php', true );
load_template( get_template_directory() . '/components/ajax-projects.php', true );

