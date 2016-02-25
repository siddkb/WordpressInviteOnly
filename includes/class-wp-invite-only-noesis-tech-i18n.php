<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       http://www.noesis.tech
 * @since      1.0.0
 *
 * @package    Wp_Invite_Only_Noesis_Tech
 * @subpackage Wp_Invite_Only_Noesis_Tech/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Wp_Invite_Only_Noesis_Tech
 * @subpackage Wp_Invite_Only_Noesis_Tech/includes
 * @author     Siddharth Bhansali <sidd@noesis.tech>
 */
class Wp_Invite_Only_Noesis_Tech_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'wp-invite-only-noesis-tech',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
