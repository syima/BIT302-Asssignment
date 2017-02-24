<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Track order || Movie Store</title>
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
                    <span class="shop-text"> Buy Latest Blu-ray Movies</span>
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
			<div class="content page">
                 <h1>Track order </h1>


<form id="contact_frm" method="post" action="script/contact.php">
<br /><br />Email : <br /><input type="text" name="email" />
<br /><br />Your Order Number : <br /><textarea name="Your Order Number" rows="5" cols="40"></textarea>
<br /><br /><input type="submit" value="Submit" />
</form>



            </div>
       </div> <!-- End of genre -->     
                

            
</div> <!--Main wrapper-->
 <div id="footer" class=" col-1-1">
			<div class="content">     Copyright &copy; 2015 Maisha Nawaz , maishanawaz1@gmail.com
             </div>
  </div>
</body>
</html>