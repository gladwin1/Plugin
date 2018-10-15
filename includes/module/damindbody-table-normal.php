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
		$table .= "<div id='datatable_container'><h2>Retrieved Data</h2><table>";
		$table .= "<tr><th>Key</th><th>Value</th></tr>";
		foreach ( $data as $key => $value ) {
			$table .= "<tr>";
			$table .= "<td>" . htmlentities( $key ) . "</td>";
			if ( is_string( $value ) || is_integer( $value ) || is_float( $value ) ) {
				$table .= "<td>" . htmlentities( $value ) . "</td>";
			} else {
				$table .= "<td>Data (probably an array)</td>";
			}
			$table .= "</tr>";
		}
		$table .= "</table></div>";

		return $table;
	}

?>