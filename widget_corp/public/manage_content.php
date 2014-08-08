<?php
	require_once("../includes/db_connection.php");
?>


<!-- Header starts here -->
<?php
include("../includes/layout/header.php");		
?>
<!-- Header ends here -->



	<div class="content-container">		
		<!-- Navigation Page starts here -->
		<div class="navigation-container">
				<?php
					// 2. Firing queries
					$query = "SELECT * FROM subjects;";
					$resource = mysqli_query($connection, $query);

					// 3. Fetching subjects and displaying them
					while($subjects_assoc = mysqli_fetch_assoc($resource)){
						echo "{$subjects_assoc["menu_name"]}<br />";
					}
				?>
		</div>
		<!-- Navigation Page ends here-->


		<!-- Content Starts Here -->
		<div class="content">
			<h2>Manage Content</h2>
		</div>
		<!-- Content Ends Here -->
</div>


<!-- Footer starts here -->
<?php
	include("../includes/layout/footer.php");
?>
<!-- Footer ends here -->