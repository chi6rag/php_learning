<?php
	function mysqli_check_resource($resource){
		if(!$resource){
			die("Fatal Error: MySQLi Query Failed");
		}
	}

?>