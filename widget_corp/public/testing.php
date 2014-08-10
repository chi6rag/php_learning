<?php
	require_once("../includes/database_connection.php");
	require_once("../includes/functions.php");
?>
<?php
	if( isset($_GET["subject"]) ){
		$selected_subject_id = $_GET["subject"];
		$selected_page_id = null;
	}elseif( isset($_GET["page"]) ){
		$selected_subject_id = null;
		$selected_page_id = $_GET["page"];
	}else{
		$selected_subject_id = null;
		$selected_page_id = null;
	}
?>
<?php include("../includes/layout/header.php"); ?>
<div class="main">
	<div class="navigation">
		<?php
			echo navigation($selected_subject_id, $selected_page_id);
		?>
	</div>
	<div class="page">
		<h2>Manage Content</h2>
		<?php
			echo "Subject ID: {$selected_subject_id}<br />";
			echo "Page ID: {$selected_page_id}";
		?>
	</div> 
</div>
<?php include("../includes/layout/footer.php"); ?>
  