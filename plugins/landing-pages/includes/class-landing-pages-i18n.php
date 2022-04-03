<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://everaldo.dev
 * @since      1.0.0
 *
 * @package    Landing_Pages
 * @subpackage Landing_Pages/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Landing_Pages
 * @subpackage Landing_Pages/includes
 * @author     Everaldo Matias <aoseudispor@everaldo.dev>
 */
class Landing_Pages_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'landing-pages',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
