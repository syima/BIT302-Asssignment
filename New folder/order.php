<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Order- Muslimah Fashion</title>
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
            <li><a href="order.php">Order</a></li>  
            <li><a href="track.php">Track Order</a></li>                      
            <li><a href="contact.php" class="lastmenu">Contact</a></li>            
        </ul>  
    </div>
    
    <div id="content">
      <div id="right_column">
        	<div id="new_released_section">
            	<h1>Order</h1>
				<?php require('admin/db.php');
				session_start();
			if(!isset($_SESSION['username'])){
		echo "  you are not logged in! <strong><a href='login.php'>Login Now</a></strong>";
		}else{
		
		
		if(isset($_POST['quantity'])){
			$query = "INSERT into `orders` (item, quantity, user, status, date) VALUES ('".$_GET['item']."','".$_POST['quantity']."', '".$_SESSION['username']."', 'Pending', '".date("m/d/y")."')";
        $result = mysqli_query($con,$query);
        if($result){
            echo "&#10004; Order Successfull. Track with ID = ".$con->insert_id;
        }
		else {
		echo "Failed! Try Again.";
		}
	} //insert order
		else{
		$query = "select * from products where id='".$_GET['item']."'";
        $result = mysqli_query($con,$query);
        foreach($result as $value){
		?>
		<div class="new_released_box">
		<form action="" method="post">
                <img src="uploads/<?php echo $value['image']?>" alt="image" />
                    <h3>Product Name : <?php echo $value['name']?></h3> 
					<h4>Quantity : <input style="width:30px;height:13px;" type="text" name="quantity" required /></h4>
                    <h4>Color : <?php echo $value['color']?></h4>  
              <div class="rantsection">
                        Price: <?php echo $value['price']?> RM 
                  </div>
                    <input type="submit" style="width:80px; background:#000" value="Order Now" />
				</div>
                </form>
		<?php
			}
		}
	}
		?>
            	
                 
				
            </div>
            
            <div class="right_panel_fullwidth"><!-- end of news -->
              <!-- end of top download -->
</div>
      </div>
    </div>
   
    
	<div id="footer">
       <br />
        Copyright � 2017 <a href="#"><strong>Muslimah Fashion</strong></a> 
    
	</div>
</div>

</body>
</html>