<?php

require "connect.php";

require "core.php";

session_start();

$row = $_SESSION['user_id'] ;

$id = $row["id"];
if(!empty($_POST['description']))
	{
		
$description= addslashes( $_POST['description']);

$target = $_SERVER['DOCUMENT_ROOT']."/data/".$id."/";

if (!file_exists($target)) {
    mkdir($target, 0777, true);
}

$target = $target.basename( $_FILES['myimage']['name']);

$imagename=$_FILES["myimage"]["name"]; 

$imagetmp = $target;
$type = $_FILES['myimage']['type'];
$realsize= ($_FILES['myimage']['size']);
$size = $realsize/1024;
$size = $size/1024;
$a=0;
$query = "INSERT INTO t4 VALUES('$id','$imagename','$type','$size','$realsize','$description','$imagetmp')";
$a+=1;
//Insert the image name and image content in image_table
$insert_image = mysqli_query($conn,$query);

if(!$insert_image)
{
	echo "window.alert(Sorry, there was a problem uploading your file.)";
}
else{
if(move_uploaded_file($_FILES['myimage']['tmp_name'], $target)) {
echo("<SCRIPT LANGUAGE = 'JavaScript'>
		window.alert('You successfully entered product data')
		window.location.href = 'home.php'
		</SCRIPT>");
} else {
    echo "window.alert(Sorry, there was a problem uploading your file.)";
}
	}
	}
	else{
		echo("<SCRIPT LANGUAGE = 'JavaScript'>
		window.alert('Please enter the description')
		window.location.href = 'home.php'
		</SCRIPT>");
	}
exit();

?>