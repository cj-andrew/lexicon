<?php
/**
 * @package    Lexicon
 * @author     Solidgoldextra <james@solidgoldextra.com>
 * @copyright  Copyright (c) 2014, Solidgoldextra
 * @link       http://solidgoldextra.com/themes/lexicon
 * @license    http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 */

/* Always set up theme on the `after_setup_theme` hook. */
add_action( 'after_setup_theme', 'lexicon_theme_setup' );

/**
 * Theme setup function.  This is where the theme should register things like headers and add its 
 * callback functions for action/filter hooks.
 *
 * @since  1.0.0
 * @access public
 * @return void
 */
function lexicon_theme_setup() {

	/*
	 * Add a custom background to overwrite the defaults.
	 *
	 * @link http://codex.wordpress.org/Custom_Backgrounds
	 */
	add_theme_support(
		'custom-background',
		array(
			'default-color' => 'd3d3d3',
			'default-image' => '%2$s/images/backgrounds/lexicon.png',
		)
	);

	/*
	 * Add a custom header to overwrite the defaults. 
	 *
	 * @link http://codex.wordpress.org/Custom_Headers
	 */
	add_theme_support( 
		'custom-header', 
		array(
			'default-text-color' => '000000',
			'default-image'      => '',
			'random-default'     => false,
		)
	);



	/*
	 * See the `lexicon_header_icon()` function below.  
	 */
	add_filter( 'theme_mod_header_icon', 'lexicon_header_icon' );

	/*
	 * See the `lexicon_color_menu` function below.  
	 */
	add_filter( 'theme_mod_color_menu', 'lexicon_color_menu' );

	/*
	 * See the `lexicon_color_primary` function below.  
	 */
	add_filter( 'theme_mod_color_primary', 'lexicon_color_primary' );
}

/**
 * This works just like the WordPress `register_default_headers()` function.  You're just setting up an 
 * array of backgrounds.  The following backgrounds are merely examples from the parent theme.  Please 
 * don't use them.  Use your own backgrounds.  Or, remove this section (and the `add_filter()` call earlier) 
 * if you don't want to register custom backgrounds.
 *
 * Note: Background thumbnail sizes should be 230x78.
 *
 * @since  1.0.0
 * @access public
 * @param  array  $backgrounds
 * @return array
 */
function lexicon_default_backgrounds( $backgrounds ) {

	$new_backgrounds = array(
		'example-1' => array(
			'url'           => '%2$s/images/backgrounds/lexicon.png',
			'thumbnail_url' => '%2$s/images/backgrounds/lexicon-thumb.png',
		),
		
	);

	return array_merge( $new_backgrounds, $backgrounds );
}

/**
 * Change the default header icon option.  Users can overwrite this from the theme customizer, so we want 
 * to make sure to check that the value is set to 'default' before returning our custom icon.  If you want 
 * to use the parent theme's default, remove this section of the code and the `add_filter()` call from 
 * earlier.  Otherwise, plug in the icon handle for the icon you'd like to use (the below is the parent 
 * theme default).
 *
 * Note: Icons are handled by the Font Awesome font.  You can use any icon from this font by changing the 
 * icon name from 'fa-iconname' to 'icon-iconname'.  You can find all available icons via the Font Awesome 
 * page: http://fontawesome.io/icons
 *
 * @since  1.0.0
 * @access public
 * @param  string  $hex
 * @return string
 *
function lexicon_header_icon( $icon ) {
	return 'default' === $icon ? 'icon-pencil-square-o' : $icon;
}

/**
 * Add a default custom color for the theme's "menu" color option.  Users can overwrite this from the 
 * theme customizer, so we want to make sure to check that there's no value before returning our custom 
 * color.  If you want to use the parent theme's default, remove this section of the code and the 
 * `add_filter()` call from earlier.  Otherwise, just plug in the 6-digit hex code for the color you'd like 
 * to use (the below is the parent theme default).
 *
 * @since  1.0.0
 * @access public
 * @param  string  $hex
 * @return string
 */
function lexicon_color_menu( $hex ) {
	return $hex ? $hex : '578bdb';
}

/**
 * Add a default custom color for the theme's "primary" color option.  Users can overwrite this from the 
 * theme customizer, so we want to make sure to check that there's no value before returning our custom 
 * color.  If you want to use the parent theme's default, remove this section of the code and the 
 * `add_filter()` call from earlier.  Otherwise, just plug in the 6-digit hex code for the color you'd like 
 * to use (the below is the parent theme default).
 *
 * @since  1.0.0
 * @access public
 * @param  string  $hex
 * @return string
 */
function lexicon_color_primary( $hex ) {
	return $hex ? $hex : '578bdb';
}
