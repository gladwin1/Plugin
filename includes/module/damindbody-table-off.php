<?php
/**
 * Plugin Name: DefineAwesome MindBody
 *
 * @since 1.2.0
 */
defined( 'ABSPATH' ) || exit; // Prevent Direct Access

	function displayNoTable()
	{
		return
			'		
			<div class="no-results-wrapper" style="padding: 100px">
                <i class="no-results-icon material-icons">mood_bad</i>
                <li class="no_job_listings_found">
					Sorry, ths service has been temporarily disabled. </br>
					Please Try Again Soon!
				</li>
            </div>
			';
	}

?>