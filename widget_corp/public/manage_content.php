<?php
	require_once("../includes/database_connection.php");
	require_once("../includes/functions.php");
?>
<?php
	if( isset($_GET["subject"]) ){
		$subject_id = $_GET["subject"];
		$page_id = null;
	}elseif( isset($_GET["page"]) ){
		$subject_id = null;
		$page_id = $_GET["page"];
	}else{
		$subject_id = null;
		$page_id = null;
	}
?>
<?php include("../includes/layout/header.php"); ?>
<div class="main">
	<div class="navigation">
		<ul class="subjects">
			<?php
				// 2.a Firing query and preparing resource_subjects
				$resource_subjects = get_all_subjects();
			?>
			<?php 	  // 3.a Fetching resource_subjects and using information ?>
			<?php 		while( $subjects_assoc = mysqli_fetch_assoc($resource_subjects) ){ ?>
			<li>    		<a href="manage_content.php?subject=<?php echo $subjects_assoc["id"]?>"><?php 	echo "{$subjects_assoc["menu_name"]}"; ?></a>
							<?php 	// 2.b Firing query and preparing resource_pages
									$resource_pages = get_pages_by_subject_id($subjects_assoc["id"]);
							?>
				<ul class="pages">
					<?php 		//3.b Fetching resource_pages and using information ?>
					<?php 		while( $pages_assoc = mysqli_fetch_assoc($resource_pages) ){ ?>
					<li> 			<a href="manage_content.php?page=<?php echo $pages_assoc["id"]?>"><?php echo "{$pages_assoc["menu_name"]}"; ?></a></li>
					<?php 		} ?>
				</ul>
			</li>
			<?php 	  } ?>
		</ul>
		<?php
			// 4.a Free Result
			mysqli_free_result($resource_subjects);
			// 4.b Free Result
			mysqli_free_result($resource_pages);
		?>
	</div>
	<div class="page">
		<h2>Manage Content</h2>
		<?php
			echo "Subject ID: {$subject_id}<br />";
			echo "Page ID: {$page_id}";
		?>
	</div> 
</div>
<?php include("../includes/layout/footer.php"); ?>
