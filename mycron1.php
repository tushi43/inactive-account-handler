<?php

require 'connect.php';

require 'core.php';

session_start();

require_once("dbcontroller.php");

$db_handle = new DBController();

			
	$product_array = $db_handle->runQuery("SELECT * FROM t1 where period >= 3600 ");
	
	if (!empty($product_array)) { 
		foreach($product_array as $key=>$value){
			
			$id = $product_array[$key]["id"];
			
			$username = $product_array[$key]["username"];
			
			$email = $product_array[$key]["email"];
			
			$hashcode = $product_array[$key]["hash"];
			
			$query= "Insert into t2 Values('$id','$username','$email','$hashcode',0,0,0,0)";
			
			mysqli_query($conn,$query);
			}
		}
		
		
	$product_array1= $db_handle->runQuery("SELECT * FROM t1 where period < 3600 ");
	
	if (!empty($product_array1)) { 
		foreach($product_array1 as $key=>$value){
			
			$id= $product_array1[$key]["id"];
			
			$query1= "Delete from t2 where id=".$id;
			
			mysqli_query($conn,$query1);
			}
		}
		
?>