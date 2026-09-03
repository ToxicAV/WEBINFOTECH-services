<?php
/**
 * WebInfoTech Home Services — block theme functions.
 *
 * This theme is a genuine WordPress block (FSE) theme: templates and parts
 * are HTML block markup (templates/, parts/), sections are editable block
 * patterns (patterns/), and design tokens live in theme.json. The only
 * custom code here is (1) enqueuing a small support stylesheet for things
 * theme.json can't express, and (2) registering the "WebInfoTech: Estimator"
 * block, a real interactive quote-builder block (plain JS — no build step
 * required to activate or edit it).
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // No direct access.
}

define( 'WEBINFOTECH_THEME_VERSION', '2.0.0' );

/**
 * Theme support.
 */
function WebInfoTech_theme_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_editor_style( 'assets/css/theme.css' );
}
add_action( 'after_setup_theme', 'webInfoTech_theme_setup' );

/**
 * Front-end assets: fonts + the small support stylesheet.
 */
function WebInfoTech_enqueue_assets() {
	wp_enqueue_style( 'WebInfoTech-theme-style', get_stylesheet_uri(), array(), WEBINFOTECH_THEME_VERSION );

	wp_enqueue_style(
		'WebInfoTech-google-fonts',
		'https://fonts.googleapis.com/css2?family=Archivo:wght@500;600;700;800;900&family=IBM+Plex+Sans:wght@400;500;600&display=swap',
		array(),
		null
	);

	wp_enqueue_style(
		'WebInfoTech-theme-support',
		get_template_directory_uri() . '/assets/css/theme.css',
		array(),
		WEBINFOTECH_THEME_VERSION
	);
}
add_action( 'wp_enqueue_scripts', 'WebInfoTech_enqueue_assets' );

/**
 * Favicon + meta description (same as the original site).
 */
function WebInfoTech_head_extras() {
	echo '<link rel="icon" type="image/svg+xml" href="' . esc_url( get_template_directory_uri() . '/assets/img/favicon.svg' ) . '" />' . "\n";
	echo '<meta name="description" content="Meridian connects homeowners with licensed, background-checked electricians, plumbers, HVAC techs, and more. Get an estimate and book in minutes." />' . "\n";
}
add_action( 'wp_head', 'WebInfoTech_head_extras', 1 );

/**
 * Register the custom "Meridian: Estimator" block — the only part of the
 * original site that needs real interactivity (live price calculation).
 * It's a dynamic block: PHP renders the markup, a small vanilla-JS file
 * (no React/build step) drives the interaction, so it can be inserted,
 * removed, or moved in the editor like any other block.
 */
function WebInfoTech_register_blocks() {
	register_block_type( __DIR__ . '/blocks/estimator' );
}
add_action( 'init', 'WebInfoTech_register_blocks' );

/**
 * Custom block category so the Estimator block is easy to find in the
 * block inserter.
 */
function WebInfoTech_block_categories( $categories ) {
	return array_merge(
		array(
			array(
				'slug'  => 'WebInfoTech',
				'title' => __( 'WebInfoTech', 'meridian-home-services' ),
			),
		),
		$categories
	);
}
add_filter( 'block_categories_all', 'meridian_block_categories' );
