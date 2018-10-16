<?php
	/**
	 * @package: DefineAwesome MindBody
	 *
	 * @since 1.2.2
	 */
	defined( 'ABSPATH' ) || exit; // Prevent Direct Access

	/**
	* Retrieve mock data as a JSON object from a Heroku Dyno
	*
	* @since 1.2.0
	*/
	function getJSONData( $url ) {
		
		try
		{
			// First, attempt to get the data from the given URL
			$response = wp_remote_get( $url )['body'];
		}
		catch (Exception $e) {
			echo 'Caught exception: ',  $e->getMessage(), "\n";
		}
		
		// This result will hold our entire JSON object!
		$result   = json_decode( $response, true );

		
		// Check the status code first
		// @throws a MBTableException if the Status code is NOT 200
		if (checkMBStatusCode($result['GetClassSchedulesResult']['ErrorCode']))
		{
			//TODO Breakdown the dataset here
			$class_schedule_array = $result['GetClassSchedulesResult']['ClassSchedules']['ClassSchedule'];
		}

		return $result['GetClassSchedulesResult'];
	}

?>