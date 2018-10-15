<?php
	/**
	 * @package: DefineAwesome MindBody
	 *
	 * @since 1.2.3
	 */
	defined( 'ABSPATH' ) || exit; // Prevent Direct Access
	
	/**
	* This exception is used to handle general errors from the
	* DefineAwesome MindBody plugin table display!
	*
	* @since 1.2.0
	*/
	class MBTableException extends Exception {
		
		private $userMessage;
		
		public function __construct($message, $userMessage) {
			parent::__construct($message);
			$this->userMessage = $userMessage;
		}
		
		public function getUserMessage() {
			return $this->userMessage;
		}
	}
?>