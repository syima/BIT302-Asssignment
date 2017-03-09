<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Track Order- Muslimah Fashion</title>
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
            	<h1>Track Order</h1>
				<?php require('admin/db.php');
		if(isset($_POST['trackno'])){
		$query = "select status from orders where id='".$_POST['trackno']."'";
        $result = mysqli_query($con,$query);
		if(!mysqli_num_rows($result)) echo "<h4>No order found with that tracking ID.</h4>";
        foreach($result as $value){
			echo "<h4>Order ID : ".$_POST['trackno']."<br/> Status : ".$value['status']."</h4>";
			}
		}
		else{
		
		?>
            	
                 
				<form action="" method="post">
				<input type="text" name='trackno' placeholder="Order Number" required /><br />
				<input type="submit" value="Track Order" style="width:200px; background:#000" />
				</form>
				
				<?php }?>
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