<?php

/**
 * Fired during plugin activation
 *
 * @link       https://thierrycharriot.github.io
 * @since      1.0.0
 *
 * @package    Plugin_Demo
 * @subpackage Plugin_Demo/includes
 */

/**
 * Fired during plugin activation.
 *
 * This class defines all code necessary to run during the plugin's activation.
 *
 * @since      1.0.0
 * @package    Plugin_Demo
 * @subpackage Plugin_Demo/includes
 * @author     Thierry Charriot <thierrycharriot@chez.lui>
 */
class Plugin_Demo_Activator {

	/**
	 * Short Description. (use period)
	 *
	 * Long Description.
	 *
	 * @since    1.0.0
	 */
	public static function activate() {
		// https://developer.wordpress.org/reference/functions/wp_insert_post/
		// wp_insert_post( array $postarr, bool $wp_error = false, bool $fire_after_hooks = true ): int|WP_Error
		// Insert or update a post.
		$create_page = array(
			'post_author'	=> 1,
			'post_title'    => 'Demo',
			'post_status'   => 'publish',
			'post_type'		=> 'page',
			'post_name'    	=> 'demo'
		);

		// Insert or update a post
		wp_insert_post( $create_page );
	}

}
