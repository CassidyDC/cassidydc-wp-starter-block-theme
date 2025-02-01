<?php
/**
 * Configuration functions to set assets properties
 *
 * @package CassidyDC\WPStarterBlockTheme\Functions
 * @version 1.0.0
 */

declare( strict_types = 1 );
namespace CassidyDC\WPStarterBlockTheme;

/**
 * Sets theme assets properties
 *
 * Configurable asset properties: `file|cat|handle|deps|(media|args)`.
 *
 * @since 1.0.0
 * @param string $asset_type The type of asset being retrieved: `style|script|editor_ui_style|editor_ui_script`.
 * @return array<string[]> A list of assets properties.
 */
function get_theme_assets_config( string $asset_type ): array {
	// Theme stylesheet assets configuration settings: `file|handle|deps|media`.
	$styles_config = [
		'type'   => 'style',
		'assets' => [
			[
				'file' => 'screen.css',
			],
		],
	];

	// Theme script asset configuration settings: `file|cat|handle|deps|args`.
	$scripts_config = [
		'type'   => 'script',
		'assets' => [
			[
				'file' => 'script.js',
			],
		],
	];

	// Editor UI stylesheet asset configuration settings: `file|handle|deps|media`.
	$editor_ui_styles_config = [
		'type'   => 'editor_ui_style',
		'assets' => [],
	];

	// Editor UI script asset configuration settings: `file|handle|deps|args`.
	$editor_ui_scripts_config = [
		'type'   => 'editor_ui_script',
		'assets' => [
			[
				'file' => 'editor.js',
			],
		],
	];

	// Sets which config settings to return.
	$assets_config = match ( $asset_type ) {
		'styles'            => $styles_config,
		'scripts'           => $scripts_config,
		'editor_ui_styles'  => $editor_ui_styles_config,
		'editor_ui_scripts' => $editor_ui_scripts_config,
		default => [],
	};

	return process_theme_assets( $assets_config );
}

/**
 * Sets editor stylesheets properties for `add_editor_style()`
 *
 * Configurable asset properties: `file`.
 *
 * @since 1.0.0
 * @return array<string[]> A multidimensional array of editor stylesheet properties.
 */
function get_editor_styles_config(): array {
	$editor_styles_config = [
		[
			'file' => 'editor.css',
		],
	];

	return process_editor_styles( $editor_styles_config );
}

/**
 * Sets block pattern categories properties
 *
 * @since 1.0.0
 * @return array<string[]> A multidimensional array of block pattern categories properties.
 */
function get_block_pattern_categories_config(): array {
	return [
		'boxes'    => [
			'label'       => __( 'Boxes', 'cassidydc-wp-starter-block-theme' ),
			'description' => __( 'A collection of box patterns.', 'cassidydc-wp-starter-block-theme' ),
		],
		'heroes'   => [
			'label'       => __( 'Heroes', 'cassidydc-wp-starter-block-theme' ),
			'description' => __( 'A collection of header heroes patterns.', 'cassidydc-wp-starter-block-theme' ),
		],
		'pages'    => [
			'label'       => __( 'Pages', 'cassidydc-wp-starter-block-theme' ),
			'description' => __( 'A collection of of full page layouts.', 'cassidydc-wp-starter-block-theme' ),
		],
		'sections' => [
			'label'       => __( 'Sections', 'cassidydc-wp-starter-block-theme' ),
			'description' => __( 'A collection of page sections.', 'cassidydc-wp-starter-block-theme' ),
		],
	];
}

/**
 * Sets individual block stylesheets properties
 *
 * Properties are auto-generated with `process_block_styles()`. Nothing to configure here.
 *
 * @since 1.0.0
 * @return mixed[] List of individual block stylesheet properties.
 */
function get_block_styles_config(): array {
	return process_block_styles();
}
