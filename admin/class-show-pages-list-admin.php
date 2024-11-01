<?php

/**
 * The dashboard-specific functionality of the plugin.
 *
 * @link       http://www.lije-creative.com
 * @since      1.0.0
 *
 * @package    show_pages_list
 * @subpackage show_pages_list/admin
 */

/**
 * The dashboard-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the dashboard-specific stylesheet and JavaScript.
 *
 * @package    show_pages_list
 * @subpackage show_pages_list/admin
 * @author     LIJE Creative <info@lije-creative.com>
 */
class Show_Pages_List_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $show_pages_list    The ID of this plugin.
	 */
	private $show_pages_list;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @var      string    $show_pages_list       The name of this plugin.
	 * @var      string    $version    The version of this plugin.
	 */
	public function __construct( $show_pages_list, $version ) {

		$this->show_pages_list = $show_pages_list;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the Dashboard.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		wp_enqueue_style( $this->show_pages_list, plugin_dir_url( __FILE__ ) . 'css/show-pages-list-admin.css', array(), $this->version, 'all' );

	}
	
}
