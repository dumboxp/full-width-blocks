<?php
/**
 * Plugin Name: Full Width Blocks
 * Plugin URI: https://github.com/dumboxp/full-width-blocks
 * Description: Enable wide and full width Gutenberg blocks of any Wordpress theme
 * Version: 1.1
 * Author: MyScope
 * Author URI: http://www.myscope.net
 * License: GPL2+
 * Text Domain: wide-and-full-width
 * Domain Path: /languages/
 */

// Register support for Gutenberg wide images in your theme
function enable_align_wide() {
  add_theme_support( 'align-wide' );
}
add_action( 'after_setup_theme', 'enable_align_wide' );

// Add CSS
function add_inline_css() {
  wp_enqueue_style( 'align-wide-css', plugins_url() . '/align-wide/css/full-width-blocks.css' );
}
add_action( 'wp_enqueue_scripts', 'add_inline_css' );