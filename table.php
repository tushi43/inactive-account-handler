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
    <title>Tables</title>
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
<div class="col-lg-2 col-md-4 col-sm-4 col-xs-12 text-center">
            </div>
            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 text-center">
           
<?php

$sql1="SELECT id,username,email,e1,e2,e3,time_to_send_email FROM t2";
if ($result1 = $conn->query($sql1)) {
echo "<table border='4'>";
$i = 0;
while($row = $result1->fetch_assoc())
{
    if ($i == 0) {
      $i++;
      echo "<tr>";
      foreach ($row as $key => $value) {
        echo "<th bgcolor=#F5FFFA height='50' style=\"text-align:center;\" >" . $key . "</th>";
      }
      echo "</tr>";
    }
    echo "<tr>";
    foreach ($row as $value) {
      echo "<td bgcolor= #F5FFFA height='30' style=\"text-align:center;\" >" . $value . "</td>";
    }
    echo "</tr>";
}
echo "<br><br><br>";

}

$sql2="SELECT id, username, email, data_deleted, data_deletion_date FROM t3";
if ($result2 = $conn->query($sql2)) {
echo "<table border='2'>";

$i = 0;
while($row = $result2->fetch_assoc())
{
    if ($i == 0) {
      $i++;
      echo "<tr>";
      foreach ($row as $key => $value) {
        echo "<th bgcolor= '#F5FFFA' height='50' style=\"text-align:center;\">  " . $key . " </th>";
      }
      echo "</tr>";
    }
    echo "<tr>";
    foreach ($row as $value) {
      echo "<td bgcolor= '#F5FFFA' height='50' > " . $value . " </td>";
    }
    echo "</tr>";
}
echo "<br><br><br>";

}
mysqli_close($conn);
?>
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

