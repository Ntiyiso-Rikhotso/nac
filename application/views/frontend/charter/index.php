

<!DOCTYPE html>
<html>
   <head>
      <?php include VIEWPATH . "_includes/frontend/top.php" ?>
   </head>
   <body>
	   <script>
			var baseUrl = "<?php echo base_url();?>"; 
	   </script>
   
      <div class="wrapper-boxed">
         <div class="site-wrapper">
            <!-- header -->
            <?php include VIEWPATH . "_includes/frontend/nav.php" ?>
            <!-- header -->
            <div class="clearfix"></div>
            <!-- START REVOLUTION SLIDER 5.0 -->
            <?php include VIEWPATH . "_includes/frontend/standard_banner.php" ?>
            <div class="clearfix"></div>
            <!-- END OF SLIDER WRAPPER -->
            <div class=" clearfix"></div>
            <!--end header section -->
            <section>
               <div class="pagenation-holder">
                  <div class="container">
                     <div class="row">
                        <div class="col-md-6">
                           <h4 class="uppercase"></h4>
                        </div>
                        <div class="col-md-6">
                           <ol class="breadcrumb">
                              <li><a href="#">Home</a></li>
                              <li><a href="#">Aircraft Division</a></li>
                              <li class="current"><a href="#">Aircraft Listing</a></li>
                           </ol>
                        </div>
                     </div>
                  </div>
               </div>
            </section>
            
			
		
			<div class="clearfix"></div>
			
			<br>
			
			

<div class="clearfix"></div>
<!--end section-->
<section class="sec-padding section-light">
   <div class="container-fluid">
      <div class="container">
                     <div class="row">
                        <div class="col-md-4 col-sm-12 col-xs-12 section-white">
                           <div class="pages-sidebar-item">
                              <h5 class="uppercase pages-sidebar-item-title">Range Map</h5>
                              <ul class="pages-sidebar-links font_black">
							     <li><a onmouseover="document.getElementById('myImage').src='<?php echo base_url('assets/frontend/charter/images/'); ?>Large-Passenger-Transport-Large-Passenger-Transport.jpg'">Large Passenger Transport</a></li> 
                                 <li><a onmouseover="document.getElementById('myImage').src='<?php echo base_url('assets/frontend/charter/images/'); ?>Regional-Airliner.jpg'">Regional Airliner</a></li>
                                 <li><a onmouseover="document.getElementById('myImage').src='<?php echo base_url('assets/frontend/charter/images/'); ?>Super-Mid-Range-Jets.jpg'">Super Midsize Jets</a></li>
                                 <li><a onmouseover="document.getElementById('myImage').src='<?php echo base_url('assets/frontend/charter/images/'); ?>Mid-Size-Jets.jpg' ">Midsize Jets</a></li>
                                 <li><a onmouseover="document.getElementById('myImage').src='<?php echo base_url('assets/frontend/charter/images/'); ?>Twin-Turbine.jpg'">Twin Turbine</a></li>
                                 <li><a onmouseover="document.getElementById('myImage').src='<?php echo base_url('assets/frontend/charter/images/'); ?>Single-Turbine.jpg'">Single Turbine Aircraft</a></li>
								 <li><a onmouseover="document.getElementById('myImage').src='<?php echo base_url('assets/frontend/charter/images/'); ?>Twin-Piston.jpg'">Twin Piston Aircraft</a></li>
                              </ul>
                           </div>
                        </div>
                        <div class="col-md-8">
                           <div class="col-md-12">
						    
                              <img  id="myImage" src="<?php echo base_url('assets/frontend/charter/images/'); ?>Super-Mid-Range-Jets.jpg" alt="" class="img-responsive"/>
							
                           </div>
                        </div>
                     </div>
               </section>
               </div>
		<!--end content-->
	 
      <!-- #content -->
   </div>
   <!--End content section-->    
   </div>
</section>
<div class="clearfix"></div>
<div class="clearfix"></div>


			
            <section class="sec-padding section-white">
               <?php include $page_name .'.php';?>
            </section>
            <div class="clearfix"></div> -->
            <!-- end section --> 
         <!--</div>
         <!-- footer -->
         <?php include VIEWPATH . "_includes/frontend/footer.php" ?>
         <!-- footer-->
      </div>
      </div>
      <!--end site wrapper--> 
      </div>
      <!--end wrapper boxed--> 
      <!-- Scripts --> 
      <?php include VIEWPATH . "_includes/frontend/bottom.php" ?>
   </body>
   

</html>

