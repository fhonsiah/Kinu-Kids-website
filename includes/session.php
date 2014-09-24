<?php
   /* ================================================================
	* KINU KIDS WEBSITE
	* includes/session.php
	* ---------------------------------------------------------------
	* By 2014 KINU INTERNS
	* Apache 2.0 License
	* ================================================================ */


	session_start();
	
	function get_current_url() {
		$url = $_SERVER['SCRIPT_NAME'];
		return $url;
	}
	
	function signed_in() {
		if(isset($_SESSION['user_id']) && $_SESSION['user_id'] != 0) return true;
		else return false;
	}
	
	function confirm_signed_in() {
		if(!signed_in()) {
			if (get_current_url() != "/index.php") redirect_to("index.php");
		}
		else if (get_current_url() != "/home.php") redirect_to("home.php?subj=" . urlencode(get_active_subject()));
	}
	

?>
