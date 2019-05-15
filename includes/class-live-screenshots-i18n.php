<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://medium.com/@michael.rhema
 * @since      1.0.0
 *
 * @package    Live_Screenshots
 * @subpackage Live_Screenshots/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Live_Screenshots
 * @subpackage Live_Screenshots/includes
 * @author     Michael Rhema <michael@ixit.com.ng>
 */
class Live_Screenshots_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'live-screenshots',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
