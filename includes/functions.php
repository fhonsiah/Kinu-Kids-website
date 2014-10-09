<?php 
	
/*================================================================
 * KINU KIDS WEBSITE
 * includes/functions.php
 * ---------------------------------------------------------------
 * By 2014 KINU INTERNS
 * Apache 2.0 License
 *================================================================ */

	
	
	include("connection.php");
	
	function get_fullname($id, $from) {
		global $connection;
		$query = "SELECT first_name, last_name FROM {$from} ";
		$query .= "WHERE id = {$id}";
		
		$query_execute = mysql_query($query, $connection);
		$full_name = mysql_result($query_execute, 0, 'first_name');
		$full_name = $full_name . " ";
		$full_name .= mysql_result($query_execute, 0, 'last_name');
		
		return $full_name;
	}
	
	function get_email($id, $from, $limit = false) {
		global $connection;
		
		if($limit) $query = "SELECT email FROM {$from} WHERE id = {$id} LIMIT 1";
		else $query = "SELECT email FROM {$from} WHERE id = {$id}";
		
		$query_execute = mysql_query($query, $connection);
		$count = mysql_num_rows($query_execute);
		
		if($count == 1) return mysql_result($query_execute, 0, 'email');
		else if($count > 1) {
			
			$email_set = array();
			
			for($i = 0; $i < $count; $i++) $email_set[$i] = mysql_result($query_execute, $i, 'email');
			return $email_set;
		
		}
	}	
	
	function get_phone($id, $from, $limit = false) {
		
		global $connection;
		
		if($limit) $query = "SELECT phone FROM {$from} WHERE id = {$id} LIMIT 1";
		else $query = "SELECT phone FROM {$from} WHERE id = {$id}";
		
		$phone_set = array();
		
		$query_execute = mysql_query($query, $connection);
		$count = mysql_num_rows($query_execute);
		
		if($count == 1) return mysql_result($query_execute, 0, 'phone');
		else if($count > 1) {
			
			$phone_set = array();
			
			for($i = 0; $i < $count; $i++) $phone_set[$i] = mysql_result($query_execute, $i, 'phone');
			return $phone_set;
		
		}
		
	}
	
/*----------------------------------------------------------------
 * PARENTS
 *----------------------------------------------------------------*/

	function get_all_parents() {
		global $connection;
		$query = "SELECT * FROM parents ";
		$query .= "ORDER BY first_name ASC";
		$parent_set = mysql_query($query, $connection);
		return $parent_set;
	
	}
	
	function parent_list() {
		
		$parent_set = get_all_parents();
		$output = "";
		while ($parent = mysql_fetch_array($parent_set)) {
			
			$output .= 
			"<tr id=\"{$parent['hash']}\">
				<td><input type=\"checkbox\"></td>";

			$output .= "<td>" . get_fullname($parent['id'], "parents") . "</td>";

			if($parent['gender'] == 'f') $output .= "<td>Female</td>";
			else $output .= "<td>Male</td>";
			
			$output .= "<td>" . get_phone($parent['id'], "contacts");
			$output .= "</td>";
			$output .= "<td>" . get_email($parent['id'], "contacts");
			$output .- "</td>";
			
			$output .= "<td>{$parent['addedon']}</td></tr>";
			
		} return $output;
	}
	
	
	
?>
