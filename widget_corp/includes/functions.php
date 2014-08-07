<?php
	// Checking is query is right
		function check_query($resource){
			if( !isset($resource) ){
				die("Resource extraction failed");
			}
			
		}

		function find_all_subjects(){
			global $connection;
			$query = "SELECT * FROM subjects WHERE visible=1; ";
			$resource_subjects = mysqli_query($connection, $query);
			check_query($resource_subjects);
			return $resource_subjects;
		}

		function find_pages_by_subject_id($subject_id){
			global $connection;
			$query = "SELECT * FROM pages WHERE visible=1 AND subject_id ={$subject_id}";
			$resource_pages = mysqli_query($connection, $query);
			check_query($resource_pages);
			return $resource_pages;
		}
?>