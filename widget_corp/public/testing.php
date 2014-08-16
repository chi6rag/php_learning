<?php
	function mysqli_check_resource($resource){
		if(!$resource){
			die("Fatal Error: MySQLi Query Failed");
		}
	}

	function get_all_subjects($public=true){
		global $connection;
		$query  = "SELECT * FROM subjects ";
		if($public){
			$query .= "WHERE visible=1";
		}
		$resource_subjects = mysqli_query($connection, $query);
		mysqli_check_resource($resource_subjects);
		return $resource_subjects;
	}

	function get_pages_by_subject_id($subject_id, $public=true){
		global $connection;
		$query = "SELECT * FROM pages WHERE subject_id={$subject_id} ";
		if($public){
			$query .= "WHERE visible=1 ";
		}
		$query .= "ORDER BY position ASC;";
		$resource_pages = mysqli_query($connection, $query);
		mysqli_check_resource($resource_pages);
		return $resource_pages;
	}

	function navigation($subjects_array, $pages_array){
		$output = "<ul class=\"subjects\">";
		// 2.a Firing query and preparing resource_subjects
		$resource_subjects = get_all_subjects(false);
		// 3.a Fetching resource_subjects and using information
		while( $subjects_assoc = mysqli_fetch_assoc($resource_subjects) ){
			$output .= "<li ";
			if( $subjects_array && $subjects_assoc["id"] == $subjects_array["id"] ){
				$output .= "class=\"selected\"";
			}
			$output .= ">";
			$output .= "<a href=\"manage_content.php?subject=";
			$output .= urlencode($subjects_assoc["id"]);
			$output .= "\">";
			$output .= htmlentities($subjects_assoc["menu_name"]);
			$output .= "</a>";
			
			// 2.b Firing query and preparing resource_pages
			$resource_pages = get_pages_by_subject_id($subjects_assoc["id"], false);
			$output .= "<ul class=\"pages\">";
			//3.b Fetching resource_pages and using information
			while( $pages_assoc = mysqli_fetch_assoc($resource_pages) ){ 
				$output .= "<li ";
				if( $pages_array && $pages_assoc["id"] == $pages_array["id"] ){
					$output .= "class=\"selected\"";
				}
				$output .= ">";
				$output .= "<a href=\"manage_content.php?page=";
				$output .= urlencode($pages_assoc["id"]);
				$output .= "\">";
				$output .= htmlentities($pages_assoc["menu_name"]);
				$output .= "</a></li>";
			}
			$output .= "</ul></li>";
		}
		$output .= "</ul>";
		mysqli_free_result($resource_subjects);
		mysqli_free_result($resource_pages);
		return $output;
	}

	function public_navigation($subjects_array, $pages_array){
		$output = "<ul class=\"subjects\">";
		// 2.a Firing query and preparing resource_subjects
		$resource_subjects = get_all_subjects();
		// 3.a Fetching resource_subjects and using information
		while( $subjects_assoc = mysqli_fetch_assoc($resource_subjects) ){
			$output .= "<li ";
			if( $subjects_array && $subjects_assoc["id"] == $subjects_array["id"] || $pages_array["subject_id"] == $subjects_assoc["id"]){
				$output .= "class=\"selected\"";
				$output .= ">";
				$output .= "<a href=\"index.php?subject=";
				$output .= urlencode($subjects_assoc["id"]);
				$output .= "\">";
				$output .= htmlentities($subjects_assoc["menu_name"]);
				$output .= "</a>";
				// 2.b Firing query and preparing resource_pages
				$resource_pages = get_pages_by_subject_id( $subjects_assoc["id"], false);
				$output .= "<ul class=\"pages\">";
				//3.b Fetching resource_pages and using information
				while( $pages_assoc = mysqli_fetch_assoc($resource_pages) ){
					$output .= "<li ";
					if( $pages_array && $pages_assoc["id"] == $pages_array["id"] ){
						$output .= "class=\"selected\"";
					}
					$output .= ">";
					$output .= "<a href=\"index.php?page=";
					$output .= urlencode($pages_assoc["id"]);
					$output .= "\">";
					$output .= htmlentities($pages_assoc["menu_name"]);
					$output .= "</a></li>";
				}
				$output .= "</ul></li>";
			}else{
				$output .= ">";
				//$output .= "</ul></li>";
				$output .= "<a href=\"index.php?subject=";
				$output .= urlencode($subjects_assoc["id"]);
				$output .= "\">";
				$output .= htmlentities($subjects_assoc["menu_name"]);
				$output .= "</a></li>";
			}
		}
		$output .= "</ul>";
		//mysqli_free_result($resource_subjects);
		//mysqli_free_result($resource_pages);
		return $output;
	}

	function find_subject_by_id($selected_subject_id){
		global $connection;
		$safe_selected_subject_id = mysqli_real_escape_string($connection, $selected_subject_id);
		$query = "SELECT * FROM subjects WHERE id={$safe_selected_subject_id}";
		$resource = mysqli_query($connection, $query);
		mysqli_check_resource($resource);		
		if( $subjects_assoc = mysqli_fetch_assoc($resource) ){
			return $subjects_assoc;
		}else{
			return null;
		}
	}

	function find_page_by_id($selected_page_id){
		global $connection;
		$safe_selected_page_id = mysqli_real_escape_string($connection, $selected_page_id);
		$query = "SELECT * FROM pages WHERE id={$safe_selected_page_id}";
		$resource = mysqli_query($connection, $query);
		mysqli_check_resource($resource);
		
		if( $pages_assoc = mysqli_fetch_assoc($resource) ){
			return $pages_assoc;
		}else{
			return null;
		}
	}

	function find_selection(){
		global $subjects_assoc;
		global $pages_assoc;
		if( isset($_GET["subject"]) ){
			$subjects_assoc = find_subject_by_id($_GET["subject"]);
			$pages_assoc = null;
		}elseif( isset($_GET["page"]) ){
			$pages_assoc = find_page_by_id($_GET["page"]);
			$subjects_assoc = null;
		}else{ 
			$subjects_assoc = null;
			$pages_assoc = null;
		}
	}

	function redirect_to($new_location){
		header("Location: " . $new_location);
		exit;
	}

?>