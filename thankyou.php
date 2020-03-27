<?php 
require 'connection.php';
	function GetImageExtension($imagetype)
    {
       if(empty($imagetype)) return false;
       switch($imagetype)
       {
           case 'image/bmp': return '.bmp';
           case 'image/gif': return '.gif';
           case 'image/jpeg': return '.jpg';
           case 'image/png': return '.png';
           default: return false;
       }
    }
	if (!empty($_FILES["uploadedimage"]["name"])) 
	{
		$file_name=$_FILES["uploadedimage"]["name"];
		$temp_name=$_FILES["uploadedimage"]["tmp_name"];
		$imgtype=$_FILES["uploadedimage"]["type"];
		$ext= GetImageExtension($imgtype);
		$imagename=date("d-m-Y")."-".time().$ext;
		$target_path = "uploads/".$imagename;
		move_uploaded_file($temp_name, $target_path);
	}

$conn    = Connect();
$category    = $conn->real_escape_string($_POST['category']);
$city   = $conn->real_escape_string($_POST['city']);
$title  = $conn->real_escape_string($_POST['title']);
$price  = $conn->real_escape_string($_POST['price']);
$description  = $conn->real_escape_string($_POST['description']);
$name    = $conn->real_escape_string($_POST['name']);
$mobile   = $conn->real_escape_string($_POST['mobile']);
$email    = $conn->real_escape_string($_POST['email']);

$query   = "INSERT into postad (ad_category,ad_city,ad_title,ad_price,ad_description,ad_image,s_name,s_mobile,s_email) VALUES('" . $category . "','" . $city . "','" . $title . "','" . $price . "','" . $description . "','" . $target_path . "','" . $name . "','" . $mobile . "','" . $email . "')";
$success = $conn->query($query);
 
	if (!$success)
	{
		die("Couldn't enter data: ".$conn->error);
	}
	
	$conn->close();
	header('location: allfields.php');
?>