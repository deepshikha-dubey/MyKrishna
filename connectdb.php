<?php
/*
  mysql_connect("localhost","root","");
  mysql_select_db("mykrishna");
   
   */

// $servername = "localhost";
// $username = "root"; // Replace with your actual username
// $password = ""; // Replace with your actual password
// $dbname = "mykrishna"; 

// // Create connection
// $conn = new mysqli($servername, $username, $password, $dbname);

// // Check connection
// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// }



$servername = "mysql";   // Docker Compose service name
$username = "root";      // same as MYSQL_ROOT_PASSWORD user
$password = "rootpass";  // same as MYSQL_ROOT_PASSWORD
$dbname = "mykrishna";   // same as MYSQL_DATABASE

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

