<?php
	/**
	 * Plugin Name: DefineAwesome MindBody
	 *
	 * @since 1.2.2
	 */
	defined( 'ABSPATH' ) || exit; // Prevent Direct Access

	/**
	* Retrieve mock data from a Heroku Dyno
	*
	* @since 1.2.0
	*/
	function getMockData( $url ) {
		$response = wp_remote_get( $url )['body'];
		$result   = json_decode( $response, true );

		return $result['items']['0'];
	}
?>