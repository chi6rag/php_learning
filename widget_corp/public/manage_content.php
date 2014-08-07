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
					<a href="manage_content.php?subject=<?php echo urlencode($assoc_subjects["id"]); ?>">
						<?php echo $assoc_subjects["menu_name"];
						?>
					</a>
					<ul class="pages" class="selected">
						<?php
							// 2. Firing queries - Selecting pages from database
							$resource_pages = find_pages_by_subject_id($assoc_subjects["id"]);
						?>
						<?php
							// 3. Fetching and using information from the resource
							while( $assoc_pages = mysqli_fetch_assoc($resource_pages) ){
						?>
						<li>
							<a href="manage_content.php?page=<?php echo urlencode($assoc_pages["id"]); ?>"><?php echo "{$assoc_pages["menu_name"]}"; } ?></a>
						</li>

					</ul>
				</li>
				<?php
					}
					//mysqli_free_result($resource_pages);
				?>
			</ul>
		</div>
		<!-- Navigation Page ends here-->
		<?php
			//mysqli_free_result($resource_subjects);
		?>
		<!-- Content Starts Here -->
		<div class="content">
			<?php
				if( isset($_GET["subject"]) ){
					// Display subject Name
					$query = "SELECT * FROM subjects WHERE id={$_GET["subject"]};";					// Save MySQL query in a variable $query
					$resource_subjects = mysqli_query($connection, $query);									// Fire MySQL Query
					check_query($resource_subjects);																				// Check if query succeeded
					$assoc_subjects = mysqli_fetch_assoc($resource_subjects);								// Fetches the required row as an associative array
					echo "<h4>{$assoc_subjects["menu_name"]}<h4><br />";												// Prints menu_name
					// Display subject Name Over

				}elseif( isset($_GET["page"]) ){
					
					// Display page Name
					$query = "SELECT * FROM pages WHERE id={$_GET["page"]};";
					$resource_pages = mysqli_query($connection, $query);
					check_query($resource_pages);
					$assoc_pages = mysqli_fetch_assoc($resource_pages);
					echo "<h4>{$assoc_pages["menu_name"]}<h4>";
					echo "<p>{$assoc_pages["content"]}</p>";
					// Display Page Name Over
				}
				else{
					echo "<h2>Manage Content</h2>";
				}
			?>
		</div>
		<!-- Content Ends Here -->
</div>
 
<?php
include("../includes/layout/footer.php");		
?>