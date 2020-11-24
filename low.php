<?php

header ("X-XSS-Protection: 0");

// Is there any input?
// setcookie("random123");
$html="";
if( array_key_exists( "name", $_GET ) && $_GET[ 'name' ] != NULL ) {
	// Feedback for end user
	$html .= '<pre>' . $_GET[ 'name' ] . '</pre>';
	echo $html;
}

?>