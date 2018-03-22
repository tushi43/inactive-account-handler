<?php

require 'connect.php';

require 'core.php';

session_start();

require_once("dbcontroller.php");

$db_handle = new DBController();

			
	$product_array = $db_handle->runQuery("SELECT * FROM t2 order by id ASC");
	
	if (!empty($product_array)) { 
		foreach($product_array as $key=>$value){
			
			$email = $product_array[$key]['email'];
			
			$username = $product_array[$key]['username'];
			
			$password = $product_array[$key]['hashcode'];
			
			$e1 = $product_array[$key]["e1"];
			
			$e2 = $product_array[$key]["e2"];
				
			$e3 = $product_array[$key]["e3"];
			
			$id = $product_array[$key]["id"];
			
			$time_to_send_email = $product_array[$key]['time_to_send_email'];
			
			if( $e1 == 0 )
			{
				
				email_send($email,$username,$password);
				
				$query = "UPDATE t2 SET e1=1,time_to_send_email=0 WHERE id= $id";

				mysqli_query($conn,$query);
				
			}else if($e1 == 1 && $e2 == 0 && $e3 == 0 && $time_to_send_email >= 300 ){
				
				email_send($email,$username,$password);
				
				$query = "UPDATE t2 SET e2=1,time_to_send_email=0 WHERE id= $id";

				mysqli_query($conn,$query);
				
			}else if( $e1 == 1 && $e2 == 1 && $e3 == 0 && $time_to_send_email >= 300 ){
				
				email_send($email,$username,$password);
				
				$query = "UPDATE t2 SET e3=1,time_to_send_email=0 WHERE id= $id";

				mysqli_query($conn,$query);
				
			}
		}
	}
?>