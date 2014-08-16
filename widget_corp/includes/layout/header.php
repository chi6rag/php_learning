<?php
	if( !isset($layout_context) ){
		$layout_context = "public";
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<title><?php echo $layout_context == "public" ? "WidgetCorp" : "WidgetCorp Admin"; ?></title>
		<link type="text/css" rel="stylesheet" href="stylesheets/public.css" />
		<link href='http://fonts.googleapis.com/css?family=Muli:300,400' rel='stylesheet' type='text/css'>
	</head>
	<body>
		<div class="header">
			<br />
			<h1><?php echo $layout_context == "public" ? "WidgetCorp" : "WidgetCorp Admin"; ?></h1>
		</div>