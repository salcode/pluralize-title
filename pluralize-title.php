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

$loader = require 'vendor/autoload.php';

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

	// make the title plural
	$title = Doctrine\Common\Inflector\Inflector::pluralize( $title );

	return $title;
}
