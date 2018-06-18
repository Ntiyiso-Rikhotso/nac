<!DOCTYPE html>
<html>
   <head>
      <?php include VIEWPATH . "_includes/frontend/top.php" ?>
   </head>
   <body>
      <div class="wrapper-boxed">
         <div class="site-wrapper">
            <?php include VIEWPATH . "_includes/frontend/nav.php" ?>
            <div class="clearfix"></div>
            <?php 
			if($banner){
				include VIEWPATH . "_includes/frontend/home_banner.php";
			}else if( isset($contact_us) && $contact_us){
				include VIEWPATH. "_includes/frontend/contact_us_banner.php";
			}else{
				include VIEWPATH . "_includes/frontend/standard_banner.php";
			}
			
			?>
            <div class="clearfix"></div>
            <?php include $page_name . '.php'; //changes here only?>
            <div class="clearfix"></div>
            <?php include VIEWPATH . "_includes/frontend/footer.php" ?>
         </div>
      </div>
      <?php include VIEWPATH . "_includes/frontend/bottom.php" ?>
   </body>
</html>