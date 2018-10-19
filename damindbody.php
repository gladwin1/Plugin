<?php
	/*
	* Plugin Name: DefineAwesome MindBody
	* Description: The #DefineAwesome MindBody Solution for The Yoga Brief
	* Version: 1.2.4
	* Author: #DefineAwesome;
	* Author URI: none
	*/

	if ( ! defined( 'ABSPATH' ) ) {
	exit; // Prevents anyone accessing this plugin directly!
	}

	// DAMB_PLUGIN, this constant is our FULL FILEPATH.
	if ( ! defined( 'DAMB_PLUGIN' ) ) {
		define( 'DAMB_PLUGIN', __FILE__ );
	}	
	
	// OUR PLUGIN BASENAME,  the literal name of the plugin!
	if ( ! defined( 'DAMB_PLUGIN_BASENAME' ) ) {
		define( 'DAMB_PLUGIN_BASENAME', plugin_basename( DAMB_PLUGIN ) );
	}	
	
	// DAMB_PLUGIN_DIR, this is the directory where we will find our include files
	if ( ! defined( 'DAMB_PLUGIN_DIR' ) ) {
		define( 'DAMB_PLUGIN_DIR', untrailingslashit(dirname(DAMB_PLUGIN)));
	}
	
	// At this point, we will load our included files
	require_once DAMB_PLUGIN_DIR . '/damindbody-settings.php';
?>
	