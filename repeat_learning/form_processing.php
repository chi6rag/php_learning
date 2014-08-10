<?php
	if ( isset($_POST[]) )
	{

	}elseif( $_POST["username"]== "" || $_POST["password"]== "" ){
		echo "Incorrect details";
		exit;
	}else{
		
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Form Processing</title>
</head>
<body>
<?php
	print_r($_POST);
?>
</body>
</html>