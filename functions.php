<?php
if ( ! function_exists( 'airvent_setup' ) ) :
	function airvent_setup() {
		load_theme_textdomain( 'airvent', get_template_directory() . '/languages' );
		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'title-tag' );
		add_theme_support( 'post-thumbnails' );
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'airvent' ),
		) );
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );
		add_theme_support( 'custom-background', apply_filters( 'airvent_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );
		add_theme_support( 'customize-selective-refresh-widgets' );
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'airvent_setup' );
function airvent_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'airvent_content_width', 640 );
}
add_action( 'after_setup_theme', 'airvent_content_width', 0 );

/*
 * удаляем со страницы редактирования постов метабокс с рубриками и цитатой
 */
function remove_category_div() {
	remove_meta_box( 'postexcerpt' , 'post' , 'normal' ); // цитата
	remove_meta_box( 'revisionsdiv' , 'post' , 'normal' ); // Редакцииы
}
add_action( 'admin_menu' , 'remove_category_div' );



/* Сайдбар 
function airvent_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'airvent' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'airvent' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}

add_action( 'widgets_init', 'airvent_widgets_init' );

*/
add_action( 'wp_enqueue_scripts', 'theme_name_scripts' );
function theme_name_scripts() {
	wp_enqueue_style( 'libs.min.css', get_template_directory_uri() . '/css/libs.min.css');
	wp_enqueue_style( 'main.min.css', get_template_directory_uri() . '/css/main.min.css');
	wp_enqueue_style( 'media.min.css', get_template_directory_uri() . '/css/media.min.css');
	wp_enqueue_style( 'media.css', get_template_directory_uri() . '/css/media.css');
	wp_enqueue_script( 'libsjs', get_template_directory_uri() . '/js/libs.min.js', array(), '1.0.0', true );
	wp_enqueue_script( 'common', get_template_directory_uri() . '/js/common.js', array(), '1.0.0', true );
}
function airvent_scripts() {
	wp_enqueue_style( 'airvent-style', get_stylesheet_uri() );

	wp_enqueue_script( 'airvent-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'airvent-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'airvent_scripts' );
require get_template_directory() . '/inc/custom-header.php';
require get_template_directory() . '/inc/template-tags.php';
require get_template_directory() . '/inc/template-functions.php';
require get_template_directory() . '/inc/customizer.php';
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

register_nav_menu('Header menu', 'Header menu');


if (function_exists('add_theme_support')) {
	add_theme_support('menus');
}

function change_submenu_class($menu) {  
  $menu = str_replace('class="sub-menu"','class="header__submenu"', $menu);  
  return $menu;  
}  
add_filter('wp_nav_menu','change_submenu_class'); 

## Функция для подсветки слов поиска в WordPress
add_filter('the_content', 'kama_search_backlight');
add_filter('the_excerpt', 'kama_search_backlight');
add_filter('the_title', 'kama_search_backlight');

function kama_search_backlight( $text ){
	// ------------ Настройки -----------
	$st1 = 'color: #000; background: #ffa42f;';
	$st2 = 'color: #000; background: #ffcc66;';
	$st3 = 'color: #000; background: #99ccff;';
	$st4 = 'color: #000; background: #ff9999;';
	$st5 = 'color: #000; background: #FF7EFF;';

	// только для страниц поиска...
	if ( ! is_search() ) return $text;

	$query_terms = get_query_var('search_terms');
	if( empty($query_terms) ) $query_terms = array(get_query_var('s'));
	if( empty($query_terms) ) return $text;

	$n = 0;
	foreach( $query_terms as $term ){
		$n++;
		if ($n==1)    $style = $st1;
		elseif($n==2) $style = $st2;
		elseif($n==3) $style = $st3;
		elseif($n==4) $style = $st4;
		elseif($n==5) $style = $st5;

		$term = preg_quote( $term, '/' );
		$text = preg_replace("@(?<!<|</)($term)@iu","<span style='{$style}'>$1</span>",$text);
	}

	return $text;
}
?>