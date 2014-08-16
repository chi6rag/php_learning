<?php
	require_once("../includes/session.php");
	require_once("../includes/database_connection.php");
	require_once("../includes/functions.php");
?>

<?php
	if( isset($_GET["subject"]) ){
		$current_subject = find_subject_by_id( $_GET["subject"] );
	}
	if( !$current_subject ){
		redirect_to("manage_content.php");
	}

	$pages_set = get_pages_by_subject_id($current_subject["id"]);
	if( mysqli_num_rows($pages_set)>0 ){
		$_SESSION["message"] = "Pages associated with subject. Deletion Failed";
		redirect_to("edit_subject.php?subject={$current_subject['id']}");
	}

	$id = $current_subject["id"];
	$query = "DELETE FROM subjects WHERE id = {$id} LIMIT 1;";
	$resource = mysqli_query($connection, $query);

	if( $resource && mysqli_affected_rows($connection) == 1 ){
		$_SESSION["message"] = "Subject Deleted";
		redirect_to("manage_content.php");
	}else{
		$_SESSION["message"] = "Subject Deletion Failed";
		redirect_to("manage_content.php?subject={$id}"); 
	}
?>