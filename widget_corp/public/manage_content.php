<?php
	require_once("../includes/db_connection.php");
	require_once("../includes/functions.php");
	include("../includes/layout/header.php");
?>
	<div class="content-container">
		
		<!-- Navigation Page starts here -->
		<div class="navigation-container">
			<ul class="subjects">
				<?php
					// 2. Firing queries - Selecting subjects from database
					$resource_subjects = find_all_subjects();
				?>
				<?php
					// 3. Fetching and using information from the resource
					while( $assoc_subjects = mysqli_fetch_assoc($resource_subjects) ){
				?>
				<li>
					<a href="manage_content.php?subject=<?php echo urlencode($assoc_subjects["menu_name"]); ?>"><?php echo $assoc_subjects["menu_name"]; ?></a>
					<ul class="pages">
						<?php
							// 2. Firing queries - Selecting pages from database
							$resource_pages = find_pages_by_subject_id($assoc_subjects["id"]);
						?>
						<?php
							// 3. Fetching and using information from the resource
							while( $assoc_pages = mysqli_fetch_assoc($resource_pages) ){
						?>
						<li>
							<a href="manage_content.php?page=<?php echo urlencode($assoc_pages["menu_name"]); ?>"><?php echo "{$assoc_pages["menu_name"]}"; } ?></a>
						</li>

					</ul>
				</li>
				<?php
					}
					mysqli_free_result($resource_pages);
				?>
			</ul>
		</div>
		<!-- Navigation Page ends here-->
		<?php
			mysqli_free_result($resource_subjects);
		?>
		<!-- Content Starts Here -->
		<div class="content">
			<h2>Manage Content</h2>
		</div>
		<!-- Content Ends Here -->
</div>
 
<?php
include("../includes/layout/footer.php");		
?>