<?php
	include("../includes/session.php");
	require_once("../includes/database_connection.php");
	require_once("../includes/functions.php");
?>
<?php
	find_selection();
	$layout_context = "admin";
?>
<?php include("../includes/layout/header.php"); ?>
<div class="main">
	<div class="navigation">
		<?php
			echo navigation($subjects_assoc, $pages_assoc, false);
		?>
		<a href="new_subject.php">+ Add a subject</a>
	</div>
	<div class="page">
		<?php
			echo session_message();
		?>
		<h2>Create Subject</h2>
		<form action="create_subject.php" method="post">
			<p>
				Menu name: 
				<input type="text" name="menu_name" value="">
			</p>
			<p>
				Position:
				<select name="position">
					<?php
						$subjects_assoc = get_all_subjects(false);
						$subject_count = mysqli_num_rows($subjects_assoc)+2;
						for($count=1; $count<=$subject_count; $count++){
							echo "<option value={$count}>{$count}</option>";
						}
					?>
				</select>
			</p>
			<p>
				Visible:
				<input type="radio" name="visible" value="0" />No
				<input type="radio" name="visible" value="1" />Yes
			</p>
				<input type="submit" name="submit" value="Submit" />
		</form>
		<br />
		<a href="manage_content.php">Cancel</a>
	</div> 
</div>
<?php include("../includes/layout/footer.php"); ?>