<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Shopping Cart || Movie Store </title>
<link rel="stylesheet" type="text/css" href="css/style.css" />
<link rel="stylesheet" type="text/css" href="css/grid.css" />
</head>

<body>
<div id="wrapper" class="grid grid-pad">
	<div id="header" class="grid col-1-1">
		<div class="content">                
            <div id="shop" class="col-1-3" >
				<div class="content">
                    <img src="images/shop.png" /><br />
                    <span class="shop-text"> Buy Latest Muslin dress</span>
				</div>
            </div><!--End of shop div-->
                    <div id="menu" class="col-2-3">
						<div class="content">
                  <?php require_once("menu.php")?>
                                 <form >
                  <input id="search-field" type="text" name"search_item" />
                  <input id="search-button" value="Search" type="button" />
				</form>        	
						</div>
				     </div>
          </div>           
   </div> <!-- End of header -->
   
   <div id="genre" class="col-1-1">
			<div class="content">
                 <h1>Shopping Cart</h1>
<?php
if(!isset($_GET["item"]))
{ ?>
<strong>No item in Cart! Go back to home and Choose an item.</strong>
<?php 
}
else
{
$item=$_GET["item"];
$price=$_GET["price"];
?>
						<div class="col-1-2" >
							<div class="content" id="item">
                    		<?php echo '<img src="' ."movies/".$item.'" />' ?>
                            <br /><br />
                            Price : <strong><?php echo ($price/2)." $ ";?> </strong><br />After 50% Discount


							</div>
                				</div>
<div class="col-1-2" >
							<div class="content" style="text-align:left;">
<h3>Shipping Address</h3>
                    		<form id="contact_frm" method="post" action="script/pay.php">
<input type="hidden" name="item" value="<?php echo $item; ?>" />
Name :<br /> <input type="text" name="name" />
<br /><br />Email : <br /><input type="text" name="email" />
<br /><br />Zip Code : <br /><input type="text" name="zip" />
<br /><br />Mobile Number : <br /><input type="text" name="mobile" />
<br /><br />Shipping Address : <br /><textarea name="address" rows="5" cols="40"></textarea>
<br /><br /><input type="submit" value="Pay Now" />
</form>


							</div>
                				</div>
				
     <?php } ?>

       </div>
       </div> <!-- End of genre -->     

            
</div> <!--Main wrapper-->
 <div id="footer" class=" col-1-1">
			<div class="content">     Copyright &copy; 2015 Maisha Nawaz , maishanawaz1@gmail.com
             </div>
  </div>
</body>
</html>