<?php

require 'core.php';

require 'connect.php';
if($_SESSION['admin_id'])
{
// Get data from database
$result = mysqli_query($conn,"SELECT period, COUNT(id) as count1 FROM t1 where period>=3600 GROUP BY period");

$result1 = mysqli_query($conn,"SELECT active,COUNT(id) as count FROM t1 GROUP BY active");

$result2 = mysqli_query($conn,"SELECT id,data_deleted FROM t3 ORDER BY id");

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
    <!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
    <!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
    <!--[if IE 9]> <html class="no-js ie9 oldie" lang="en"> <![endif]-->
    <meta charset="utf-8">
    <!-- Set the viewport width to device width for mobile -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="Coming soon, Bootstrap, Bootstrap 3.0, Free Coming Soon, free coming soon, free template, coming soon template, Html template, html template, html5, Code lab, codelab, codelab coming soon template, bootstrap coming soon template">
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
        <link rel="stylesheet" href="assets/css/rstyle.css">
		<link rel="stylesheet" href="assets/css/newstyle.css">
        
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Favicon and touch icons -->
		
		
		<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);
google.charts.setOnLoadCallback(drawChart1);
google.charts.setOnLoadCallback(drawChart2);

function drawChart() {

    var data = google.visualization.arrayToDataTable([
      ['period','count1'],
      <?php
      if($result->num_rows > 0){
          while($row = $result->fetch_assoc()){
			  if($row['period']<=3600)
			 {
				 $row['period']='Less than one hour';
			 }
			 elseif($row['period']>3600 && $row['period']<=86400)
			 {
				 $row['period']='day to week ';
			 }
			  else
			 {
				 $row['period']='more than week';
			 }
            echo "['".$row['period']."', ".$row['count1']."],";
          }
      }
      ?>
    ]);
    
    var options = {
        title: 'Users exits for more than one Hour',
        width: 900,
        height: 500,
		is3D: true,
    };
    
    var chart = new google.visualization.PieChart(document.getElementById('piechart'));
     
    chart.draw(data, options);
}

function drawChart1() {

    var data1 = google.visualization.arrayToDataTable([
      ['active','count'],
      <?php
      if($result1->num_rows > 0){
          while($row = $result1->fetch_assoc()){
			 if($row['active']==1)
			 {
				 $row['active']='Active';
			 }
			 else
			 {
				 $row['active']='Inactive';
			 }
			echo "['".$row['active']."', ".$row['count']."],";
		  }
      }
      ?>
    ]);
    
    var options1 = {
        title: 'All Active Users',
        width: 900,
        height: 500,
		is3D: true,
    };
    
    var chart1 = new google.visualization.PieChart(document.getElementById('piechart1'));
     
    chart1.draw(data1, options1);
}

function drawChart2() {

    var data2 = google.visualization.arrayToDataTable([
      ['id','data_deleted'],
      <?php
      if($result2->num_rows > 0){
          while($row = $result2->fetch_assoc()){
	
			echo "['".$row['id']."', ".$row['data_deleted']."],";
		  }
      }
      ?>
    ]);
    
    var options2 = {
        title: 'Deleted user\'s data',
        width: 900,
        height: 500,
		is3D: true,
    };
    
    var chart2 = new google.visualization.PieChart(document.getElementById('piechart2'));
     
    chart2.draw(data2, options2);
}
</script>
        
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
                
                <li><a href="table.php">Tables</a>
                </li>
				<li><a href="count.php">Analysis2</a>
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

        <div class="container">
          
			<!-- Display the pie chart -->
    <div id="piechart"></div>
	<div id="piechart1"></div>
	<div id="piechart2"></div>		
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