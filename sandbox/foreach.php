<!DOCTYPE html>
<html>
	<head><title>foreach</title></head>
	<body>
		<?php
			
			// foreach array for simple arrays 
			$ice_creams = array("Casatta", "Black Currant", "Vanilla", "Strawberry");
			foreach($ice_creams as $product){
				echo $product."<br />";
			}

			// foreach array for associative arrays
			$person = array(
				"first_name" => "Chirag",
				"last_name" => "Aggarwal",
				"age" => 20
				);
			echo "<br /><br />";
			foreach($person as $key => $value){
				//if(is_integer($value)) $value=strval(value);
				$key = str_replace("_", " ", $key);
				echo $key . ": " . "{$value}<br />";
				//echo $key . " => " . $value."<br />";
			}
		?>

	</body>
</html>