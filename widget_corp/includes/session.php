<?php
	session_start();

	function session_message(){
		if( isset($_SESSION["message"]) ){
			$output = "<div class=\"session\">";
			$output .= "{$_SESSION["message"]}";
			$output .= "</div>";
			$_SESSION["message"] = null;
		}else{
			$_SESSION["message"] = null;
			$output = null;
		}
		return $output;
	}
?>