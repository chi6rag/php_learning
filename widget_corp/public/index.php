<?php
	include("../includes/session.php");
	require_once("../includes/database_connection.php");
	require_once("../includes/functions.php");
?>
<?php
	find_selection();
	$layout_context = "public";
?>
<?php include("../includes/layout/header.php"); ?>
<div class="main">
	<div class="navigation">
		<?php
			echo public_navigation($subjects_assoc, $pages_assoc, false);
		?>
	</div>
	<div class="page">
		<?php
			if( $pages_assoc ){
				echo "{$pages_assoc["menu_name"]}: {$pages_assoc["content"]}";
			}
		?>
	</div>
</div>
<?php include("../includes/layout/footer.php"); ?>
  