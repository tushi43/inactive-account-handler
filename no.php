<?php

require 'connect.php';

require 'core.php';

$row = $_SESSION["email_do"];

$id = $row["id"];

echo $id;

$query = "UPDATE t1 SET period=0.00 WHERE id= $id ";

mysqli_query($conn,$query);

$query1 = "Delete from t2 where id=$id " ;

mysqli_query($conn,$query1);

session_destroy();

header('Location: main.php');

?>