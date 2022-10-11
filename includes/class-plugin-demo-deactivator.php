<?php

/**
 * Fired during plugin deactivation
 *
 * @link       https://thierrycharriot.github.io
 * @since      1.0.0
 *
 * @package    Plugin_Demo
 * @subpackage Plugin_Demo/includes
 */

/**
 * Fired during plugin deactivation.
 *
 * This class defines all code necessary to run during the plugin's deactivation.
 *
 * @since      1.0.0
 * @package    Plugin_Demo
 * @subpackage Plugin_Demo/includes
 * @author     Thierry Charriot <thierrycharriot@chez.lui>
 */
class Plugin_Demo_Deactivator {

	/**
	 * Short Description. (use period)
	 *
	 * Long Description.
	 *
	 * @since    1.0.0
	 */
	public static function deactivate() {
        // https://developer.wordpress.org/reference/classes/wpdb
        // class wpdb {}
        // WordPress database access abstraction class.
        global $wpdb;

        $datas = $wpdb->get_row(
            $wpdb->prepare(
                "SELECT ID from wp_posts WHERE post_name = %s",
                'demo'
            )
        );
        //var_dump($datas); die();  // OK

        $page_id = $datas->ID;
        if ( $page_id > 0 ) {
            // https://developer.wordpress.org/reference/functions/wp_delete_post/
            // wp_delete_post( int $postid, bool $force_delete = false ): WP_Post|false|null
            // Trash or delete a post or page.
            wp_delete_post( $page_id, true );
        }
	}
	
}
