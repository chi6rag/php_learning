<?php
	session_start();

	function session_message(){
		$output = "<div class=\"session\">";
		$output .= "{$_SESSION["message"]}";
		$output .= "</div>";
		$_SESSION["message"] = null;
	}
?>