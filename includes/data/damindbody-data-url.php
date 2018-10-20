<?php
	/**
	 * @package: DefineAwesome MindBody
	 *
	 * @since 1.2.5
	 */
	defined( 'ABSPATH' ) || exit; // Prevent Direct Access

	/**
	* This class will hold and configure our URLs used to request data
	* from a Heroku Dyno
	*
	* @since 1.2.5
	*/
	class DynoURLs{
		
		private $base_url;
		private $studio_id;
		private $events_req_slug;
		
		private $_const;
		
		/** 
		* Builds the default urls 
		*
		* @since 1.2.5
		*/
		function __construct($options) {
			
			// We want to use plugin constants in this class, so create an instance here
			$this->_const = new DAMBConstants();
			
			// We get our base URL from the plugin settings.
			// This can be customised in the admin section
			$this->base_url = $options['damb_microservice_url'];
			
			// We want to get the id that has been assigned to this studio
			$this->studio_id = $this->get_studio_ID();
		}
		
		/** 
		* Returns the id that has been assigned to this studio
		*
		* @since 1.2.5
		*/
		private function get_studio_ID()
		{
			$this_ID = get_post_meta( get_the_ID() , '_studioid', true );
			
			if (! ctype_digit ( $this_ID ))
			{
				return '80085';
			}	
			
			return $this_ID;
		}
		
		/** 
		* Returns a string reprsenting the call to the dyno 
		* that will return an events list
		*
		* @since 1.2.5
		*/
		public function get_events_request_slug()
		{
			$this->events_req_slug = $this->base_url.$this->_const::TABLE_DATA
									.$this->studio_id.$this->_const::TABLE_SIMPLIFIED;
		
			return $this->events_req_slug;
			
		}
	
	}

?>