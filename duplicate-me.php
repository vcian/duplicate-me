<?php
/*
Plugin Name: Duplicate Page/Post/Custom Post Type
Plugin URI: https://viitorcloud.com/
Description: Duplicate Me plugin is useful to duplicate page, post and custom post type.
Version: 1.0.0
Author: VIITORCLOUD
Author URI:https://viitorcloud.com/
*/    

/**
 * Basic plugin definitions 
 * 
 * @package Duplicate Me
 * @since 1.0.0
 */

// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

global $wpdb; 

if( !defined( 'DUPL_ME_DIR' ) ) {
	define( 'DUPL_ME_DIR', dirname( __FILE__ ) ); // plugin dir
}
if( !defined( 'DUPL_ME_URL' ) ) {
	define( 'DUPL_ME_URL', plugin_dir_url( __FILE__ ) ); // plugin url
}
if( !defined( 'DUPL_ME_DOMAIN' )) {
	define( 'DUPL_ME_DOMAIN', 'DUPL_ME' ); // text domain for languages
}
if( !defined( 'DUPL_ME_PLUGIN_URL' ) ) {
	define( 'DUPL_ME_PLUGIN_URL', plugin_dir_url( __FILE__ ) ); // plugin url
}
if( !defined( 'DUPL_ME_ADMIN_DIR' ) ) {
	define( 'DUPL_ME_ADMIN_DIR', DUPL_ME_DIR . '//admin' ); // plugin admin dir
}
if( !defined( 'DUPL_ME_BASENAME') ) {
	define( 'DUPL_ME_BASENAME', 'dupl-me' );
}
//subtitle prefix
if( !defined( 'DUPL_ME_META_PREFIX' )) {
	define( 'DUPL_ME_META_PREFIX', '_DUPL_ME_' );
}

/**
 * Load Text Domain
 * 
 * This gets the plugin ready for translation.
 * 
 * @package Duplicate Me
 * @since 1.0.0
 */
load_plugin_textdomain( 'DUPL_ME', false, dirname( plugin_basename( __FILE__ ) ) . '/languages/' );

/**
 * Activation hook
 * 
 * Register plugin activation hook.
 * 
 * @package Duplicate Me
 * @since 1.0.0
 */
register_activation_hook( __FILE__, 'DUPL_ME_install' );

/**
 * Deactivation hook
 *
 * Register plugin deactivation hook.
 * 
 * @package Duplicate Me
 * @since 1.1.0
 */
register_deactivation_hook( __FILE__, 'DUPL_ME_uninstall' );

/**
 * Plugin Setup Activation hook call back 
 *
 * Initial setup of the plugin setting default options 
 * and database tables creations.
 * 
 * @package Duplicate Me
 * @since 1.0.0
 */
function DUPL_ME_install() {
	
	global $wpdb;
		
}

/**
 * Plugin Setup (On Deactivation)
 *
 * Does the drop tables in the database and
 * delete  plugin options.
 *
 * @package Duplicate Me
 * @since 1.0.0
 */
function DUPL_ME_uninstall() {
	
	global $wpdb;
			
}
/**
 * Includes
 *
 * Includes all the needed files for our plugin
 *
 * @package Duplicate Me
 * @since 1.0.0
 */ 

//includes model class file

require_once ( DUPL_ME_ADMIN_DIR . '/class-duplicate-me-admin.php');

