<?php
	/**
	 * @package: DefineAwesome MindBody
	 *
	 * @since 1.2.3
	 */
	defined( 'ABSPATH' ) || exit; // Prevent Direct Access
	
	/**
	* Checks a status code against the standard MindBody API status codes
	*
	* MINDBODY CODES API: https://developers.mindbodyonline.com/PublicDocumentation/ErrorHandling?version=v5.1
	*
	* @params $statusCode, The code to be compared
	*
	* @since 1.2.0
	*/
	function checkMBStatusCode($statusCodeIn)
	{
		$negMessage = "Drats! ";
		
		switch ($statusCodeIn)
		{
			case '200':
				break; // This means our request was succesful
			case '101':
				throw new MBTableException('Invalid source credentials or an invalid API key', $negMessage."Our link to this studio must be broken.");
			case '102':
				throw new MBTableException('No permission to site', $negMessage."We don't seem to have the rights to access this studio!");
			case '105':
				throw new MBTableException('Site IDs do not match', $negMessage."We seem to have an invalid ID for this site!");
			case '201':
				throw new MBTableException('Something failed in your call', $negMessage."The data call failed somehow!");
			case '1000':
				throw new MBTableException('Location ID does not exist', $negMessage."It looks like this studio doesn't have MindBody running right now!");
			default: 
				throw new MBTableException('Unknown Error Code', $negMessage."Something went wrong, we're just not sure what's happened!");
		}	
		return true;
	}

?>