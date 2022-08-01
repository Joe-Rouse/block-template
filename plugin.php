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

// Render our block on the frontend.
function render_gutenberg_test_block() {
  $wrapper_attributes = get_block_wrapper_attributes();
  return sprintf('<p %1$s>My Test Block</p>', $wrapper_attributes);
}

// Register our block.
function bb_render_block_gutenberg_test() {
	register_block_type_from_metadata(
		__DIR__ . '/block.json',
		[
			'render_callback' => 'render_gutenberg_test_block',
		]
	);
}
add_action( 'init', 'bb_render_block_gutenberg_test', 2 );