<?php
	include("../includes/session.php");
	require_once("../includes/database_connection.php");
	require_once("../includes/functions.php");
?>
<?php
	find_selection();
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
		<?php
			if($subjects_assoc){
				echo "<h2>Manage Subject</h2>";
				echo "Menu Name: {$subjects_assoc["menu_name"]}<br />";
				echo "<a href=\"edit_subject.php?subject={$subjects_assoc["id"]}\">Edit Subject</a>";
			}elseif($pages_assoc){
				echo "<h2>Manage Page</h2>";
				echo "Menu Name: {$pages_assoc["menu_name"]}<br />";
				echo "<a href=\"edit_page.php?page={$pages_assoc["id"]}\">Edit Page</a>";
			}else{
				echo "<h2>Manage Content</h2>";
			}
		?>
	</div>
</div>
<?php include("../includes/layout/footer.php"); ?>
  