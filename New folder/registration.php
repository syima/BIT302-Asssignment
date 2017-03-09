<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Register - Muslimah Fashion</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="style.css" rel="stylesheet" type="text/css" />
</head>
<body>

<div id="container">

	<div id="header">
    	<div id="title">
            <div id="sitetitle">Muslimah <span>Fashion</span></div>
        </div>
        
  </div>
	<div id="banner">
       	<div id="banner_text">
            <div id="banner_title">Welcome To Muslimah Fashion</div>
            <p>
            Traditionally, people need a lot of effort to make purchase. For example, they have to travel to shopping mall or any outlet if they want to buy a new dress for an event. Especially for muslim, they have to go to specific boutique that can provide their needs in order to cover their aurah.
 
Therefore, we decided to come up with a shopping platform that are special only for Muslim women. This platform will be a web page that are conveniently accessible by anyone, anywhere and anytime.

            </p>
            
    	</div>
	</div>
    
    <div id="menu">
     	<ul>
			<li><a href="index.php" class="current">Main Page</a></li>
			<li><a href="login.php">Login</a></li>
            <li><a href="registration.php">Register</a></li>  
            <li><a href="track.php">Track Order</a></li>                      
            <li><a href="contact.php" class="lastmenu">Contact</a></li>            
        </ul>  
    </div>
    
    <div id="content">
      <div id="right_column">
        	<div id="new_released_section">
        <?php
	require('admin/db.php');
	session_start();
			if(isset($_SESSION['username'])){
		echo " ".$_SESSION['username']." you are already logged in! <strong><a href='logout.php'>Logout Now</a></strong>";
		}else{
    // If form submitted, insert values into the database.
    if (isset($_REQUEST['username'])){
		$username = stripslashes($_REQUEST['username']); // removes backslashes
		$username = mysqli_real_escape_string($con,$username); //escapes special characters in a string
		$email = stripslashes($_REQUEST['email']);
		$email = mysqli_real_escape_string($con,$email);
		$password = stripslashes($_REQUEST['password']);
		$password = mysqli_real_escape_string($con,$password);
		$mobile = $_REQUEST['mobile'];
		$address = $_REQUEST['address'];

		$trn_date = date("Y-m-d H:i:s");
        $query = "INSERT into `users` (username, password, email, trn_date) VALUES ('$username', '".md5($password)."', '$email', '$trn_date')";
        $result = mysqli_query($con,$query);
        if($result){
            echo "<div class='form'><h3>You are registered successfully.</h3><br/>Click here to <a href='login.php'>Login</a></div>";
        }
    }else{
?>
<div class="form">
<h1>Registration</h1>
<form name="registration" action="" method="post">
<input type="text" name="username" placeholder="Username" required /><br>
<input type="email" name="email" placeholder="Email" required /><br>
<input type="password" name="password" placeholder="Password" required /><br>
<input type="text" name="mobile" placeholder="Mobile no:" required /><br>
<textarea name="address" placeholder="Address" required></textarea><br><br>

<input type="submit" name="submit" style="background:#000" value="Register"  />
</form>
<br />
</div>
<?php } 


} ?>

            	
                 
				
            </div>
            
            <div class="right_panel_fullwidth"><!-- end of news -->
              <!-- end of top download -->
</div>
      </div>
    </div>
   
    
	<div id="footer">
       <br />
        Copyright © 2017 <a href="#"><strong>Muslimah Fashion</strong></a> 
    
	</div>
</div>

</body>
</html>