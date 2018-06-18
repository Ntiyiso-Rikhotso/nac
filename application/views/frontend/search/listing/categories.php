<br>             
<?php
   foreach ($categories as $category) {
       if ($this->db->get_where('service', array(
           'service_id' => $__post['service_id']
       ))->row()->service_description == 'charter') {
           $this->db->where('sales_type.sales_type_description', 'pre_owned'); //new or pre_owned
       } else {
           
           if( isset($__post['sales_type_description']) ){
                $this->db->or_where('sales_type.sales_type_description', $__post['sales_type_description']); //new or pre_owned
           }
       }
      $this->db->where('category.category_id', $__post['category_id']); //aircraft or helicopter
       $this->db->where('service.service_id', $__post['service_id']); //sales or charter
       $this->db->where('flight.sub_category_id', $category->sub_category_id); //e.g twin_piston
       $this->db->where('flight.estimated_range >=', $__post['estimated_range']); //range in km
       $results = $this->flight->all();
       // echo $results->num_rows();
       
       
       if ($results->num_rows() > 0) {
   ?>
<h3 class="text-center thick"> We've found <?php
   echo $results->num_rows();
   ?>  <?php
   if ($results->num_rows() > 1) { //plural; 
   ?> records <?php
   } else {
   ?> record <?php
   }
   ?> for your search!!</h3>
<?php
   $category_info = $this->sub_category->find($category->sub_category_id);
   ?>
<div class="container">
   <div class="mybanner">
     <?php
         echo str_replace('_', ' ', strtoupper($category_info->sub_category_description));
         ?>
   </div>
   <br>
</div>
<?php
   foreach ($results->result() as $flight) {
       $flight = $this->flight->find($flight->flight_id);
   ?>
<section class="sec-padding section-white">
   <div class="container">
      <div class="row">
         <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="cb-feature-box-1 less-padd">
               <div class="img-box">
                  <img src="<?php
                     echo base_url();
                     ?>/assets/shared/images/aircraft/exterior/<?php
                     echo $flight->flight_id;
                     ?>.jpg" alt="<?php
                     echo $flight->manufacture_name;
                     ?> <?php //echo $flight->model_name; 
                     ?>" class="img-responsive"> 
               </div>
            </div>
         </div>
         <!--end col main-->
         <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="cb-feature-box-1 less-padd">
               <div class="img-box">
                  <img src="<?php
                     echo base_url();
                     ?>/assets/shared/images/aircraft/interior/<?php
                     echo $flight->flight_id;
                     ?>.jpg" alt="<?php
                     echo $flight->manufacture_name;
                     ?> <?php //echo $flight->model_name; 
                     ?>" class="img-responsive"> 
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
                        <div  class="circle left_space"><?php
                           echo $flight->number_of_seats;
                           ?></div>
                        <div class="">Passenger</div>
                     </center>
                     <?php
                        if ($flight->sales_type_description == 'new') {
                        ?>
                     <center class="col-md-4 col-sm-4 col-xs-4 center">
                        <div  class="circle left_space"> <?php
                           echo $flight->maximum_range;
                           ?> </div>
                        <div  class="">Range</div>
                     </center>
                     <center class="col-md-4 col-sm-4 col-xs-4 center">
                        <div  class="circle left_space"> <?php
                           echo $flight->maximum_cruising_speed;
                           ?> </div>
                        <div  class="">Speed</div>
                     </center>
                     <?php
                        } else {
                        ?>
                     <center class="col-md-4 col-sm-4 col-xs-4 center">
                        <div  class="circle left_space"> <?php
                           echo $flight->year_name;
                           ?> </div>
                        <div  class="">Year</div>
                     </center>
                     <center class="col-md-4 col-sm-4 col-xs-4 center">
                        <div  class="circle left_space"> <?php
                           echo $flight->total_time;
                           ?> </div>
                        <div  class="">Total time</div>
                     </center>
                     <?php
                        }
                        ?>
                  </div>
                  <br>
               </div>
               <h3 class="uppercase title font-weight-4 montserrat"><a href="#"><?php
                  echo strtoupper($flight->model_name);
                  ?> </a></h3>
               <p><?php
                  echo $flight->general_description;
                  ?> </p>
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
            <a class="btn btn-prim btn-round btn-block btn-medium uppercase mybuttonfull" href="<?php
               echo base_url('aircraft/details/' . $name . '/' . $flight->flight_id);
               ?>"> VIEW AIRCRAFT SPECS &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-angle-right" aria-hidden="true"></i></a>
         </div>
         <!--end col main-->
         <div class="col-md-4 col-sm-6 col-xs-12"> 
            <a class="btn btn-prim btn-round btn-block btn-medium uppercase mybuttonfull" href="#"> I'M INTERESTED  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-angle-right" aria-hidden="true"></i></a>
         </div>
         <!--end col main-->
      </div>
   </div>
</section>
</div>
</section>
<?php
   } //end aircraft
   ?>  
<?php
   } else { //end aircraft
   ?>  
<h3 class="text-center thick">No results found!!</h3>
<?php
   }
   ?>
<?php
   } //end categories
   ?>