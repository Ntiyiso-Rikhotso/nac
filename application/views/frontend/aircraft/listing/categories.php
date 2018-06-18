
<?php //include VIEWPATH . 'frontend/search/search.php'; ?>
 <div id="search-result">   

 <h2><center class="page-title"><?php echo $secondary_title; ?></center></h2>
	 
                          
			   <br>
              <?php //echo str_replace('_', ' ', strtoupper($category_info->sub_category_description)); ?></p>
        	<?php foreach($categories as $category){ 
                
                $this->db->where('category.category_name', 'aircraft');
                $this->db->where('service.service_description', 'sales');
                $this->db->where('sales_type.sales_type_description', $filter);
                $this->db->where('flight.sub_category_id', $category->sub_category_id);
                $this->db->join('category', 'category.category_id = flight.category_id');
                $this->db->join('service', 'service.service_id = flight.service_id');
                if($manufacture_type != null){
                    $this->db->where('manufacture_type.manufacture_type_description', $manufacture_type);
                    $this->db->join('manufacture_type', 'manufacture_type.manufacture_type_id = flight.manufacture_type_id');
                }
                if($manufacture_name != null){
                    $this->db->where('manufacture.manufacture_name', $manufacture_name);
                    //$this->db->join('manufacture', 'manufacture.manufacture_id = flight.manufacture_id');
                }
                $this->db->join('sales_type', 'sales_type.sales_type_id = flight.sales_type_id');
                $results = $this->aircraft->all();  
                if($results->num_rows() > 0){  
            ?>
			<?php $category_info = $this->sub_category->find($category->sub_category_id); ?>
				<div class="container">
				
                  <div class="mybanner">
				  
                     <?php echo str_replace('_', ' ', strtoupper($category_info->sub_category_description)); ?>
                  </div>
				  <br>
               </div>
               <?php 
               
               
              

			   foreach($results->result() as $flight){ 
                $flight = $this->flight->find($flight->flight_id);  
                   ?>
               <section class="sec-padding section-white">
                  <div class="container">
                     <div class="row">
                        <div class="col-md-4 col-sm-6 col-xs-12">
                           <div class="cb-feature-box-1 less-padd">
                              <div class="img-box">
                                 <img src="<?php echo base_url(); ?>/assets/shared/images/aircraft/exterior/<?php echo $flight->flight_id; ?>.jpg" alt="<?php echo $flight->manufacture_name; ?> <?php //echo $flight->model_name; ?>" class="img-responsive"> 
                              </div>
                           </div>
                        </div>
                        <!--end col main-->
                        <div class="col-md-4 col-sm-6 col-xs-12">
                           <div class="cb-feature-box-1 less-padd">
                              <div class="img-box">
                                 <img src="<?php echo base_url(); ?>/assets/shared/images/aircraft/interior/<?php echo $flight->flight_id; ?>.jpg" alt="<?php echo $flight->manufacture_name; ?> <?php //echo $flight->model_name; ?>" class="img-responsive"> 
                              </div>
                           </div>
                        </div>
                        <!--end col main-->
                        <div class="col-md-4 col-sm-6 col-xs-12">
                           
                              <div class="postinfo-box">
                                
                                 <div class="blog-post-info">
								 <div class="col-md-12 col-sm-12 center">
                        <br>
                            <center class="col-md-4 col-sm-4 col-xs-4 ">
                                <div  class="circle left_space"><?php echo $flight->number_of_seats; ?></div> 
                                <div class="">Passenger</div>
                            </center>
                            <?php if($flight->sales_type_description == 'new'){ ?>
                                <center class="col-md-4 col-sm-4 col-xs-4 center">
                                    <div  class="circle left_space"> <?php echo  $flight->maximum_range; ?> </div>
                                    <div  class="">Range</div>
                                </center>
                                <center class="col-md-4 col-sm-4 col-xs-4 center">
                                    <div  class="circle left_space"> <?php echo  $flight->maximum_cruising_speed; ?> </div>
                                    <div  class="">Speed</div>
                                </center>
                            <?php }else{ ?>

                            <center class="col-md-4 col-sm-4 col-xs-4 center">
                                <div  class="circle left_space"> <?php echo  $flight->year_name; ?> </div>
                                <div  class="">Year</div>
                            </center>
                            <center class="col-md-4 col-sm-4 col-xs-4 center">
                                <div  class="circle left_space"> <?php echo  $flight->total_time; ?> </div>
                                <div  class="">Total time</div>
                            </center>

                            <?php } ?>
                        </div>
                                 <br>
                                 
                              </div>
							   <h3 class="uppercase title font-weight-4 montserrat"><a href="#"><?php echo strtoupper($flight->model_name); ?> </a></h3>
							   <p><?php echo $flight->general_description; ?> </p>
                              <!--end post item-->
                           </div>
                        </div>
						
                        <!--end col main-->
                     </div>
					 <br>
                     <div class="row">
                        <div class="col-md-4 col-sm-6 col-xs-12"> 
                        </div>
                        <!--end col main-->
						<?php 
						$name = $this->url->parse($flight->manufacture_name);
						?>
                        <div class="col-md-4 col-sm-6 col-xs-12"> 
                           <a class="btn btn-prim btn-round btn-block btn-medium uppercase mybuttonfull" href="<?php echo base_url('aircraft/details/'. $name . '/' .$flight->flight_id); ?>"> VIEW AIRCRAFT SPECS &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-angle-right" aria-hidden="true"></i></a>
                        </div>
                        <!--end col main-->
                        <div class="col-md-4 col-sm-6 col-xs-12"> 
                           <a class="btn btn-prim btn-round btn-block btn-medium uppercase mybuttonfull" href="#"> I'M INTERESTED  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-angle-right" aria-hidden="true"></i></a>
                        </div>
                        <!--end col main-->
                     </div>
                  </div>
               </section>
		

			   <?php } //end aircraft?>  
               <?php } //end aircraft?>  
			<?php } //end categories?>  
</div>