<?php
function getDB() {
$dbhost="localhost";
$dbuser="stalker";
$dbpass="husam";
$dbname="stalker_db";
$dbConnection = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass); 
$dbConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
return $dbConnection;
}

/* User Sessions */
session_start();
//$session_user_id=$_SESSION['user_id']; 
$session_user_id="1";
?>
