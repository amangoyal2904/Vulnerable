<?php

header ("X-XSS-Protection: 0");

// Is there any input?
// setcookie("random123");
$html="";
if( array_key_exists( "username", $_GET ) && array_key_exists( "password", $_GET ) && $_GET[ 'username' ] != NULL ) {
	// Feedback for end user
    $html .= '<pre> Username is ' . $_GET[ 'username' ] . '</pre>';
    $html .= '<pre> Password is ' . $_GET[ 'password' ] . '</pre>';
	echo $html;
}

?>