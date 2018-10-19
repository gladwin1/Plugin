<?php
	/**
	 * @package: DefineAwesome MindBody
	 *
	 * @since 1.2.2
	 */
	defined( 'ABSPATH' ) || exit; // Prevent Direct Access
	
	// First we will load our custom setup files	
	require_once DAMB_PLUGIN_DIR . '/assets/custom/damindbody-constants.php';
	require_once DAMB_PLUGIN_DIR . '/assets/custom/damindbody-exceptions.php';
	
	// This will load our follow on files and set up any hooks
	// We will load our admin files, if the user is an admin!
	if ( is_admin() ) {
		require_once DAMB_PLUGIN_DIR . '/includes/admin/damindbody-menu.php';
		require_once DAMB_PLUGIN_DIR . '/includes/admin/class-damindbody-settings.php';
	}

	// Our standard files
	require_once DAMB_PLUGIN_DIR . '/includes/damindbody-table-control.php';
	require_once DAMB_PLUGIN_DIR . '/includes/plugin/damindbody-add-remove.php';
	require_once DAMB_PLUGIN_DIR . '/includes/plugin/damindbody-styles.php';
	require_once DAMB_PLUGIN_DIR . '/includes/api/damindbody-api-statuscodes.php';
	
	// Register the install action here
	add_action( 'activate_' . DAMB_PLUGIN_BASENAME, 'damb_install' );
?>
	