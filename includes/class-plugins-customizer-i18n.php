<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       http://blog.nasrulhazim.com
 * @since      1.0.0
 *
 * @package    Plugins_Customizer
 * @subpackage Plugins_Customizer/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Plugins_Customizer
 * @subpackage Plugins_Customizer/includes
 * @author     Nasrul Hazim <nasrulhazim.m@gmail.com>
 */
class Plugins_Customizer_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'plugins-customizer',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
