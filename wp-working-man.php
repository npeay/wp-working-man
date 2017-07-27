<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              http://thejumpagency.com
 * @since             1.0.0
 * @package           Wp_Working_Man
 *
 * @wordpress-plugin
 * Plugin Name:       Working Man
 * Plugin URI:        https://github.com/npeay/wp-working-man
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Nick Peay
 * Author URI:        http://thejumpagency.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       wp-working-man
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-wp-working-man-activator.php
 */
function activate_wp_working_man() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-wp-working-man-activator.php';
	Wp_Working_Man_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-wp-working-man-deactivator.php
 */
function deactivate_wp_working_man() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-wp-working-man-deactivator.php';
	Wp_Working_Man_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_wp_working_man' );
register_deactivation_hook( __FILE__, 'deactivate_wp_working_man' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-wp-working-man.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_wp_working_man() {

	$plugin = new Wp_Working_Man();
	$plugin->run();

}
run_wp_working_man();
