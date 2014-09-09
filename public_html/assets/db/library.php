<?php

/* old school */
session_start();

/* local server 
*/

$hostname_conn = "localhost";
$database_conn = "search";
$username_conn = "root";
$password_conn = "root";


$conn=mysqli_connect($hostname_conn, $username_conn, $password_conn) or die ("Oops! Server not connected"); // Connect to the host
mysqli_select_db($conn,$database_conn) or die ("Oops! DB not connected"); // select the database



?>