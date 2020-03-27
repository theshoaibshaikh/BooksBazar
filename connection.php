<?php


function Connect()
{
 $dbhost = "localhost";
 $dbuser = "booksbaz_srpm";
 $dbpass = "Python@123";
 $dbname = "booksbaz_db_live";

 // Create connection
 $conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname) or die($conn->connect_error);

 return $conn;
}
 
?>
