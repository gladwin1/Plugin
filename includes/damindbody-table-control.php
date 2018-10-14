<?php
/**
 * Plugin Name: DefineAwesome MindBody
 *
 * @since 1.2.0
 */
defined( 'ABSPATH' ) || exit; // Prevent Direct Access

	// Hook for adding the 'controlMBTable' shortcode
	add_shortcode( 'awe1', 'controlMBTable' );

   /**
	* This function outputs the MindBody table via a shortcode
	*
	* @since 1.2.0
	*/
	function controlMBTable() {
		
		// TODO: REMOVE this mock page
		include_once DAMB_PLUGIN_DIR . '/includes/module/damindbody-mock-page.php';
		page(); // TEMP
		
		// We will use this to hold our output response
		$table = "<div>";
		
		// First we want to check the plugin is enabled
		$options = get_option( 'damb_settings' );
		
		// If the plugin is not disabled, we will display it's data
		if (! $options['damb_disable_button'])
		{
			// These two files will allow us to build our MindBody
			// table. 
			include_once DAMB_PLUGIN_DIR . '/includes/data/damindbody-data-main.php';
			include_once DAMB_PLUGIN_DIR . '/includes/module/damindbody-table-normal.php';
			
			$table .= '<h1>Table</h1>';
			$url   = "https://mb-mock-1.herokuapp.com/class";
			$data  = getMockData( $url );
			$table = displayMBTable( $table, $data );
		}
		else
		{
			// Load the DISABLED table display
			include_once DAMB_PLUGIN_DIR . '/includes/module/damindbody-table-off.php';
			$table .= displayNoTable();
		}
		
		return ($table ."</div>");
	}

?>