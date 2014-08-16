<?php
	$layout_context = "admin";
	require_once("../includes/layout/header.php");
	require_once("../includes/functions.php");
?>
<div class="main">
	<div class="navigation">
	</div>
	<div class="page">
		<h2>Admin Menu</h2>
		<p>Welcome to the admin area</p>
		<ul>
			<li><a href="manage_content.php">Manage Content</a></li>
			<li><a href="manage_admins.php">Manage Admins</a></li>
			<li><a href="logout.php">Logout</a></li>
		</ul>
	</div> 
</div>
<?php include_once("../includes/layout/footer.php"); ?>