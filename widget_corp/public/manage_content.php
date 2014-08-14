<?php
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
			if($subjects_assoc){
				echo "<h2>Manage Subject</h2>";
				echo "Menu Name: {$subjects_assoc["menu_name"]}";
			}elseif($pages_assoc){
				echo "<h2>Manage Page</h2>";
				echo "Menu Name: {$pages_assoc["menu_name"]}";
			}else{
			}
		?>
	</div> 
</div>
<?php include("../includes/layout/footer.php"); ?>
  