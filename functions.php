<?php
/**
 * Wax Store functions and definitions.
 *
 * @package Wax_Store
 */

defined( 'ABSPATH' ) || exit;

if ( ! function_exists( 'waxstore_setup' ) ) {
	/**
	 * Editor styles and bundled translations (WordPress.org language packs take precedence).
	 */
	function waxstore_setup() {
		add_editor_style( 'style.css' );
		load_theme_textdomain( 'wax-store', get_template_directory() . '/languages' );
	}
}
add_action( 'after_setup_theme', 'waxstore_setup' );

if ( ! function_exists( 'waxstore_enqueue_styles' ) ) {
	/**
	 * Front-end stylesheet.
	 */
	function waxstore_enqueue_styles() {
		wp_enqueue_style( 'wax-store', get_stylesheet_uri(), array(), wp_get_theme()->get( 'Version' ) );
	}
}
add_action( 'wp_enqueue_scripts', 'waxstore_enqueue_styles' );

if ( ! function_exists( 'waxstore_block_styles' ) ) {
	/**
	 * "Bin divider" style for groups: the first block becomes a tab on a bar.
	 */
	function waxstore_block_styles() {
		register_block_style(
			'core/group',
			array(
				'name'  => 'divider',
				'label' => __( 'Bin divider', 'wax-store' ),
			)
		);
	}
}
add_action( 'init', 'waxstore_block_styles' );

if ( ! function_exists( 'waxstore_pattern_categories' ) ) {
	/**
	 * Pattern category.
	 */
	function waxstore_pattern_categories() {
		register_block_pattern_category(
			'wax-store',
			array(
				'label'       => __( 'Record shop', 'wax-store' ),
				'description' => __( 'Sections for a record shop: welcome, practical information, bin dividers.', 'wax-store' ),
			)
		);
	}
}
add_action( 'init', 'waxstore_pattern_categories' );

if ( is_admin() ) {
	require get_template_directory() . '/inc/plugin-notice.php';
}
