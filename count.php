<?php

include "connect.php";

include "core.php";

if($_SESSION['admin_id'])
{
	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<style>
table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    text-align: center;
	padding:20px;
}
th {
    background-color: #4CAF50;
    color: white;
}
</style>

    <!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
    <!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
    <!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
    <!--[if IE 9]> <html class="no-js ie9 oldie" lang="en"> <![endif]-->
    <meta charset="utf-8">
    <!-- Set the viewport width to device width for mobile -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Analysis</title>
    <!-- ============ Google fonts ============ -->
    <link href='http://fonts.googleapis.com/css?family=EB+Garamond' rel='stylesheet'
        type='text/css' />
		
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700,300,800'
        rel='stylesheet' type='text/css' />
    <!-- ============ Add custom CSS here ============ -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
      <link href="css/style.css" rel="stylesheet" type="text/css" />    
   
    <link href="css/font-awesome.css" rel="stylesheet" type="text/css" />
<!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="assets/css/form-elements.css">
		<style>
		body{
		color:white;
		}
		p{
			font-size: 20px;
			margin-left: 0px;
		}
		
		</style>

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Favicon and touch icons -->
        
</head>
<body>
    <div id="custom-bootstrap-menu" class="navbar navbar-default " role="navigation">
    <div class="container">
	<ul><img src="img/logo.jpg" height="100" width="100" align="left"></ul> 
        <div class="navbar-header"><a class="navbar-brand" href="main.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Inactive Account Handler</a>
		<span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-menubuilder"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse navbar-menubuilder">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="main.php">Home</a>
                </li>
                <li><a href="chart.php">Analysis1</a>
                </li>
				<li><a href="table.php">Table</a>
                
				<?php 
				if($_SESSION['admin_id'])
				{
					?>
                <li><a href="adminlogout.php"><span class="glyphicon glyphicon-user"></span>&nbsp;&nbsp;Admin Logout</a></li>&nbsp;&nbsp;&nbsp;&nbsp;
        <?php 
				}
					?>
            </ul>
			
        </div>
    </div>
</div>
<div class="col-lg-2 col-md-4 col-sm-4 col-xs-12 text-center">
            </div>
            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
			<br><br>
			<?php  
                $query = "Select * from t1"; 
				$result = mysqli_query($conn,$query);  
				$number_of_accounts = mysqli_num_rows($result);
				
                $query = "Select * from t3"; 
				$result = mysqli_query($conn,$query);  
				$number_of_daccounts = mysqli_num_rows($result);
				
                $query = "Select data_occupied from t1"; 
				$result = mysqli_query($conn,$query);  
				 while($row = mysqli_fetch_assoc($result)) {
					$data = $data + $row["data_occupied"];
				}
				$data_d = 0;
                $query1 = "Select data_deleted from t3"; 
				$result1 = mysqli_query($conn,$query1);
				while($row1 = mysqli_fetch_assoc($result1)) {
					$data_d = $data_d + $row1["data_deleted"];
				}				
			    $data_full = 1536;
			 echo " <p> Number of Accounts : ".$number_of_accounts."</p><br>"; 
			 echo "<p>Total Space Alloted : 1536 MB</p><br>";
			 echo "<p>Space consumed: ".$data."</p><br>";
			 echo "<p>Amount of Data Removed(Space saved): ".$data_d."</p><br>";
			 echo "<p>Number of Accounts whose data is removed: ".$number_of_daccounts."</p><br>";
			 $data_left  = $data_full - $data - $data_d;
			 $dcl=0; $dsc=0; $dsd=0;
			 ?>
			 
	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

function drawChart() {

    var data = google.visualization.arrayToDataTable([
      ['period','count1'],
      <?php
      if($data > 0){
		  
				 $dsl ='Data Space left';
				 $dsc ='Space Consumed';
				 $dsd ='Data removed';
			echo "['".$dsl."',".$data_left."],";
			echo "['".$dsc."',".$data."],";
            echo "['".$dsd."',".$data_d."],";
          }
      ?>
    ]);
    
   var options = {
        title: 'Inactive account\'s data removed',
        width: 1200,
        height: 600,
		is3D: true,
    };
    
    var chart = new google.visualization.PieChart(document.getElementById('piechart'));
     
    chart.draw(data, options);
}	
</script>
           <div id="piechart"></div>
</div>
<div class="col-lg-2 col-md-4 col-sm-4 col-xs-12 text-center">
            </div>

        
       <!-- Javascript -->
                 <script src="js/jquery.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/jquery.backstretch.js" type="text/javascript"></script>
        <script type="text/javascript">
            'use strict';

            /* ========================== */
            /* ::::::: Backstrech ::::::: */
            /* ========================== */
            // You may also attach Backstretch to a block-level element
            $.backstretch(
        [
            "img/44.jpg",
            "img/colorful.jpg",
            "img/34.jpg",
            "img/images.jpg"
        ],

        {
            duration: 4500,
            fade: 1500
        }
    );
        </script>
</body>
</html>
<?php
}
else
{
	header('Location:adminlogin.php');
}
?>

