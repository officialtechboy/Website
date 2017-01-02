<?php

//  Project: SLNR Web Framework
//  Name: Definition File
//  Description: Variable and required site definitions such as database connections and session management

// Variable definitions
define("DB_HOST", "127.0.0.1");
define("DB_USER", "root");
define("DB_PASS", "");
define("DB_NAME", "WebFramework");

include("_include/connect.php");

// Get General information

$result = $db->query("SELECT project_name, contact_email, contact_address, contact_phone FROM general");
if (!$result){
	die("Could not retrieve general information [" . $db->error . "]");
}

if ($row = $result->fetch_assoc()){
	define("PR_NAME", $row['project_name']);
	define("CT_EMAIL", $row['contact_email']);
	define("CT_ADDRE", $row['contact_address']);
	define("CT_PHONE", $row['contact_phone']);
	$result->free();
} else {
	die("Something went wrong");
}

// Start session
session_start();

?>