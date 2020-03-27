<?php

$host = "localhost";    /* Host name */
$dbuser = "booksbaz_srpm";       /* User */
$password = "Python@123";         /* Password */
$dbname = "booksbaz_db_live";   /* Database name */

// Create connection
$conn = mysqli_connect($host, $dbuser, $password,$dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>