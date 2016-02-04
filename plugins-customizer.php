<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              http://blog.nasrulhazim.com
 * @since             1.0.0
 * @package           Plugins_Customizer
 *
 * @wordpress-plugin
 * Plugin Name:       Plugins Customizer
 * Plugin URI:        http://github.com/nasrulhazim/plugins-customizer
 * Description:       A simple plugin used for customizing other plugins view such as Polylang Selector.
 * Version:           1.0.0
 * Author:            Nasrul Hazim
 * Author URI:        http://blog.nasrulhazim.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       plugins-customizer
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-plugins-customizer-activator.php
 */
function activate_plugins_customizer() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-plugins-customizer-activator.php';
	Plugins_Customizer_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-plugins-customizer-deactivator.php
 */
function deactivate_plugins_customizer() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-plugins-customizer-deactivator.php';
	Plugins_Customizer_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_plugins_customizer' );
register_deactivation_hook( __FILE__, 'deactivate_plugins_customizer' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-plugins-customizer.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_plugins_customizer() {

	$plugin = new Plugins_Customizer();
	$plugin->run();

}
run_plugins_customizer();
