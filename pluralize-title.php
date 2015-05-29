<?php
/*
 * Plugin Name: Pluralize Title
 * Plugin URI:
 * Description: Demo Autoload Third Party Library with Composer by @salcode
 * Version: 0.1.0
 * Author: Sal Ferrarello
 * Author URI: http://salferrarello.com/
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

add_filter( 'the_title', 'fe_pluralize_post_title', 15 );

/**
 * Converts a post title to the plural version of itself
 *
 * @since 0.1.0
 *
 * @param string $title the post title
 *
 * @return string the pluralized version of the input post title
 */
function fe_pluralize_post_title( $title ) {

	// append an 's' to make the title plural
	$title .= 's';

	return $title;
}
