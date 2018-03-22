<?php

require 'core.php';

require 'connect.php';

session_start();

$row = $_SESSION["email_do"];

$username = $row["username"];

$id = $row["id"];

$email = $row["email"];

$query = "SELECT * FROM t1 WHERE id = $id ";

$data =  mysqli_query($conn,$query);

$row = mysqli_fetch_array($data);

$data = $row["data_occupied"];

$password = $row["password"];

$query1 = "Insert into t3 Values('$id','$username','$password','$email','$data',now())" ;

mysqli_query($conn,$query1); 

$query = "Delete from t4 where id=$id " ;

mysqli_query($conn,$query); 

$rootPath = $_SERVER['DOCUMENT_ROOT']."/data/".$row["id"];

array_map('unlink', glob("$rootPath/*.*"));

rmdir($rootPath);

$query2 = "Delete from t1 where id=$id " ;

mysqli_query($conn,$query2); 

$query3 = "Delete from t2 where id = $id " ;

mysqli_query($conn,$query3);

session_destroy();

header('Location: main.php');

?>