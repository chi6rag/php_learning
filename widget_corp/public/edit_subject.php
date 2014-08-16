<?php
	include("../includes/session.php");
	require_once("../includes/database_connection.php");
	require_once("../includes/functions.php");
?>
<?php
	find_selection();

	// Check if subject id exists
	if(!$subjects_assoc){
		redirect_to("manage_content.php");
	}
?>
<?php
	if( isset($_POST["submit"]) ){
		// Prepare and fire query
		$id = $subjects_assoc["id"];
		$menu_name = $_POST["menu_name"];
		$menu_name = mysqli_real_escape_string($connection, $menu_name);
		$position = (int) $_POST["position"];
		$visible = (int) $_POST["visible"];
		$query  = "UPDATE subjects SET ";
		$query .= "menu_name = '{$menu_name}', ";
		$query .= "position = {$position}, ";
		$query .= "visible = {$visible} ";
		$query .= "WHERE id={$id} ";
		$query .= "LIMIT 1;";
		$resource = mysqli_query($connection, $query);

		// Testing
		if( $resource && mysqli_affected_rows($connection) == 1 ){
			$_SESSION["message"] = "Subject Updated";
			redirect_to("manage_content.php");
		}else{
			$_SESSION["message"] = "Subject Update Failed";
			//redirect_to("new_subject.php");
		}
	}else{
		// If create_subject.php is a GET request without posting the form
		// redirect_to("new_subject.php");
	}
?>
<?php include("../includes/layout/header.php"); ?>
<div class="main">
	<div class="navigation">
		<?php
			echo navigation($subjects_assoc, $pages_assoc);
		?>
		<a href="new_subject.php">+ Add a subject</a>
	</div>
	<div class="page">
		<?php
			echo session_message();
		?>
		<h2>Edit Subject: <?php echo $subjects_assoc["menu_name"]; ?></h2>
		<form action="edit_subject.php?subject=<?php echo $subjects_assoc["id"]; ?>" method="post">
			<p>
				Menu name: 
				<input type="text" name="menu_name" value="<?php echo $subjects_assoc["menu_name"]; ?>">
			</p>
			<p>
				Position:
				<select name="position">
					<?php
						$subjects_set = get_all_subjects();
						$subject_count = mysqli_num_rows($subjects_set)+1;
						for($count=1; $count<=$subject_count; $count++){
							echo "<option value=\"{$count}\"";
							if( $subjects_assoc["id"] == $count ){
								echo " selected";
							}
							echo ">{$count}</option>";
						}
					?>
				</select>
			</p>
			<p>
				Visible:
				<input type="radio" name="visible" value="0" <?php if($subjects_assoc["visible"] == 0){ echo "checked"; } ?> />No
				<input type="radio" name="visible" value="1" <?php if($subjects_assoc["visible"] == 1){ echo "checked"; } ?> />Yes
			</p>
				<input type="submit" name="submit" value="Submit" />
		</form>
		<br />
		<a href="manage_content.php">Cancel</a>
		&nbsp;
		&nbsp;
		<a href="delete_subject.php?subject=<?php echo $subjects_assoc["id"]; ?>">Delete</a>
		
	</div> 
</div>
<?php include("../includes/layout/footer.php"); ?>

















