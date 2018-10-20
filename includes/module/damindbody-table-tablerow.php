<?php
	/**
	 * @package: DefineAwesome MindBody
	 *
	 * @since 1.2.4
	 */
	defined( 'ABSPATH' ) || exit; // Prevent Direct Access

	/**
	* Takes a Row of data and returns a HTML string representing
	*
	* a MindBody Event.
	*
	* @since 1.2.4
	*/
	function build_MB_row( $row ) {
		
		// We don't want to format an empty array!
		if (count($row) == 0) 
			return;
		
		$row_string = '<tr><form method="post">';
		
		// Setup our expected fields here
		$event_id = $row['id'];
		$event_name = $row['name'];
		$event_desc = $row['description'];
		$event_start_time = $row['start_time']; //TODO Function that returns the time from the long date
		$event_end_time = $row['end_time']; //TODO Function that returns the time from the long date
		$event_end_date = "uspecified";
		
		$row_string .= '<td>' . $event_name .'</td>';
		
		$row_string .= '<td>' . $event_desc .'</td>';
		
		$row_string .= '<td>' . $event_start_time .'</td>';
		
		$row_string .= '<td>' . $event_end_time .'</td>';
		
		$row_string .= '<td>' . $event_date .'</td>';
		
		$row_string .= '<td><button class="success" onclick="alert(\'This button does nothing.\')"> Book Now </button>';

		return $row_string. '</form></tr>';
	}

?>