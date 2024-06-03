<?php
    date_default_timezone_set("Asia/Manila"); 

    define('DB_SERVER', 'localhost');

    // LOCALHOST
	define('DB_PASSWORD', '');
	define('DB_NAME', 'edgarsys'); 
	define('DB_USERNAME', 'root');
	
	// HOSTINGER CLOUD STATUP edgarsys.net
	// define('DB_NAME', 'u630168728_DokEdgarDelibo'); 
	// define('DB_USERNAME', 'u630168728_r00tASPULID0');
	// define('DB_PASSWORD', '{asp}-11o87o_Itnh4twS?');

	/* Connection Attempt */
	$mysqli = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
	$mysqli->set_charset("latin1");
    $mysqli->query("SET time_zone = '+8:00'");

	if($mysqli === false) {
		die("ERROR: Could not connect. " . $mysqli->connect_error);
	}

    // Error Pages
    // if($stmt === FALSE) { header("Location: pages-error-500.php"); }
    
?>