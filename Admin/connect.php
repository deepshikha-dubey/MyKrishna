<?php
/*
$con = mysql_connect("localhost", "root", "");
if(!$con){
die ("Connection not establish");
}
//mysql_select_db("mykrishna");
mysql_select_db("mykrishna");
*/
?>


<?php

$servername = "localhost";
$username = "root"; // Replace with your actual username
$password = ""; // Replace with your actual password
$dbname = "mykrishna"; 

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


?>
