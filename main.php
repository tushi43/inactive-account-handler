<?php

require 'core.php';

require 'connect.php';

session_start();

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
    <title>Home</title>
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
                <li><a href="about.php">About Us</a>
                </li>
                <li><a href="contact.php">Contact Us</a>
                </li>
				<?php 
				if($_SESSION['admin_id'])
				{
					?>
                <li><a href="adminlogout.php"><span class="glyphicon glyphicon-user"></span>&nbsp;&nbsp;Admin Logout</a></li>&nbsp;&nbsp;&nbsp;&nbsp;
        <?php 
				}
				else{
					?>
					<li><a href="adminlogin.php"><span class="glyphicon glyphicon-log-in"></span>&nbsp;&nbsp;Admin Login</a></li>&nbsp;&nbsp;&nbsp;&nbsp;
				<?php } 
				if($_SESSION['user_id'])
				{
					?>
                <li><a href="Logout.php"><span class="glyphicon glyphicon-user"></span>&nbsp;&nbsp;User Logout</a></li>&nbsp;&nbsp;&nbsp;&nbsp;
        <?php 
				} 
				else{
					?>
					<li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span>&nbsp;&nbsp;User Login</a></li>&nbsp;&nbsp;&nbsp;&nbsp;
                     <li><a href="register.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
				<?php } ?>
				
            </ul>
			
        </div>
    </div>
</div>

        <div class="container">
		<div class="col-lg-1 col-md-4 col-sm-4 col-xs-0 text-center">
		
		
            </div>
			<div class="col-lg-10 col-md-8 col-sm-12 col-xs-12 text-center">
            <h2>Stats about Data</h2>  
  <div id="myCarousel" class="carousel slide" data-ride="carousel" >
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1">
	  <li data-target="#myCarousel" data-slide-to="2">
	  <li data-target="#myCarousel" data-slide-to="3">
	  <li data-target="#myCarousel" data-slide-to="4">
	  <li data-target="#myCarousel" data-slide-to="5"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" >
      <div class="item active">
        <img src="s5.jpg" alt="big data">
      </div>
      <div class="item">
        <img src="s7.jpg" >
      </div>
	  <div class="item">
        <img src="s8.jpg" >
      </div>
	  <div class="item">
        <img src="t5.jpg" >
      </div>
	  <div class="item">
        <img src="s2.png" >
      </div>
	  <div class="item">
        <img src="t8.jpg" >
      </div>
    </div>
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  </div>
        </div>
                 <script src="js/jquery.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/jquery.backstretch.js" type="text/javascript"></script>
        <script type="text/javascript">
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



