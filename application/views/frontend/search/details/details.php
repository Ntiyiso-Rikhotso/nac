

<!-- header -->
<!-- header -->
<!-- START REVOLUTION SLIDER 5.0 -->

<section class="sec-padding section-white">
   <div class="container">
   <h3 class="title_bold text-center" > Charter Aircraft</h3>
   <br>
      <div class="mybanner">
    <?php echo strtoupper($flight->manufacture_name); ?> 
      </div>
   </div>
   <br
   <section class="sec-padding section-white">
      <div class="container">
         <div class="row">
            <div class="col-md-4 col-sm-6 col-xs-12">
               <div class="cb-feature-box-1 less-padd">
                  <div class="img-box">
                     <img src="<?php echo base_url(); ?>/assets/shared/images/aircraft/exterior/<?php echo $flight->flight_id; ?>.jpg" alt="" class="img-responsive"> 
                  </div>
               </div>
            </div>
            <!--end col main-->
            <div class="col-md-4 col-sm-6 col-xs-12">
               <div class="cb-feature-box-1 less-padd">
                  <div class="img-box">
                     <img src="<?php echo base_url(); ?>/assets/shared/images/aircraft/interior/<?php echo $flight->flight_id; ?>.jpg" alt="" class="img-responsive"> 
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
         <br><br>
         <div class="row">
		 
            <div class="col-md-6 col-sm-6 col-xs-12">
               <div class="cb-feature-box-1 gray">
			    <div class ="text_padding">
				
                  <p class="tale_title_details uppercase"> &nbsp;&nbsp;Equipment Specifiacation  </p>
                  
                  <?php if($flight->sales_type_description != 'pre_owned'){ ?>
                  <table class="table table-hover table-striped">
                     <tbody>
                        <tr>
                           <td><b>Manufacturer </b></td>
                           <td align="right"><?php echo $flight->manufacture_name; ?></td>
                        </tr>
                        <tr>
                           <td><b>Model </b></td>
                           <td align="right"><?php echo $flight->model_name; ?></td>
                        </tr>
                        <tr>
                           <td><b>Engine </b></td>
                           <td align="right"><?php echo $flight->engine; ?></td>
                        </tr>
                        <tr>
                           <td><b>Time Between overhaul </b></td>
                           <td align="right"><?php echo $flight->time_between_overhaul; ?></td>
                        </tr>
                        <tr>
                           <td><b>Maximum Cruising Speed </b></td>
                           <td align="right"><?php echo $flight->maximum_cruising_speed; ?></td>
                        </tr>
                        <tr>
                           <td><b>Maximum Range </b></td>
                           <td align="right"><?php echo $flight->maximum_range; ?></td>
                        </tr>
                        <tr>
                           <td><b>Maximum take off weight </b></td>
                           <td align="right"><?php echo $flight->take_off_weight; ?></td>
                        </tr>
                        <tr>
                           <td><b>Cabin Volume </b></td>
                           <td align="right"><?php echo $flight->cabin_volumn; ?></td>
                        </tr>
                        <tr>
                           <td><b>Standard Usefull load </b></td>
                           <td align="right"><?php echo $flight->standard_useful_load; ?> </td>
                        </tr>
                        <tr>
                           <td><b>Price</b></td>
                           <td align="right"><?php echo $flight->price; ?></td>
                        </tr>
                        <tr>
                           <td><b>Number of Seats</b></td>
                           <td align="right"><?php echo $flight->number_of_seats; ?></td>
                        </tr>
                     </tbody>
                  </table>
                  <?php }else{ ?>
                        <table class="table table-hover table-striped">
                     <tbody>
                        <tr>
                           <td><b>Manufacturer </b></td>
                           <td align="right"><?php echo $flight->manufacture_name; ?></td>
                        </tr>
                        <tr>
                           <td><b>Year </b></td>
                           <td align="right"><?php echo $flight->year_name; ?></td>
                        </tr>
                        <tr>
                           <td><b>Condition </b></td>
                           <td align="right"><?php echo $flight->condition_name; ?></td>
                        </tr>
                        <tr>
                           <td><b>Price </b></td>
                           <td align="right"><?php echo $flight->price; ?></td>
                        </tr>
                        <tr>
                           <td><b>Number of seats </b></td>
                           <td align="right"><?php echo $flight->number_of_seats; ?></td>
                        </tr>
                        <tr>
                           <td><b>Location </b></td>
                           <td align="right"><?php echo $flight->location; ?></td>
                        </tr>
                        <tr>
                           <td><b>Registration </b></td>
                           <td align="right"><?php echo $flight->registration; ?></td>
                        </tr>
                        <tr>
                           <td><b>Model </b></td>
                           <td align="right"><?php echo $flight->model_name; ?></td>
                        </tr>
                        <tr>
                           <td><b>Serial number </b></td>
                           <td align="right"><?php echo $flight->serial_number; ?></td>
                        </tr>
                        <tr>
                           <td><b>Total time </b></td>
                           <td align="right"><?php echo $flight->total_time; ?></td>
                        </tr>
                        <tr>
                           <td><b>Category </b></td>
                           <td align="right"><?php echo ucwords(str_replace('_', ' ', $flight->sub_category_description)); ?></td>
                        </tr>
                     </tbody>
                  </table>

                  <?php } ?>
               </div>
			   </div>	
               <!--end post item-->
            </div>
            <!--end col main-->
            <div class="col-md-6 col-sm-6 col-xs-12 gray">
               <div class="cb-feature-box-1 ">
                  <p class="tale_title_details uppercase">General Information </p>
                  <p><?php echo $flight->technical_information; ?></p>
               </div>
			   <br>
               <!--end post item-->
            </div>
            <!--end col main-->
         </div>
		 <br>
         <div class="row">
            <div class="col-md-4 col-sm-6 col-xs-12"> 
            </div>
            <!--end col main-->
            <div class="col-md-2 col-sm-6 col-xs-12"> 
               <a class="btn btn-prim btn-round btn-medium uppercase mybuttonfull" onclick="goBack()"> <i class="fa fa-angle-left" aria-hidden="true"></i> &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;BACK </a>
            </div>
            <!--end col main-->
            <div class="col-md-4 col-sm-6 col-xs-12"> 
               <a class="btn btn-prim btn-round btn-medium uppercase mybuttonfull" href="#"> I'M INTERESTED  &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;<i class="fa fa-angle-right" aria-hidden="true"></i></a>
            </div>
            <!--end col main-->
			<div class="col-md-2 col-sm-6 col-xs-12"> 
            </div>
         </div>
         <div class="clearfix"></div>
         <div class="col-divider-margin-3"></div>
   </section>
   
   <div class="clearfix"></div>
   <!-- end section --> 
</section>
    <div class="clearfix"></div>
    <!-- end section -->
    <hr class="footer_line">
    <section class="section-white">
      <div class="container">
        <div class="row">
          <div id="owl-demo11" class="owl-carousel owl-theme">
            <div class="item">
              <ul class="clients-list grid-cols-5 hover-7 noborder">
                <li><a href="#"><img src="<?php echo base_url(); ?>/assets/shared/images/aircraft/exterior/<?php echo $flight->flight_id; ?>.jpg" alt="" class="img-responsive"> </a></li>
                <li><a href="#"><img src="<?php echo base_url(); ?>/assets/shared/images/aircraft/exterior/<?php echo $flight->flight_id; ?>.jpg" alt="" class="img-responsive"> </a></li>
				<li><a href="#"><img src="<?php echo base_url(); ?>/assets/shared/images/aircraft/exterior/<?php echo $flight->flight_id; ?>.jpg" alt="" class="img-responsive"> </a></li>
				<li><a href="#"><img src="<?php echo base_url(); ?>/assets/shared/images/aircraft/exterior/<?php echo $flight->flight_id; ?>.jpg" alt="" class="img-responsive"> </a></li>
				<li><a href="#"><img src="<?php echo base_url(); ?>/assets/shared/images/aircraft/exterior/<?php echo $flight->flight_id; ?>.jpg" alt="" class="img-responsive"> </a></li>
              </ul>
            </div>
            <!--end carousel item-->
            
            <div class="item">
              <ul class="clients-list grid-cols-5 hover-7 noborder">
                <li><a href="#"><img src="<?php echo base_url(); ?>/assets/shared/images/aircraft/interior/<?php echo $flight->flight_id; ?>.jpg" alt="" class="img-responsive"> </a></li>
                <li><a href="#"><img src="<?php echo base_url(); ?>/assets/shared/images/aircraft/interior/<?php echo $flight->flight_id; ?>.jpg" alt="" class="img-responsive"> </a></li>
                <li><a href="#"><img src="<?php echo base_url(); ?>/assets/shared/images/aircraft/interior/<?php echo $flight->flight_id; ?>.jpg" alt="" class="img-responsive"> </a></li>
                <li><a href="#"><img src="<?php echo base_url(); ?>/assets/shared/images/aircraft/interior/<?php echo $flight->flight_id; ?>.jpg" alt="" class="img-responsive"> </a></li>
                <li><a href="#"><img src="<?php echo base_url(); ?>/assets/shared/images/aircraft/interior/<?php echo $flight->flight_id; ?>.jpg" alt="" class="img-responsive"> </a></li>
              </ul>
            </div>
            <!--end carousel item--> 
            
          </div>
          <!--end carousel--> 
          
        </div>
      </div>
    </section>
    <div class="clearfix"></div>
<!-- footer -->
<!-- footer-->
</div>

