<!-- Assume that this is the post login page for a random user -->
<!DOCTYPE html>
<html>
<head>
	<title>Welcome: First Page</title>
</head>
<body>
	<?php
		$person_details = array(
			"first_name" => "Chirag",
			"last_name" => "Aggarwal",
			"age" => 20,
			"address" => "QD-23, 2nd Floor, Vishakha Enclave, Pitampura, New Delhi, Delhi-110034" ,
			"email" => "chi6rag@gmail.com",
			"contact_number" => "+91 9555 72 9555"
			);
	?>
	<a href="clicklogin_second.php?person_details=<?php echo $person_details; ?>"><?php echo "Go to the home page of {$person_details["first_name"]} {$person_details["last_name"]}"; ?></a>
</body>
</html>