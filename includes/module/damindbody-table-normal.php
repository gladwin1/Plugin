<?php
	/**
	 * @package: DefineAwesome MindBody
	 *
	 * @since 1.2.0
	 */
	defined( 'ABSPATH' ) || exit; // Prevent Direct Access

	/**
	* This function outputs a normal version of the MindBody Events table
	*
	* @since 1.2.0
	*/
	function displayMBTable( $table, $data ) {
		
		// Firstly, we don't want to dsiplay a table if there aren't any upcoming events!
		if (count($data) == 0)
			throw new MBTableException('No Results', "There are no upcoming events!");
		
		$table .= "<div id='datatable_container'><table class='table'>";
		
		// For each ROW in the MBTable...
		foreach ( $data as $row => $row_data ) {
			

			$table .= buildMBRow($row_data);
		}
		$table .= "</table></div>";

		return $table;
	}

?>