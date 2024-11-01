<?php

/**
 *
 * Simple plugin that gives you the urls of your pages, posts and everything else. It is useful to generate a network chart.
 *
 * @link              http://www.lije-creative.com
 * @since             1.0.0
 * @package           show-pages-list
 *
 * @wordpress-plugin
 * Plugin Name:       Show Pages List
 * Description:       Simple plugin that gives you the urls of your pages only. What for? <a href="http://www.lije-creative.com/visualiser-linking-interne-tables-fusion/">Learn more here.</a>
 * Version:           1.2.0
 * Author:            LIJE Creative
 * Author URI:        http://www.lije-creative.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       show-pages-list
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The core plugin class that is used to define internationalization,
 * dashboard-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-show-pages-list.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_show_pages_list() {

	$plugin = new show_pages_list();
	$plugin->run();

}
run_show_pages_list();
