<?php


$mysql_host = 'localhost';

$mysql_user = 'root';

$mysql_pass = '';

global $conn;

$conn = mysqli_connect($mysql_host,$mysql_user,$mysql_pass);

$mysql_db = 'iah1';

if(!$conn || !mysqli_select_db($conn,$mysql_db))

{

die(mysqli_connect_error());	//Kill the page

}

mysqli_set_charset($conn,'utf-8');

?>