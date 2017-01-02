<?php
session_start();

// Basic Session management

if (!isset($_SESSION['logged_in'])){
	$_SESSION['logged_in'] = 0;
	$_SESSION['user'] = '';
}

// Database configuration and connection
define("DB_HOST", "127.0.0.1");
define("DB_USER", "root");
define("DB_PASS", "");
define("DB_NAME", "WebFramework");

$db = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
if($db->connect_errno > 0){
    die('Unable to connect to database [' . $db->connect_error . ']');
}

$result = $db->query("SELECT project_name FROM general");
if (!$result){
	die("Could not retrieve general information [" . $db->error . "]");
}

if ($row = $result->fetch_assoc()){
	define("PR_NAME", $row['project_name']);
	$result->free();
} else {
	die("Something went wrong");
}

?>