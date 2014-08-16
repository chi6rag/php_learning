<?php
	include("../includes/session.php");
	require_once("../includes/database_connection.php");
	require_once("../includes/functions.php");
?>
<?php
	find_selection(); // returns $subjects_assoc, $pages_assoc in global scope // Do Not Delete
?>
<?php
	if( isset($_POST["submit"]) ){
		// Prepare and fire query
		$menu_name = $_POST["menu_name"];
		$menu_name = mysqli_real_escape_string($connection, $menu_name);
		$subject_id = $_POST["subject_id"];
		$position = (int) $_POST["position"];
		$visible = (int) $_POST["visible"];
		$content = htmlspecialchars($_POST["content"]);
		$query  = "INSERT INTO pages(subject_id, menu_name, position, visible, content) ";
		$query .= "VALUES($subject_id, '{$menu_name}', $position, $visible, '{$content}');";
		$resource = mysqli_query($connection, $query);

		// Testing
		if($resource){
			$_SESSION["message"] = "Page Created";
			redirect_to("manage_content.php");
		}else{
			$_SESSION["message"] = "Page Creation Failed";
			redirect_to("new_page.php");
		}
	}else{
	}
?>
<?php include("../includes/layout/header.php"); ?>
<div class="main">
	
	<div class="navigation">
		<?php
			echo navigation($subjects_assoc, $pages_assoc);
		?>
		<a href="new_subject.php">+ Add a subject</a>
	</div> <!-- Navigation ends here -->

	<div class="page">
		<?php
			echo session_message();
		?>
		<h2>Create Page</h2>
		<form action="new_page.php" method="post">
			<p>
				Menu name: 
				<input type="text" name="menu_name" value="">
			</p>
			<p>
				Subject ID:
				<select name="subject_id">
					<option value="<?php echo $_GET["subject_id"]?>"><?php echo $_GET["subject_id"]?></option>
				</select>
			</p>
			<p>
				Position:
				<select name="position">
					<?php
						$pages_assoc = get_pages_by_subject_id($_GET["subject_id"]);
						$pages_count = mysqli_num_rows($pages_assoc)+1;
						for($count=1; $count<=$pages_count; $count++){
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
			<p>
				<textarea rows="15" cols="50" name="content" value=""></textarea>
			</p>
				<input type="submit" name="submit" value="Submit" />
		</form>
		<br />
		<a href="manage_content.php">Cancel</a>
	</div> 
</div>
<?php include("../includes/layout/footer.php"); ?>