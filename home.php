<?php

require 'core.php';

require 'connect.php';

session_start();

require_once("dbcontroller.php");

$db_handle = new DBController();

if(loggedin())

{

$firstname = getuserfield('firstname');	

$lastname = getuserfield('lastname');

$username = getuserfield('username');

$row = $_SESSION['user_id'];

$_SESSION['user_id'] = $row ;

$id = $row["id"];

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
		
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Favicon and touch icons -->
       <style>
	   
		body{
			color: white;
		}
		p{color:white;}
		
		.button {
    background-color: #4CAF50;
    border: none;
    color: white;
    padding: 10px 20px;
    text-align: center;
    text-decoration: none;
 
 display: inline-block;
    font-size: 12px;
    margin: 4px 2px;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    cursor: pointer;
}

.button1{
    background-color: white; 
    color: black; 
    border: 2px solid #4CAF50;
}

.button1:hover {
    background-color: #4CAF50;
    color: white;
}

.button2{
    background-color: white; 
    color: black; 
    border: 2px solid #008CBA;
}

.button2:hover {
    background-color: #008CBA;
    color: white;
}
	</style> 
</head>
<body>
    <div id="custom-bootstrap-menu" class="navbar navbar-default " role="navigation">
    <div class="container">
	<ul><img src="img/logo.jpg" height="100" width="100" align="left"></ul> 
        <div class="navbar-header"><a class="navbar-brand" href="main.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Inactive Account Handler</a>
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-menubuilder"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse navbar-menubuilder">
		<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
            <ul class="nav navbar-nav navbar-right">
               <li><a href="main.php">Home</a>
                </li>
                <li><a href="about.php">About Us</a>
                </li>
                <li><a href="contact.php">Contact Us</a>
                </li>
				<li><a href="logout.php">Logout</a>
                </li>
				
						<li></li>
            </ul>
			
    </div>
    </div>
	
	
	<div  class="container-fluid text-center">     
	<div class="col-lg-3 col-md-2 col-sm-2 col-xs-12 "  >
	<br><br><br><br><br>
      <form class="upload " method="POST" action="getdata.php" enctype="multipart/form-data">
<label style="text-align:center; color:white;">Upload new data</label><br/>
<input type='textfield' name="description" style="color:black;"></br></br>
<input type="file" name="myimage"> <br/>
<input type="submit" name="submit_image" class="button button2" value="Upload">
</form>

<br/><br/><br/>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
  
  </div>
    </div>
	
 <div class="col-sm-8 col-lg-7 col-md-8 text-left" style="display: inline-block;" > 
	
	<div id="product-grid"><br/><br/>
	<div class="txt-heading"><b>Files<b></div><br/>
	<?php
	$product_array = $db_handle->runQuery("SELECT * FROM t4 WHERE id= $id ");
	
	if (!empty($product_array)) { 
		foreach($product_array as $key=>$value){
			session_start();
			?>
		<div class="product-item col-sm-4 text-left" height="380px" width="250px" >
			<form method="post" action="home.php">
			<?php 
                
                $ext = pathinfo($product_array[$key]['name'], PATHINFO_EXTENSION);
				 if($ext=="doc"||$ext=="docx")
				{ ?>
			    <div class="product-image" ><?php echo '<img src="word.png" height="150px" width="150px" style="padding:20px;"/>';?></div>
				<?php }
				else if($ext=="pdf"||$ext=="PDF")
				{
				?> <div class="product-image" ><?php echo '<img src="pdf.png" height="150px" width="150px" style="padding:20px;" />';?></div>
			
				<?php } 
				else if($ext=="xls"||$ext=="xlsx"||$ext=="XLSX"||$ext=="XLS")
				{
					?>
					<div class="product-image" ><?php echo '<img src="xls.png" height="150px" width="150px" style="padding:20px;" />';?></div>
			<?php
					}
					else if($ext=="jpeg"||$ext=="jpg"||$ext=="png"||$ext=="JPEG"||$ext=="JPG"||$ext=="PNG"||$ext=='gif'||$ext=='GIF')
			{
				?>
            <div class="product-image" ><?php echo '<img src="/data/'.$product_array[$key]['id'].'/'.$product_array[$key]['name'].'" height="150px" width="150px"/>';?></div>
			<?php }
			else if($ext=="mp3"||$ext=="wav")
				{ ?>
			    <div class="product-image" ><?php echo '<img src="music.png" height="150px" width="150px" style="padding:20px;"/>';?></div>
				<?php }
            else if($ext=="mp4"||$ext=="wmv" || $ext=="avi")
				{ ?>
			    <div class="product-image" ><?php echo '<img src="video.png" height="150px" width="150px" style="padding:20px;"/>';?></div>
				<?php }
				else {
				?>
				<div class="product-image" ><?php echo '<img src="unknown.png" height="150px" width="150px" style="padding:20px;" />';?></div>
				<?php 
            } 
	        ?>	
			<div><strong class="namesake"><?php echo $product_array[$key]["name"]; ?></strong></div>
			<div class="product-price"><p>Description: <?php echo $product_array[$key]["description"]; ?></p></div>
			<div class="product-price"><?php echo "Size= ".round($product_array[$key]["size"],2)." MB"; ?></div><br>
			
		</form>
		<form action='downloaddata.php?description="<?php echo $product_array[$key]['description']; ?>"' method="post">
        <input type="hidden" name="description" value="<?php echo $product_array[$key]['description']; ?>">
        <button class="button button1">Download <i class="fa fa-download"></i></button>
    </form>
	<form action='deletedata.php?description="<?php echo $product_array[$key]['description']; ?>"' method="post">
        <input type="hidden" name="description" value="<?php echo $product_array[$key]['description']; ?>">
        <input type="hidden" name="imagetmp" value="<?php echo $product_array[$key]['imagetmp']; ?>">
		<button class="button button2">Delete <i class="fa fa-trash"></i></button>
    </form>
	<br> <br>
		</div>
	<?php
			}
	}
	?>
</div>

    </div>
	<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 " style="border-left : 5px solid white;
padding-left:5px;
text-align: left;
font-family: Roboto;"  >
	 <p>Profile</p>
	 
	 <div class="product-image" ><img src="user.png" height="150px" width="150px" /></div>		
     <br/><p>Id:<i><?php echo $id; ?></i></p>
	 <p>Username: <i><?php echo $username; ?></i></p>
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
<?php 

}

else

{

header('Location:login.php');

}

?>