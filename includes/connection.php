<?php 

   /* ================================================================
	* KINU KIDS WEBSITE
	* includes/connection.php
	* ---------------------------------------------------------------
	* By 2014 KINU INTERNS
	* Apache 2.0 License
	* ================================================================ */

	require("config.php"); 


?>
<?php
	$connection = mysql_connect(DB_SERVER, DB_USER, DB_PASS);
	$db_select = mysql_select_db(DB_NAME, $connection);
	if (!$connection || !$db_select) {
		die(mysql_error());
	}
?>
