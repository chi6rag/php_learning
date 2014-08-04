<!DOCTYPE html>
<html>
	<head>
		<title>Form</title>
		<style>
		body {
			background-color: #A30000;
		}
		input {
			height: 60px;
			width: 240px;
			border: 0px solid;
			padding: 5px;
			font-family: sans-serif;
			margin: 0 auto;
			font-size: 24px;
			font-weight: 0;
			color: gray;
		}
		#submit input{
			height: 30px;
			width: 120px;
			font-size: 12px;
		}
		.submit-form {
			margin-top: 200px;
			text-align: center;
		}

		</style>
	</head>
	<body>
		<div class="submit-form">
			<form action="processing.php" method="post" >
				<input type="text" name="username" placeholder="Email" /><br /><br />
				<input type="password" name="password" placeholder="Password" /><br /><br />
				<span id="submit"><input type="submit" name="Submit" /></span>
			</form>
		</div>
		
	</body>
</html>