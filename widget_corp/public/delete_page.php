<?php
	require_once("../includes/session.php");
	require_once("../includes/database_connection.php");
	require_once("../includes/functions.php");
?>

<?php
	if( isset($_GET["page"]) ){
		$current_page = find_page_by_id( $_GET["page"] );
	}
	if( !$current_page ){
		redirect_to("manage_content.php");
	}

	$id = $_GET["page"];
	$query = "DELETE FROM pages WHERE id = {$id} LIMIT 1;";
	$resource = mysqli_query($connection, $query);

	if( $resource && mysqli_affected_rows($connection) == 1 ){
		$_SESSION["message"] = "Page Deleted";
		redirect_to("manage_content.php");
	}else{
		$_SESSION["message"] = "Page Deletion Failed";
		redirect_to("manage_content.php?page={$id}"); 
	}
?>