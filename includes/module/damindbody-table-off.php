<?php
	/**
	 * @package: DefineAwesome MindBody
	 *
	 * @since 1.2.0
	 */
	defined( 'ABSPATH' ) || exit; // Prevent Direct Access

	/**
	* Used if the MindBody table will not be displayed
	* Shows a simple error message to the end user.
	*
	* @since 1.2.0
	*/
	function displayNoTable($message)
	{
		return
			'		
			<div class="no-results-wrapper" style="padding: 100px">
                <i class="no-results-icon material-icons">mood_bad</i>
					 <li class="no_job_listings_found">'.$message.'</br>
						Please Try Again Soon!
					</li>
            </div>
			';
	}

?>