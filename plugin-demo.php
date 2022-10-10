<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://thierrycharriot.github.io
 * @since             1.0.0
 * @package           Plugin_Demo
 *
 * @wordpress-plugin
 * Plugin Name:       Plugin Demo
 * Plugin URI:        https://github.com/thierrycharriot
 * Description:       Demo of WordPress Plugin Boilerplate Generator ( WPPB )
 * Version:           1.0.0
 * Author:            Thierry Charriot
 * Author URI:        https://thierrycharriot.github.io
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       plugin-demo
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'PLUGIN_DEMO_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-plugin-demo-activator.php
 */
function activate_plugin_demo() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-plugin-demo-activator.php';
	Plugin_Demo_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-plugin-demo-deactivator.php
 */
function deactivate_plugin_demo() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-plugin-demo-deactivator.php';
	Plugin_Demo_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_plugin_demo' );
register_deactivation_hook( __FILE__, 'deactivate_plugin_demo' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-plugin-demo.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_plugin_demo() {

	$plugin = new Plugin_Demo();
	$plugin->run();

}
run_plugin_demo();
