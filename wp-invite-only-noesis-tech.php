<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              http://www.noesis.tech
 * @since             1.0.0
 * @package           Wp_Invite_Only_Noesis_Tech
 *
 * @wordpress-plugin
 * Plugin Name:       Wordpress Invite Only
 * Plugin URI:        http://www.noesis.tech
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Siddharth Bhansali
 * Author URI:        http://www.noesis.tech
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       wp-invite-only-noesis-tech
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-wp-invite-only-noesis-tech-activator.php
 */
function activate_wp_invite_only_noesis_tech() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-wp-invite-only-noesis-tech-activator.php';
	Wp_Invite_Only_Noesis_Tech_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-wp-invite-only-noesis-tech-deactivator.php
 */
function deactivate_wp_invite_only_noesis_tech() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-wp-invite-only-noesis-tech-deactivator.php';
	Wp_Invite_Only_Noesis_Tech_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_wp_invite_only_noesis_tech' );
register_deactivation_hook( __FILE__, 'deactivate_wp_invite_only_noesis_tech' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-wp-invite-only-noesis-tech.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_wp_invite_only_noesis_tech() {

	$plugin = new Wp_Invite_Only_Noesis_Tech();
	$plugin->run();

}
run_wp_invite_only_noesis_tech();
