<?php

require 'core.php';

require 'connect.php';

session_start();
if($_SESSION['email_do'])
{
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
    <title>HOME PAGE</title>
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
       <style>
		h3{colour:black;}
		h5{colour:black;}
		h6{colour:black;}
		p{color:white;}
	</style> 
</head>
<body>
    <div id="custom-bootstrap-menu" class="navbar navbar-default " role="navigation">
    <div class="container">
	<ul><img src="img/logo.jpg" height="100" width="100" align="left"></ul> 
        <div class="navbar-header"><a class="navbar-brand" href="#">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Inactive Account Handler</a>
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-menubuilder"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse navbar-menubuilder">
		<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
            <ul class="nav navbar-nav navbar-right">
             
                <li><a href="about.php">About Us</a>
                </li>
                <li><a href="feedback.php">Contact Us</a>
                </li>
            </ul>
        </div>
    </div>
	<br><br><br>
	<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
	</div>
	<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 well well-lg">
        <p style="color: black;">Your account is inactive since a long time<br><br> Hence, you've recieved a email<br><br>Do you want to delete your account ??<br><br></p>
      
					<div class="form-group">
                        <div class="col-lg-08 col-lg-offset-2">
						<div class="dropdown">
    <button class="btn btn-default dropdown-toggle" type="button" id="menu1" data-toggle="dropdown">Yes
    <span class="caret"></span></button>
    <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
      <a role="menuitem" tabindex="-1" href="downloadwholedata.php"><button type="submit" class="btn btn-primary">Download Your Data</button></a>
     <a role="menuitem" tabindex="-1" href="yes.php"><button type="submit" class="btn btn-primary">Deleting the account without Data</button></a>
    </ul>
 
       
							<a href="no.php"><button type="submit" class="btn btn-primary" value="No">
                                No</button></a>
								 </div>
                        </div>
						</div>
        </div>
		<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
		</div>
	</div>
</div>

 
    <footer >
	 <h5 align="center" ><strong>Copyright © 2017 IAH Team.</strong>
	 </h5>
	  <h6 align="center">ALL RIGHTS RESERVED.</h6>
	 <div class="navbar-text pull-right">
							<span class="li-social">
								&nbsp;&nbsp;<a href="https://www.facebook.com/InactiveAccountHandler/"<i class="fa fa-facebook" fa-5xx></i></a> 
								&nbsp;&nbsp;<a href="https://twitter.com/ajinkya_pawale"<i class="fa fa-twitter" fa-5x></i></a> 
							</span>
	</div>
  </footer>
</nav>
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
	header('Location:decision.php');
}
?>