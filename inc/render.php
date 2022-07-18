<?php 

function render_gutenberg_test_block() {
  $wrapper_attributes = get_block_wrapper_attributes();
  return sprintf('<p %1$s>Test</p>', $wrapper_attributes);
}
