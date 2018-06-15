<?php 
if ( ! file_exists( get_template_directory() . '/includes/boostrap-walker.php' ) ) {
	// file does not exist... return an error.
	return new WP_Error( 'class-wp-bootstrap-navwalker-missing', __( 'It appears the boostrap-walker.php file may be missing.', 'wp-bootstrap-navwalker' ) );
} else {
	// file exists... require it.
	require_once get_template_directory() . '/includes/boostrap-walker.php';
}
require_once('includes/basic.php');