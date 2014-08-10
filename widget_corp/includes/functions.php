<?php
	function mysqli_check_resource($resource){
		if(!$resource){
			die("Fatal Error: MySQLi Query Failed");
		}
	}

	function get_all_subjects(){
		global $connection;
		$query = "SELECT * FROM subjects WHERE visible=1;";
		$resource_subjects = mysqli_query($connection, $query);
		mysqli_check_resource($resource_subjects);
		return $resource_subjects;
	}

	function get_pages_by_subject_id($subject_id){
		global $connection;
		$query = "SELECT * FROM pages WHERE subject_id={$subject_id};";
		$resource_pages = mysqli_query($connection, $query);
		return $resource_pages;
	}
?>