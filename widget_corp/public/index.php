<?php require_once("../includes/db_connection.php"); ?>
<?php
	// 2. Firing queries
	$query = "SELECT * FROM subjects WHERE visible=1; ";
	$resource = mysqli_query($connection, $query);
?>

<?php
include("../includes/layout/header.php");		
?>
	<div class="content-container">		
		<!-- Navigation Page starts here -->
		<div class="navigation-container">
			<!-- <ul class="subjects">
				<?php
					// 3. Fetching and using information from the resource
					while($assoc = mysqli_fetch_assoc($resource)){
				?>
				<li>
					<?php
						echo $assoc["menu_name"];
					}
					?>
				</li>
			</ul> -->
		</div>
		<!-- Navigation Page ends here-->
		<?php
			// 4. Releasing data
			mysqli_free_result($resource);
		?>

		<!-- Content Starts Here -->
		<div class="content">
			<h2>Index</h2>
			<ul>
				<li><a href="manage_content.php">Manage Website Content</a></li>
			</ul>
		</div>
		<!-- Content Ends Here -->
</div>
<?php
	include("../includes/layout/footer.php");
	include("../includes/db_connection_close.php");
?>