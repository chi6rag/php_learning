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
		<ul class="subjects">
			<?php
				// 2.a Firing query and preparing resource_subjects
				$resource_subjects = get_all_subjects();
			?>
			<?php 	  // 3.a Fetching resource_subjects and using information ?>
			<?php
				while( $subjects_assoc = mysqli_fetch_assoc($resource_subjects) ){ ?>
					<?php
						echo "<li ";
						if( $subjects_assoc["id"] == $selected_subject_id ){
							echo "class=\"selected\"";
						}
						echo ">";
					?>
						<a href="manage_content.php?subject=<?php echo urlencode($subjects_assoc["id"]); ?>">
								<?php echo "{$subjects_assoc["menu_name"]}"; ?></a>
						<?php 	// 2.b Firing query and preparing resource_pages
								$resource_pages = get_pages_by_subject_id($subjects_assoc["id"]);
						?>
						<ul class="pages">
							<?php 	//3.b Fetching resource_pages and using information
									while( $pages_assoc = mysqli_fetch_assoc($resource_pages) ){ 
							?>
										<?php
											echo "<li ";
											if( $selected_page_id == $pages_assoc["id"]){
												echo "class=\"selected\"";
											}
											echo ">";
										?>
											<a href="manage_content.php?page=<?php echo $pages_assoc["id"]?>"><?php echo "{$pages_assoc["menu_name"]}"; ?></a>
										</li>
							<?php 	} ?>
						</ul>
					</li>
		<?php 	} ?>
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
			echo "Subject ID: {$selected_subject_id}<br />";
			echo "Page ID: {$selected_page_id}";
		?>
	</div> 
</div>
<?php include("../includes/layout/footer.php"); ?>
