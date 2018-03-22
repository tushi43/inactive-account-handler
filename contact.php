<?php

require 'core.php';

require 'connect.php';

if(isset($_POST['email']) && isset($_POST['subject']) && isset($_POST['message']))

{

$email = $_POST['email'];

$subject = $_POST['subject'];

$message = $_POST['message'];

if(!empty($email) && !empty($subject) && !empty($message) )

{

email_feedback($email,$subject,$message);

header('Location: contact.php');
}

}

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
    <title>Contact Us</title>
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
                <?php 
				if($_SESSION['user_id'])
				{
					?>
                <li><a href="Logout.php"><span class="glyphicon glyphicon-user"></span>&nbsp;&nbsp;Logout</a></li>&nbsp;&nbsp;&nbsp;&nbsp;
        <?php 
				}
				else{
					?>
					<li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span>&nbsp;&nbsp;Login</a></li>&nbsp;&nbsp;&nbsp;&nbsp;
                     <li><a href="register.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
       
				<?php } ?>
				<?php
				if($_SESSION['user_id'])
				{
					?>
                <li><a href="home.php"><span class="glyphicon glyphicon-user"></span>&nbsp;&nbsp;Upload data</a></li>&nbsp;&nbsp;&nbsp;&nbsp;
        <?php 
				} ?>
            </ul>
			
        </div>
    </div>
</div>

        <div class="container">
           <div class="col-lg-2 col-md-2 col-sm-1 col-xs-0 text-center">
                        </div>
            <div class="loginform">
            <form class="form-horizontal" action ="contact.php" method = "POST" onsubmit="return validateform();">
                <fieldset>
                    <legend style="color: white;">Contact <i class="fa fa-pencil pull-right"></i></legend>
					
                        <div class="col-lg-9 col-md-8 col-sm-10 col-xs-12 text-center">
                        	<div class="form-top">
                        		<div class="form-top-left">
                        			<h3>Don't hesitate to contact us</h3>
                        		</div>
								<div class="description">
                            
	                            	<h4 class="bg-secondary">Contact us and we'll get back to you. <br> 
									We would like to hear your valuable suggestions in form of Feedback.</h4>
                            	
                            </div>
                        		<br><br>
                            </div>
                            <div class="form-bottom">
			                   <div class="form-group">
								EMAIL: <input type="text" name="email" placeholder=" Enter your email..." class="form-username form-control" id="form-username">
								</div><br>
								<div class="form-group">
								SUBJECT<input type="text" name="subject"  placeholder=" Enter the subject..." class="form-username form-control" id="form-username">
								</div><br>
								<div class="form-group">
								MESSAGE<textarea name="message" rows="5" placeholder=" Enter the message..." class="form-username form-control" id="form-username"></textarea>
								</div>
								<br>
			                        <div class="form-group">
                        <div class="col-lg-08 col-lg-offset-2">
                            <button type="reset" class="btn btn-warning">
                                Cancel</button> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <button type="submit" class="btn btn-primary" value="Send" >
                                Send Message</button>
                        </div>
                    </div>
			                    </form>
		                    </div>
							 <div class="col-lg-1 col-md-2 col-sm-1 col-xs-0 text-center">
                        </div>
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


