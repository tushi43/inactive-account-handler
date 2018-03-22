<?php

require 'connect.php';

require 'core.php';

/*updating timestamp before logout */

$row = $_SESSION['user_id'];

$id = $row['id'];

$query = "UPDATE t1 SET account_updated =now() WHERE id= $id ";

mysqli_query($conn,$query);

$query = "UPDATE t1 SET period = 0 WHERE id= $id ";

mysqli_query($conn,$query);

session_destroy();

header('Location: main.php');

?>