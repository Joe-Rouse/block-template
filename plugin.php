<?php
/**
 * Plugin Name:       Gutenberg Test Block
 * Description:       
 * Version:           1.0
 * Requires at least: 5.5
 * Requires PHP:      7.4
 * Author:            Big Bite
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Update URI:        https://example.com/my-plugin/
 * Text Domain:       
 */

 // Include our render function.
require_once ( __DIR__ . '/inc/render.php' );

// Enqueue any assets required by the block editor.
function bb_enqueue_editor_assets() {
  wp_enqueue_script(
    'gutenberg-test-block-script',
    plugins_url( 'gutenberg-test/dist/editor.js', ),
    [ 'wp-blocks', 'wp-i18n', 'wp-element', 'wp-plugins', 'wp-edit-post' ],
    filemtime( plugin_dir_path( __FILE__ ) . 'dist/editor.js' )
  );

  wp_enqueue_style(
    'gutenberg-test-block-style',
    plugins_url( 'gutenberg-test/dist/editor.css', ),
    [],
    filemtime( plugin_dir_path( __FILE__ ) . 'dist/editor.css' )
  );
}

add_action( 'enqueue_block_editor_assets', 'bb_enqueue_editor_assets');

// Enqueue any assets for the frontend.
function enqueue_frontend_assets(){
  wp_enqueue_script(
    'gutenberg-test-block-frontend-script',
    plugins_url( 'gutenberg-test/dist/frontend.js', ),
    [],
    filemtime( plugin_dir_path( __FILE__ ) . 'dist/frontend.js' )
  );

  wp_enqueue_style(
    'gutenberg-test-block-frontend-style',
    plugins_url( 'gutenberg-test/dist/frontend.css', ),
    [],
    filemtime( plugin_dir_path( __FILE__ ) . 'dist/frontend.css' )
  );
}

add_action('wp_enqueue_scripts', 'enqueue_frontend_assets');

// Register our block.
function bb_render_block_gutenberg_test() {
	register_block_type_from_metadata(
		__DIR__ . '/inc/block.json',
		[
			'render_callback' => 'render_gutenberg_test_block',
		]
	);
}
add_action( 'init', 'bb_render_block_gutenberg_test', 2 );
