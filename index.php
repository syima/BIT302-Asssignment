<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Movie Store || Buy Bluray Disc</title>
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
                    <span class="shop-text"> Buy Latest Muslim dress</span>
				</div>
            </div><!--End of shop div-->
                    <div id="menu" class="col-2-3">
						<div class="content">
                  <?php require_once("menu.php")?>
                                 <form method="get" action="">
                  <input id="search-field" type="text" name="search_item" />
                  <input id="search-button" value="Search" type="submit" />
				</form>        	
						</div>
				     </div>
          </div>           
   </div> <!-- End of header -->
   
       <div id="promo" class="col-1-1">
            <div class="content">
                  <img src="images/promo.png" />
             </div>
       </div><!-- End of promo -->
                    
       <div id="genre" class="col-1-1">
			<div class="content">
                  <strong> Genre :</strong> <a href="">action</a> ,<a href="">adventure</a> ,<a href="">drama</a> ,<a href="">romance</a> ,<a href="">comedy</a> ,<a href="">War</a> ,<a href="">documentary</a> ,<a href="">horror</a> ,<a href="">western</a> 
            </div>
       </div> <!-- End of genre -->
                
         <div class="col-1-1">
               <div class="content">
                     
                     <?php
			
				foreach (glob("movies/*.jpg") as $filename) {
					
			$file=str_replace("movies/", "",$filename);
				$pos=true;
                       if(isset($_GET["search_item"])) { $pos = strpos($file, $_GET["search_item"]); }
					if ($pos === false){}
					else {

		?>
				 <div class="col-1-5" >
							<div class="content" id="item">
                    		<?php echo '<img src="' .$filename.'" />' ?>
                            <br />
                            Released : 2014 <br />
                            Price : <strong><?php $price=rand(20,40);echo $price." $ ";?></strong><br />
<a href="cart.php?item=<?php echo $file; ?>&price=<?php echo $price; ?>" >Buy Now </a>

							</div>
                		</div>
                    <?php  }

   						
}
					?>
                </div>
            </div><!-- End of items -->
                 

               

            
</div> <!--Main wrapper-->
 <div id="footer" class=" col-1-1">
			<div class="content">     Copyright &copy; 2015 Maisha Nawaz , maishanawaz1@gmail.com
             </div>
  </div>
</body>
</html>