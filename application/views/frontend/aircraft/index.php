

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
            <?php include VIEWPATH . "_includes/frontend/aircraft_sales_banner.php" ?>
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
			<section class="sec-padding section-light">
				<div class="container-fluid">
					<div class="container">
            <form class="container" action="" method="post">
                  <div class="row">
                     
                     <div id="manufactures" class="col-md-2">
						<button class="btn btn- btn-green-dark uppercase">MANUFACTURES</button>
						<div class="main hidden">
							 <?php foreach($this->manufacture->all()->result() as $manufacture){?>
								<button class="accordion success btn-block">&nbsp;<input type="checkbox" class="check_boxes optional" />&nbsp; <?php echo $manufacture->manufacture_name; ?></button>
								<div class="panel sub">
									<h6>MODEL</h6>
									<?php 
										$this->db->where('manufacture_id', $manufacture->manufacture_id);
										foreach($this->model->all()->result() as $model){?>
										<p>&nbsp;<input type="checkbox" class="success" /><?php echo $model->model_name; ?></p>
									<?php } ?>
								</div>
							 <?php } ?>
						</div>
					 </div>
					  <div class="col-md-1">
					 </div>
			
					<div id="manufactures" class="col-md-2">
						<button class="btn btn- btn-green-dark uppercase">MANUFACTURES</button>
						<div class="main hidden">
							 <?php foreach($this->manufacture->all()->result() as $manufacture){?>
								<button class="accordion success btn-block">&nbsp;<input type="checkbox" class="check_boxes optional" />&nbsp; <?php echo $manufacture->manufacture_name; ?></button>
								<div class="panel sub">
									<h6>MODEL</h6>
									<?php 
										$this->db->where('manufacture_id', $manufacture->manufacture_id);
										foreach($this->model->all()->result() as $model){?>
										<p>&nbsp;<input type="checkbox" class="success" /><?php echo $model->model_name; ?></p>
									<?php } ?>
								</div>
							 <?php } ?>
						</div>
					 </div>
					  <div class="col-md-1">
					 </div>
				
					 <div class="col-md-2">
						
						<button class="btn btn-small btn-green-dark uppercase">&nbsp;<input type="checkbox" />&nbsp; ALL YEAR's</button>
						<div class="panel sub">
							<?php foreach($this->year->all()->result() as $year){?>
								<p>&nbsp;<input type="checkbox" class="success" /><?php echo $year->year_name; ?></p>
							<?php } ?>
						</div>
					
					 </div>
					 <div class="col-md-1">
					 </div>
					 &nbsp;&nbsp;&nbsp;
					 <div class="col-md-2">
						
						<button class="btn btn-small btn-green-dark uppercase">&nbsp;<input type="checkbox" />&nbsp; ALL YEAR's</button>
						<div class="panel sub">
							<?php foreach($this->year->all()->result() as $year){?>
								<p>&nbsp;<input type="checkbox" class="success" /><?php echo $year->year_name; ?></p>
							<?php } ?>
						</div>
					
					 </div>
					 
					 
                  </div>
            </form>
			</section>
			<br>
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

