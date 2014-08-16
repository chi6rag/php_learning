<?php session_start(); ?>
<?php
	require_once("../includes/functions.php");
	require_once("../includes/database_connection.php");
?>
<?php
	if( isset($_POST["submit"]) ){
		// Prepare and fire query
		$menu_name = $_POST["menu_name"];
		$menu_name = mysqli_real_escape_string($connection, $menu_name);
		$position = (int) $_POST["position"];
		$visible = (int) $_POST["visible"];
		$query  = "INSERT INTO subjects(menu_name, position, visible) ";
		$query .= "VALUES('{$menu_name}', $position, $visible)";
		$resource = mysqli_query($connection, $query);

		// Testing
		if($resource){
			$_SESSION["message"] = "Subject Created";
			redirect_to("manage_content.php");
		}else{
			$_SESSION["message"] = "Subject Creation Failed";
			redirect_to("new_subject.php");
		}
	}else{
		// If create_subject.php is a GET request without posting the form
		redirect_to("new_subject.php");
	}
?>
<?php
	if( isset($connection) ){
		mysqli_close( $connection );
	}
?>