<?php
	/**
	 * @package: DefineAwesome MindBody
	 *
	 * @since 1.2.2
	 */
	defined( 'ABSPATH' ) || exit; // Prevent Direct Access

	/**
	* Retrieves a dataset, retrieved from a HEROKU Dyno
	*
	* @since 1.2.0
	*/
	function getJSONData( $url ) {
		
		// First, attempt to get the data from the given URL
		$response = wp_remote_get( $url )['body'];

		// This result will hold our entire JSON object!
		$result   = json_decode( $response, true );

		/* THIS NEEDS TO BE REIMPLEMENTED, AWAITING HEROKU UPDATE 1.2.4
		*/
		// Check the status code, if correct, we will return our data array
		// @throws a MBTableException if the Status code is NOT 200
		//if (checkMBStatusCode($result['ErrorCode']))
		//{
			return $result['results'];
		//}

		
	}

?>