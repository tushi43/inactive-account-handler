<?php

require 'core.php';

require 'connect.php';

if(!loggedin())
{
	
if(isset($_POST['username']) && isset($_POST['password']))

{

$username = $_POST['username'];

$password = ($_POST['password']);;

if(!empty($username) && !empty($password))

{

$query = "SELECT id FROM t_admin WHERE username = '$username' AND password = '$password' ";

if($query_run = mysqli_query($conn,$query))

{

$query_num_rows = mysqli_num_rows($query_run);

if($query_num_rows == 0)

echo "<script type='text/javascript'>alert('Invalid Password or Username ');</script>";

else if($query_num_rows == 1)

{

$user_id = mysqli_fetch_assoc($query_run);

$_SESSION['admin_id'] = $user_id;

header('Location: chart.php');

}

}

}

else

echo "<script type='text/javascript'>alert('Please Enter the details!');</script>";

}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="Coming soon, Bootstrap, Bootstrap 3.0, Free Coming Soon, free coming soon, free template, coming soon template, Html template, html template, html5, Code lab, codelab, codelab coming soon template, bootstrap coming soon template">
    <title>Login Form</title>
    <link href='http://fonts.googleapis.com/css?family=EB+Garamond' rel='stylesheet'
        type='text/css' />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700,300,800'
        rel='stylesheet' type='text/css' />
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
            </ul>
			
        </div>
    </div>
</div>

        <div class="container">
           <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 text-center">
            </div>
            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 text-center">
            <div class="loginform">
            <form class="form-horizontal" action ="adminlogin.php" method = "POST" onsubmit="return validateform();">
                <fieldset>
                    <legend style="color: white;">Admin Login Form <i class="fa fa-pencil pull-right"></i></legend>
					<div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 text-center">
                        	<div class="form-top">
                        		<div class="form-top-left">
                        			<h3>Login to our site</h3>
                            		</div>
                        		<div class="form-top-right">
                        			<i class="fa fa-lock"></i>
                        		</div>
                            </div>
                            <div class="form-bottom">
							
			                   <div class="form-group">
								USERNAME :<br>
								<label class="sr-only" for="form-username">USERNAME:</label>
								<input type="text" name="username" placeholder=" Enter your Username..." class="form-username form-control" id="form-username">
								</div><br>
			                    <div class="form-group">
								PASSWORD :<br>
								<label class="sr-only" for="form-password">PASSWORD:</label>
								<input type="password" name="password" placeholder="  Enter Password..." class="form-password form-control" id="form-password">
								</div>
								<br>
			                        <div class="form-group">
                        <div class="col-lg-08 col-lg-offset-2">
                            <button type="reset" class="btn btn-warning">
                                Cancel</button> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <button type="submit" class="btn btn-primary" value="Log In" >
                                Login</button>
                        </div>
                    </div>
			                    </form>
		                    </div>
                        </div>
                    </div>
                     
                </div>	
	
        </div>
        
       <!-- Javascript -->
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
        
			<script>
				function validateform()
				{
				var name=document.myform.username.value;
				var password=document.myform.pwd.value;
			                if (name==null || name=="")
				{
					alert("Name can't be blank");
					return false;
				
				            if (password==null || password=="")
				{
					alert("Password can't be blank");
					return false;
				}
			
				}
				}
</script>
</body>
</html>

<?php

}

else{
	
	header('Location: admin.php');
	
}

?>


