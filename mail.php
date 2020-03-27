<?php
error_reporting(E_ERROR | E_PARSE);
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Books Bazar</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style type="text/css">
	.bs-example{
		margin: 20px;
	}
</style>

<script>
function goBack() {
    window.history.go(-1);
}
</script>
</head>
<body>

<?php
$to=$_POST['email'];
$s_email=$_POST['s_email'];
$no=$_POST['no'];
$name=$_POST['sname'];
$sub="Seller Details";
$mes="Seller Name - ".$name."/ Seller Number - ".$no."/ Email - ".$s_email;

	$headers[] = 'MIME-Version: 1.0';
    $headers[] = 'Content-type: text/html; charset=iso-8859-1';
    $headers[] = 'From: no-reply@booksbazar.club';
	
if(mail($to, $sub, $mes, implode("\r\n", $headers))){
    echo '<div class="bs-example">';
    echo '<div class="alert alert-success fade in">';
    echo '<a  href="#" onclick="goBack()" class="close" data-dismiss="alert">&times;</a>';
    echo '<strong>Success!</strong> Seller details has been sent successfully to your email '.$to;
    echo '</div>';
    echo '</div>';
}else{
	echo '<div class="bs-example">';
    echo '<div class="alert alert-warning">';
    echo '<a href="#" onclick="goBack()" class="close" data-dismiss="alert">&times;</a>';
    echo '<strong>Warning!</strong> There was a problem with your network connection.';
    echo '</div>';
    echo '</div>';
    
}
?>
</body>
</html>