<?php
	/**
	 * @package: DefineAwesome MindBody
	 *
	 * @since 1.2.2
	 */
	defined( 'ABSPATH' ) || exit; // Prevent Direct Access
	
	// At this point, we will load our included files, starting with the admin file 
	if ( is_admin() ) {
		require_once DAMB_PLUGIN_DIR . '/includes/admin/damindbody-menu.php';
		require_once DAMB_PLUGIN_DIR . '/includes/admin/class-damindbody-settings.php';
	}

	require_once DAMB_PLUGIN_DIR . '/includes/damindbody-add-remove.php';
	require_once DAMB_PLUGIN_DIR . '/includes/damindbody-table-control.php';
	require_once DAMB_PLUGIN_DIR . '/includes/api/damindbody-api-statuscodes.php';
	require_once DAMB_PLUGIN_DIR . '/includes/damindbody-styles.php'; 
	
	require_once DAMB_PLUGIN_DIR . '/assets/custom/damindbody-exceptions.php';
	
	// Register the install action here
	add_action( 'activate_' . DAMB_PLUGIN_BASENAME, 'damb_install' );
?>
	