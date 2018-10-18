<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://widelyinteractive.com/
 * @since             1.0.0
 * @package           Ad_Manager
 *
 * @wordpress-plugin
 * Plugin Name:       Ad Manager
 * Plugin URI:        admanager
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Maksym Zerkakh
 * Author URI:        https://widelyinteractive.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       ad-manager
 * Domain Path:       /languages
 */

/* !0. TABLE OF CONTENTS */

/*

	1. HOOKS
		1.1 - registers all our custom shortcodes

	2. SHORTCODES
		2.1 - slb_register_shortcodes()
		2.2 - slb_form_shortcode()

	3. FILTERS

	4. EXTERNAL SCRIPTS

	5. ACTIONS

	6. HELPERS

	7. CUSTOM POST TYPES

	8. ADMIN PAGES

	9. SETTINGS

*/

/* !1. HOOKS */


/* !1. SHORTCODES */





// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'PLUGIN_NAME_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-ad-manager-activator.php
 */
function activate_ad_manager() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-ad-manager-activator.php';
	Ad_Manager_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-ad-manager-deactivator.php
 */
function deactivate_ad_manager() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-ad-manager-deactivator.php';
	Ad_Manager_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_ad_manager' );
register_deactivation_hook( __FILE__, 'deactivate_ad_manager' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-ad-manager.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_ad_manager() {

	$plugin = new Ad_Manager();
	$plugin->run();

}
run_ad_manager();


define( 'WPPLUGIN_URL', plugin_dir_url( __FILE__ ) );

// Create Plugin Admin Menus and Setting Pages
include( plugin_dir_path( __FILE__ ) . 'includes/ad-manager-menu.php');

// Enqueue Plugin CSS
include( plugin_dir_path( __FILE__ ) . 'includes/ad-manager-styles.php');

// Enqueue Plugin JavaScript
include( plugin_dir_path( __FILE__ ) . 'includes/ad-manager-scripts.php');

