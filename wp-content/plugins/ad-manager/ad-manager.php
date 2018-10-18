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



// Attaching files
define( 'WPPLUGIN_URL', plugin_dir_url( __FILE__ ) );

// Create Plugin Admin Menus and Setting Pages
include( plugin_dir_path( __FILE__ ) . 'includes/ad-manager-menu.php');

// Enqueue Plugin CSS
include( plugin_dir_path( __FILE__ ) . 'includes/ad-manager-styles.php');

// Enqueue Plugin JavaScript
include( plugin_dir_path( __FILE__ ) . 'includes/ad-manager-scripts.php');




/*
Plugin Name: Snappy List Builder
Plugin URI: http://wordpressplugincourse.com/plugins/snappy-list-builder
Description: The ultimate email list building plugin for WordPress. Capture new subscribers. Reward subscribers with a custom download upon opt-in. Build unlimited lists. Import and export subscribers easily with .csv
Version: 1.0
Author: Joel Funk @ Code College
Author URI: http://joelfunk.codecollege.ca
License: GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Text Domain: snappy-list-builder
*/


/* !0. TABLE OF CONTENTS */

/*

	1. HOOKS
		1.1 - custom shortcodes on init

	2. SHORTCODES
		2.1 - ad_manager_shortcodes()
		2.2 - ad_manager_content_shortcode()

	3. FILTERS

	4. EXTERNAL SCRIPTS

	5. ACTIONS

	6. HELPERS

	7. CUSTOM POST TYPES

	8. ADMIN PAGES

	9. SETTINGS

*/


/* !1. HOOKS */

// 1.1
// hint: custom shortcodes on init
add_action('init', 'ad_manager_shortcodes');



/* !2. SHORTCODES */

// 2.1
// hint: custom shortcodes
function ad_manager_shortcodes() {

    add_shortcode('ad_manager_content', 'ad_manager_content_shortcode');

}

// 2.2
// hint: returns a html string
function ad_manager_content_shortcode( $args, $content="") {

    // setup our output variable - the form html
    $output = '
	
		<div class="row">
           <div class="column"><img src="../wp-content/uploads/2018/10/1810-turquoise.jpg" alt="Italian Trulli"></div>
           <div class="column"><img src="../wp-content/uploads/2018/10/now-hiring-box.jpg" alt="Italian Trulli"></div>
           <div class="column"><img src="../wp-content/uploads/2018/10/featured_closet.png" alt="Italian Trulli"></div>
        </div>
	
	';

    // return our results/html
    return $output;

}




/* !3. FILTERS */




/* !4. EXTERNAL SCRIPTS */




/* !5. ACTIONS */




/* !6. HELPERS */




/* !7. CUSTOM POST TYPES */




/* !8. ADMIN PAGES */




/* !9. SETTINGS */



