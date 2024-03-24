<?php
echo "Welcome to our data base"
/* ways to conncet MySQL
1. MySQLi extension
2. PDO- php data object.
*/
//MySQLi extension

// Connection to database
$username="localhost";
$username="root";
$password="";

// create connection
$conn = mysqli_connect($servername, $username, $password);
echo"Connection was succesful"
?>