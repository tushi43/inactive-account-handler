<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
 
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title> Sign up</title>
    
</head>
<body>
    <!-- start header div --> 
    <div id="header">
        <h3>Sign up</h3>
    </div>
    <!-- end header div -->   
     
    <!-- start wrap div -->   
    <div id="wrap">
        <!-- start PHP code -->
        <?php
         
		mysql_connect("localhost", "root", "") or die(mysql_error()); // Connect to database server(localhost) with username and password.
		mysql_select_db("iah1") or die(mysql_error()); 
			
			if(isset($_GET['email']) && !empty($_GET['email']) AND isset($_GET['hash']) && !empty($_GET['hash'])){
    // Verify data
    $email = mysql_escape_string($_GET['email']); // Set email variable
    $hash = mysql_escape_string($_GET['hash']); // Set hash variable
                 echo $email."<br>";
				 echo $hash;
    $search = mysql_query("SELECT email, hash, active FROM t1 WHERE email='".$email."' AND hash='".$hash."' AND active='0'") or die(mysql_error()); 
    $match  = mysql_num_rows($search);
                 
    if($match > 0){
        // We have a match, activate the account
        mysql_query("UPDATE t1 SET active='1' WHERE email='".$email."' AND hash='".$hash."' AND active='0'") or die(mysql_error());
        echo '<div class="statusmsg">Your account has been activated, you can now login </div>';
				header('Location: login.php');

    }else{
        // No match -> invalid url or account has already been activated.
        //echo '<div class="statusmsg">The url is either invalid or you already have activated your account.</div>';
         header('Location: login.php');
	}
                 
}else{
    // Invalid approach
    echo '<div class="statusmsg">Invalid approach, please use the link that has been send to your email.</div>';
}
        ?>
        <!-- stop PHP Code -->
    </div>
    <!-- end wrap div --> 
</body>
</html>