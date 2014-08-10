<?php
	// 1. Connecting to the database
	$host = "localhost";
	$username = "widget_cms";
	$password = "secretpassword";
	$db_name = "widget_corp";
	$connection = mysqli_connect($host, $username, $password, $db_name);

	// Testing connection
	if( mysqli_connect_errno($connection) ){
		die("Database query failed");
	}
?>
<?php include("../includes/layout/header.php"); ?>
<?php
	// 3. Firing query and preparing resource
	$query = "SELECT * FROM subjects;";
	$resource = mysqli_query($connection, $query);
?>
<div class="main">
	<div class="navigation">
		<ul class="subjects">
			<?php // Operating on $?>
			<?php while( $subjects_assoc = mysqli_fetch_assoc($resource)){ ?>
			<li>
				<?php
					echo "{$subjects_assoc["menu_name"]}" . "({$subjects_assoc["id"]})";
				}
				?>
			</li>
		</ul>
	</div>
	<div class="page">
		<h2>Manage Content</h2>
	</div> 
</div>
<?php include("../includes/layout/footer.php"); ?>