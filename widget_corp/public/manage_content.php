<?php
	// 1. Connecting to the database
	$host = "localhost";
	$username = "widget_cms";
	$password = "secretpassword";
	$db_name = "widget_corp";
	$connection = mysqli_connect($host, $username, $password, $db_name);

	// Testing database connectivity
	if(mysqli_connect_errno($connection)){
		die("Database connection failed<br />");
	}

	// 2. Firing queries

	$menu_name = "Today's Widget Trivia";
	$menu_name = mysqli_real_escape_string($connection,$menu_name);
	$query = "INSERT INTO subjects(id, menu_name, position, visible) VALUES(5, '{$menu_name}', 5,1)";
	$resource = mysqli_query($connection, $query);

	$query = "SELECT * FROM subjects;";
	$resource = mysqli_query($connection, $query);

	// Testing query
	if(!$resource){
		die("Database query failed");
	}
?>
<?php
	require_once("../includes/functions.php");
?>


<!-- Header starts here -->
<?php
include("../includes/layout/header.php");		
?>
<!-- Header ends here -->



	<div class="content-container">		
		<!-- Navigation Page starts here -->
		<div class="navigation-container">
			<ul>
			<?php
				// 3. Fetching subjects and displaying them
				while($subjects_assoc = mysqli_fetch_assoc($resource)){
					echo "{$subjects_assoc["menu_name"]}<br />";
				}
			?>
			</ul>
		</div>
		<!-- Navigation Page ends here-->


		<!-- Content Starts Here -->
		<div class="content">
			<h2>Manage Content</h2>
		</div>
		<!-- Content Ends Here -->
</div>
<?php
	// Release the data
	mysqli_free_result($resource);
?>


<!-- Footer starts here -->
<?php
	include("../includes/layout/footer.php");
?>
<!-- Footer ends here -->
<?php
	mysqli_close($connection);
?>