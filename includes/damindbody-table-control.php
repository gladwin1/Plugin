<?php
	/**
	 * @package: DefineAwesome MindBody
	 *
	 * @since 1.2.0
	 */
	defined( 'ABSPATH' ) || exit; // Prevent Direct Access

	// Hook for adding the 'controlMBTable' shortcode
	add_shortcode( 'awe1', 'control_MB_table' );

   /**
	* This function outputs the MindBody table via a shortcode
	* We will co-ordinate all I/O and data processing here
	*
	* @since 1.2.0
	*/
	function control_MB_table() {
			
		// We will use this to hold our output response
		$table = "<div>";
		
		// First we want to check the plugin is enabled
		$options = get_option( 'damb_settings' );
		
		// If the plugin is not disabled, we will display it's data
		if (! $options['damb_disable_button'])
		{
			// These files will allow us to build our MindBody table. 
			include_once DAMB_PLUGIN_DIR . '/includes/data/damindbody-data-general.php';
			include_once DAMB_PLUGIN_DIR . '/includes/data/damindbody-data-url.php';
			include_once DAMB_PLUGIN_DIR . '/includes/module/damindbody-table-normal.php';
			include_once DAMB_PLUGIN_DIR . '/includes/module/damindbody-table-tablerow.php';
			
			// First, we will initiate our contants class and get our url back to the dyno
			$_urls 	= new DynoURLs($options);
			$get_events_url = $_urls->get_events_request_slug(); 

			try
			{
				// GET our event list from the HEROKU DYNO here
				$data  = get_JSON_data( $get_events_url );

				// Display our table data here			
				$table = display_MB_table( $table, $data );
			}
			catch (MBTableException $e)
			{
				// IF we catch this exception, then our data call was INVALID (for some reason)
				// We will not display a table here!
				include_once DAMB_PLUGIN_DIR . '/includes/module/damindbody-table-off.php';
				$table .= displayNoTable($e->getUserMessage());
			}
			catch (Exception $a)
			{
				// IF we catch any other
				include_once DAMB_PLUGIN_DIR . '/includes/module/damindbody-table-off.php';
				$table .= displayNoTable("Whoops, we're not sure what happened here.");
			}
		}
		else
		{
			// Load the DISABLED table display
			include_once DAMB_PLUGIN_DIR . '/includes/module/damindbody-table-off.php';
			$table .= displayNoTable("Sorry, ths service has been temporarily disabled.");
		}
		
		return ($table ."</div>");
	}

?>