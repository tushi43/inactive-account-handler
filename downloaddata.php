
<?php
require 'connect.php';
	session_start();
	mysqli_set_charset($conn,'utf-8');
 $row = $_SESSION['user_id'];
 $id = $row['id'];
 $description = addslashes($_POST['description']);
 $sql = "SELECT name,type,realsize,imagetmp 
		 FROM t4 WHERE description= '$description' and id=$id";
 $result = mysqli_query($conn,$sql) or die('Error, query failed');
 list($file, $type, $size,$content) = mysqli_fetch_array($result);
 header("Content-length: $size");
 header("Content-type: $type");
 header("Content-Disposition: attachment; filename=$file");
 ob_clean();
 flush();
 readfile($content);
 mysqli_close($conn);
 exit;

?>