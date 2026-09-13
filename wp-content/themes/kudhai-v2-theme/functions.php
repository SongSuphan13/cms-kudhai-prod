<?php
/** Theme setup and insurance template assets. */
defined( 'ABSPATH' ) || exit;

require_once __DIR__ . '/inc-mun-lamert.php';

// Hide the WordPress toolbar on the public-facing website.
add_filter( 'show_admin_bar', '__return_false' );

add_action( 'after_setup_theme', function () {
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script' ) );
} );

function kudhai_v2_pages() {
	static $pages = null;
	if ( null === $pages ) {
		$pages = require __DIR__ . '/inc-insurance-pages.php';
	}
	return $pages;
}

function kudhai_v2_set_page( $slug ) {
	$GLOBALS['kudhai_v2_page'] = isset( kudhai_v2_pages()[ $slug ] ) ? $slug : '';
}

function kudhai_v2_current_page() {
	return isset( $GLOBALS['kudhai_v2_page'] ) ? $GLOBALS['kudhai_v2_page'] : '';
}

/** Active state for shared desktop and mobile menu links. */
function kudhai_v2_is_current_menu_page( $slug ) {
	// The contact mock-up maps to the existing WordPress contact-us page.
	$slug = 'contact' === $slug ? 'contact-us' : $slug;
	$slug = 'about' === $slug ? 'about-us' : $slug;
	$slug = 'compensation' === $slug ? 'mun-lamert' : $slug;
	if ( 'index' === $slug ) {
		return is_front_page();
	}
	$current = kudhai_v2_current_page();
	return $current ? $current === $slug : is_page( $slug );
}

/** Public routes; template/config keys stay stable for styling and navigation. */
function kudhai_v2_insurance_routes() {
 return array(
  'claims' => 'services/how-to-claim',
  'insurance' => 'car-insurance',
  'insurance-1' => 'car-insurance/type1',
  'insurance-2' => 'car-insurance/type2',
  'insurance-3' => 'car-insurance/type3',
  'insurance-2plus' => 'car-insurance/2plus',
  'insurance-3plus' => 'car-insurance/3plus',
  'insurance-ev' => 'car-insurance/electric-vehicle',
  'compulsory' => 'car-insurance/compulsory',
 );
}

add_action( 'template_redirect', function () {
 if ( is_admin() || ! in_array( $_SERVER['REQUEST_METHOD'] ?? 'GET', array( 'GET', 'HEAD' ), true ) ) { return; }
 $path = trim( (string) wp_parse_url( wp_unslash( $_SERVER['REQUEST_URI'] ?? '' ), PHP_URL_PATH ), '/' );
 $home_path = trim( (string) wp_parse_url( home_url( '/' ), PHP_URL_PATH ), '/' );
 if ( $home_path && 0 === strpos( $path, $home_path . '/' ) ) { $path = substr( $path, strlen( $home_path ) + 1 ); }
 $routes = kudhai_v2_insurance_routes();
 if ( ! isset( $routes[ $path ] ) ) { return; }
 $target = home_url( '/' . $routes[ $path ] . '/' );
 $query = wp_unslash( $_SERVER['QUERY_STRING'] ?? '' );
 if ( '' !== $query ) { $target .= '?' . $query; }
 wp_safe_redirect( $target, 301 );
 exit;
}, 1 );

/** Resolve published WordPress pages, including sites using plain permalinks. */
function kudhai_v2_page_url( $slug, $fragment = '' ) {
	if ( in_array( $slug, array( 'contact', 'contact-us' ), true ) && 'line' === $fragment ) {
		return 'https://line.me/R/ti/p/%40kudhai';
	}
	// The contact mock-up maps to the existing WordPress contact-us page.
	$slug = 'contact' === $slug ? 'contact-us' : $slug;
	$slug = 'about' === $slug ? 'about-us' : $slug;
	$slug = 'compensation' === $slug ? 'mun-lamert' : $slug;
	if ( 'index' === $slug ) {
		$url = home_url( '/' );
	} else {
		$routes = kudhai_v2_insurance_routes();
		$slug = $routes[ $slug ] ?? $slug;
		$page = get_page_by_path( $slug );
		$url = $page && 'publish' === $page->post_status
			? get_permalink( $page )
			: home_url( '/' . $slug . '/' );
	}
	if ( 'index' === $slug && 'compare' === $fragment ) {
		return kudhai_v2_page_url( 'compare' );
	}
	return $url . ( '' !== $fragment ? '#' . $fragment : '' );
}

add_filter( 'body_class', function ( $classes ) {
	$pages = kudhai_v2_pages();
	$slug = kudhai_v2_current_page();
	if ( isset( $pages[ $slug ] ) ) {
		$classes = array_merge( $classes, explode( ' ', $pages[ $slug ]['classes'] ) );
	}
	return $classes;
} );

add_action( 'wp_enqueue_scripts', function () {
	$pages = kudhai_v2_pages();
	$slug = kudhai_v2_current_page();
	$styles = isset( $pages[ $slug ] ) ? $pages[ $slug ]['styles'] : array( 'pages.css', 'navigation.css' );
	$styles[] = 'site-navigation.css';
	$styles[] = 'insurance-toc.css';
	$styles[] = 'advisor.css';
	$styles[] = 'shared-faq.css';
	$styles[] = 'site-footer.css';
	$previous = array();
	foreach ( $styles as $file ) {
		$handle = 'kudhai-v2-' . basename( $file, '.css' );
		$path = '/assets/css/' . $file;
		wp_enqueue_style( $handle, get_theme_file_uri( $path ), $previous, (string) filemtime( get_theme_file_path( $path ) ) );
		$previous = array( $handle );
	}
	wp_enqueue_style( 'kudhai-v2-theme', get_stylesheet_uri(), $previous, (string) filemtime( get_stylesheet_directory() . '/style.css' ) );
	wp_enqueue_script( 'kudhai-v2-shared-faq', get_theme_file_uri( '/assets/js/shared-faq.js' ), array(), (string) filemtime( get_theme_file_path( '/assets/js/shared-faq.js' ) ), true );
	$navigation_path = '/assets/js/site-navigation.js';
	wp_enqueue_script( 'kudhai-v2-navigation', get_theme_file_uri( $navigation_path ), array(), (string) filemtime( get_theme_file_path( $navigation_path ) ), true );
	if ( 'compare' === $slug ) {
		wp_enqueue_script( 'kudhai-v2-compare', get_theme_file_uri( '/assets/js/compare.js' ), array(), (string) filemtime( get_theme_file_path( '/assets/js/compare.js' ) ), true );
	}
	if ( 'home-v2' === $slug ) {
		$path = '/assets/js/home-v2.js';
		wp_enqueue_script( 'kudhai-v2-home', get_theme_file_uri( $path ), array(), (string) filemtime( get_theme_file_path( $path ) ), true );
	}
	if ( 'insurance' === $slug ) {
		$path = '/assets/js/insurance-overview.js';
		wp_enqueue_script( 'kudhai-v2-insurance', get_theme_file_uri( $path ), array(), (string) filemtime( get_theme_file_path( $path ) ), true );
	}
} );
