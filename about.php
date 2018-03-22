<?php

require 'core.php';

require 'connect.php';

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="Coming soon, Bootstrap, Bootstrap 3.0, Free Coming Soon, free coming soon, free template, coming soon template, Html template, html template, html5, Code lab, codelab, codelab coming soon template, bootstrap coming soon template">
    <title>ABOUT US</title>
    <link href='http://fonts.googleapis.com/css?family=EB+Garamond' rel='stylesheet'
        type='text/css' />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700,300,800'
        rel='stylesheet' type='text/css' />
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
      <link href="css/style.css" rel="stylesheet" type="text/css" />    
   
    <link href="css/font-awesome.css" rel="stylesheet" type="text/css" />
	<link href="css/owl.carousel.css" rel="stylesheet">
    <link href="css/owl.theme.css" rel="stylesheet">

        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="assets/css/form-elements.css">
        <link rel="stylesheet" href="assets/css/rstyle.css">
		<link rel="stylesheet" href="assets/css/newstyle.css">
        
        
</head>
<body>
    <div id="custom-bootstrap-menu" class="navbar navbar-default" role="navigation">
    <div class="container">
	<ul><img src="img/logo.jpg" height="100" width="100" align="left"></ul> 
        <div class="navbar-header"><a class="navbar-brand" href="main.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Inactive Account Handler</a>
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#top-navbar-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
        </div>
        <div class="collapse navbar-collapse navbar-menubuilder">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="main.php">Home</a>
                </li>
                <li><a href="contact.php">Contact Us</a>
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
					<li><a href="login.php"><span class="glyphicon glyphicon-user"></span>&nbsp;&nbsp;Login</a></li>&nbsp;&nbsp;&nbsp;&nbsp;
        
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

          
              
            </div>
            
          
        <div class="container">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
           <div id="banner">
             
			
           </div>
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="heading">
                                <h2 color="white">The Developers of IAH :</h2>
                            </div>

                            <p class="lead"></p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-3 col-sm-3">
                            <div class="team-member" data-animate="fadeInUp">
                                <div class="image">
                                    <a href="team-member.html">
                                        <img src="img/rad.jpg" alt="" class="img-responsive img-circle">
                                    </a>
                                </div>
                                <h3>Web Designer</h3>
                              
                                
                                <div class="text">
                                    <p>Mr. Rahul Dhameja</p>
                                </div>
                            </div>
							
              
            </div>
         <div class="col-md-3 col-sm-3">
                            <div class="team-member" data-animate="fadeInUp">
                                <div class="image">
                                    <a href="team-member.html">
                                        <img src="img/ajinkya.jpg" alt="" class="img-responsive img-circle">
                                    </a>
                                </div>
                                <h3>All Rounder</h3>
                               
                                
                                <div class="text">
                                    <p>Mr. Ajinkya Pawale</p>
                                </div>
                            </div>
							
              
            </div>
			<div class="col-md-3 col-sm-3">
                            <div class="team-member" data-animate="fadeInUp">
                                <div class="image">
                                    
                                        <img src="img/saili.jpg" alt="" class="img-responsive img-circle">
                                   
                                </div>
                                <h3>Expert</h3>
                                
                                
                                <div class="text">
                                    <p>Ms. Saili Kadam</p>
                                </div>
                            </div>
							
              
            </div>
         <div class="col-md-3 col-sm-3">
                            <div class="team-member" data-animate="fadeInUp">
                                <div class="image">
                                    <a href="team-member.html">
                                        <img src="img/tushar.jpg" alt="" class="img-responsive img-circle">
                                    </a>
                                </div>
                                <h3>Founder</h3>
                            
                                <div class="text">
                                    <p>Mr. Tushar Jumani</p>
                                </div>
                            </div>
							
              
            </div>
         
         
        </div>
        
         <script src="js/jquery.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/jquery.backstretch.js" type="text/javascript"></script>
        <script type="text/javascript">
            'use strict';
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
