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

	function navigation($selected_subject_id, $selected_page_id){
		$output = "<ul class=\"subjects\">";
		// 2.a Firing query and preparing resource_subjects
		$resource_subjects = get_all_subjects();
		// 3.a Fetching resource_subjects and using information
		while( $subjects_assoc = mysqli_fetch_assoc($resource_subjects) ){
			$output .= "<li ";
			if( $subjects_assoc["id"] == $selected_subject_id ){
				$output .= "class=\"selected\"";
			}
			$output .= ">";
			$output .= "<a href=\"manage_content.php?subject=";
			$output .= urlencode($subjects_assoc["id"]);
			$output .= "\">";
			$output .= $subjects_assoc["menu_name"];
			$output .= "</a>";
			
			// 2.b Firing query and preparing resource_pages
			$resource_pages = get_pages_by_subject_id($subjects_assoc["id"]);
			$output .= "<ul class=\"pages\">";
			//3.b Fetching resource_pages and using information
			while( $pages_assoc = mysqli_fetch_assoc($resource_pages) ){ 
				$output .= "<li ";
				if( $selected_page_id == $pages_assoc["id"]){
					$output .= "class=\"selected\"";
				}
				$output .= ">";
				$output .= "<a href=\"manage_content.php?page=";
				$output .= urlencode($pages_assoc["id"]);
				$output .= "\">";
				$output .= $pages_assoc["menu_name"];
				$output .= "</a></li>";
			}
			$output .= "</ul></li>";
		}
		$output .= "</ul>";
		mysqli_free_result($resource_subjects);
		mysqli_free_result($resource_pages);
		return $output;
	}

?>