<?php

require "connect.php";

require "core.php";

$row = $_SESSION['user_id'] ;

$id = $row["id"];

$des = $_POST['description'];

$path = $_POST['imagetmp'];

echo $des;

$query = "DELETE FROM t4 WHERE description='".$des."' and id=$id";

$delete_image = mysqli_query($conn,$query);

unlink($path);

echo("<SCRIPT LANGUAGE = 'JavaScript'>
		window.alert('You successfully deleted product data')
		window.location.href = 'home.php'
		</SCRIPT>");
		
exit();

?>