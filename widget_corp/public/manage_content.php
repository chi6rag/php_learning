<?php
	require_once("../includes/database_connection.php");
	require_once("../includes/functions.php");
?>
<?php include("../includes/layout/header.php"); ?>
<div class="main">
	<div class="navigation">
		<ul class="subjects">
			<?php
				// 2.a Firing query and preparing resource_subjects
				$query = "SELECT * FROM subjects WHERE visible=1;";
				$resource_subjects = mysqli_query($connection, $query);
				mysqli_check_resource($resource_subjects);
			?>
			<?php 	  // 3.a Fetching resource_subjects and using information ?>
			<?php     while( $subjects_assoc = mysqli_fetch_assoc($resource_subjects) ){ ?>
			<li><?php 		echo "{$subjects_assoc["menu_name"]}";
							// 2.b Firing query and preparing resource_pages
							$query = "SELECT * FROM pages WHERE subject_id={$subjects_assoc["id"]};";
							$resource_pages = mysqli_query($connection, $query);
				?>
				<ul class="pages">
					<?php 		//3.b Fetching resource_pages and using information ?>
					<?php 		while( $pages_assoc = mysqli_fetch_assoc($resource_pages) ){ ?>
					<li><?php 		echo "{$pages_assoc["menu_name"]}"; ?></li>
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
	</div> 
</div>
<?php include("../includes/layout/footer.php"); ?>
