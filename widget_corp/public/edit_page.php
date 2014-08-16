<?php
	include("../includes/session.php");
	require_once("../includes/database_connection.php");
	require_once("../includes/functions.php");
?>
<?php
	find_selection();
	// Check if page id exists
	if(!$pages_assoc){
		redirect_to("manage_content.php");
	}
?>
<?php
	if( isset($_POST["submit"]) ){
		// Prepare and fire query
		$id = $pages_assoc["id"];
		$menu_name = $_POST["menu_name"];
		$menu_name = mysqli_real_escape_string($connection, $menu_name);
		$subject_id = $_POST["subject_id"];
		$position = (int) $_POST["position"];
		$visible = (int) $_POST["visible"];
		$content = htmlspecialchars($_POST["content"]);
		// echo "{$menu_name}<br />{$subject_id}<br />{$position}<br />{$visible}<br />{$content}";
		$query  = "UPDATE pages SET ";
		$query .= "menu_name = '{$menu_name}', ";
		$query .= "position = {$position}, ";
		$query .= "visible = {$visible}, ";
		$query .= "content = '{$content}' ";
		$query .= "WHERE subject_id={$subject_id} & id={$id} ";
		//$query .= "LIMIT 1;";
		$resource = mysqli_query($connection, $query);

		// Testing
		if( $resource && mysqli_affected_rows($connection) == 1 ){
			$_SESSION["message"] = "Page Updated";
			redirect_to("manage_content.php");
		}else{
			$_SESSION["message"] = "Page Update Failed";
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
		<h2>Edit Page: <?php echo $pages_assoc["menu_name"]; ?></h2>
		<form action="edit_page.php?page=<?php echo $pages_assoc["id"]; ?>" method="post">
			<p>
				Menu name: 
				<input type="text" name="menu_name" value="<?php echo $pages_assoc["menu_name"]; ?>">
			</p>
			<p>
				Subject ID:
				<select name="subject_id">
					<option value="<?php echo $pages_assoc["subject_id"]; ?>"><?php echo $pages_assoc["subject_id"]; ?></option>
				</select>
			</p>
			<p>
				Position:
				<select name="position">
					<?php
						$pages_set = get_pages_by_subject_id( $pages_assoc["subject_id"] );
						$pages_count = mysqli_num_rows($pages_set);
						for($count=1; $count<=$pages_count; $count++){
							echo "<option value=\"{$count}\"";
							if( $pages_assoc["id"] == $count ){
								echo " selected";
							}
							echo ">{$count}</option>";
						}
					?>
				</select>
			</p>
			<p>
				Visible:
				<input type="radio" name="visible" value="0" <?php if($pages_assoc["visible"] == 0){ echo "checked"; } ?> />No
				<input type="radio" name="visible" value="1" <?php if($pages_assoc["visible"] == 1){ echo "checked"; } ?> />Yes
			</p>
			<p>
				<textarea rows="15" cols="50" name="content"><?php echo $pages_assoc["content"]; ?></textarea>
			</p>
				<input type="submit" name="submit" value="Submit" />
		</form>

		<br />
		<a href="manage_content.php">Cancel</a>
		&nbsp;
		&nbsp;
		<a href="delete_page.php?page=<?php echo $pages_assoc["id"]; ?>">Delete</a>
		
	</div> 
</div>
<?php include("../includes/layout/footer.php"); ?>

















