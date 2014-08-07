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
					$query = "SELECT * FROM subjects WHERE visible=1; ";
					$resource_subjects = mysqli_query($connection, $query);
					check_query($resource_subjects);
				?>
				<?php
					// 3. Fetching and using information from the resource
					while( $assoc_subjects = mysqli_fetch_assoc($resource_subjects) ){
				?>
				<li>
					<?php
						echo $assoc_subjects["menu_name"];
					?>
					
					<!-- Error Prone Starts -->
					<ul class="pages">
						<?php
							// 2. Firing queries - Selecting pages from database
							$query = "SELECT * FROM pages WHERE visible=1 AND subject_id={$assoc_subjects["id"]}";
							$resource_pages = mysqli_query($connection, $query);
							check_query($resource_pages);
						?>
						<?php
							// 3. Fetching and using information from the resource
							while( $assoc_pages = mysqli_fetch_assoc($resource_pages) ){
						?>
						<li>
							<?php
								echo "{$assoc_pages["menu_name"]}";
								}
							
							?>
						</li>

					</ul>
					<!-- Error Prone Ends -->
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