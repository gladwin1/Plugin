<?php
	/**
	 * @package: DefineAwesome MindBody
	 *
	 * @since 1.2.3
	 */
	defined( 'ABSPATH' ) || exit; // Prevent Direct Access
	
	/**
	* This install function sets the default plugin settings
	*
	* @since 1.2.3
	*/ 
	function damb_install()
	{
		// IF our option does not exist, we want to add our default settings
		if(! get_option('damb_settings')) {

            $op = array(
                'damb_disable_button' => 0,
				'damb_microservice_url' => 'https://tyb-app.herokuapp.com/',
            );
            add_option('damb_settings', $op);
        }
	}
?>
	