<!DOCTYPE html>
<html>
<head>
	<title>Validation</title>
</head>
<body>
<?php
	// presence
	$value = null;
	if(!isset($value) || empty($value)) echo "Validation failed";

	// string length
	// $min is the minimum length
	$value = "";
	$min = 3;
	if(strlen($value) < $min){
		echo "<br />Validation Failed";
	}
	// string length
	// $max is the maximum length
	$value = "sjdhbchsdbhj";
	$max = 3;
	if(strlen($value) < $max){
		echo "<br />Validation Failed";
	}

	// type
	$value = 1;
	if(!is_string($value)){
		echo "<br />Value not string, Validation Failed";
	}

	// inclusion in a set
	$value = 1;
	$set  = array(1,2,3,4,5,6);
	if(!in_array($value, $set)) {
		echo "<br />Validation Failed";
	}

	// regex
	$value = "chi6rag@gmail.com";
	if( preg_match("/@/",$value) ){
		echo "<br />Validation Pass, @ symbol found";
	}
?>
</body>
</html>