<?php
	
?>
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
		<form action="create_subject.php" method="post">
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
	</div> 
</div>
<?php include("../includes/layout/footer.php"); ?>