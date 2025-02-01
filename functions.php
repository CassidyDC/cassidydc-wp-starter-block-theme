<?php
/**
 * Theme Functions
 *
 * @package CassidyDC\WPStarterBlockTheme\Functions
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 * @version 1.0.0
 */

/**
 * Create theme constants.
 *
 * @since 1.0.0
 */
define( 'THEME_VERSION', wp_get_theme()->get( 'Version' ) );
define( 'HANDLE_PREFIX', 'cassidydc' );

/**
 * Sets theme assets config settings
 *
 * @since 1.0.0
 */
require_once get_theme_file_path( 'inc/assets-config.php' );

/**
 * Processes theme assets for registering and enqueueing
 *
 * @since 1.0.0
 */
require_once get_theme_file_path( 'inc/assets-process.php' );

/**
 * Registers theme assets
 *
 * @since 1.0.0
 */
require_once get_theme_file_path( 'inc/assets-register.php' );

/**
 * Enqueues theme assets
 *
 * @since 1.0.0
 */
require_once get_theme_file_path( 'inc/assets-enqueue.php' );

/**
 * Removes unwanted Core WordPress features
 *
 * @since 1.0.0
 */
require_once get_theme_file_path( 'inc/wp-core-cleanup.php' );
