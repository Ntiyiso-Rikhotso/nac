

<div class="clearfix"></div>
<!--end section-->
<section class="section-light">
   <div class="container-fluid">
      <div class="clearfix"></div>

       <?php 
                
                $this->db->or_where('sub_category_description', 'midsize_jets');
                $this->db->or_where('sub_category_description', 'twin_turbine_aircraft');
                $this->db->or_where('sub_category_description', 'twin_piston_aircraft');
                $this->db->or_where('sub_category_description', 'large_passenger_transport');
                $this->db->or_where('sub_category_description', 'regional_airliner');
                $this->db->or_where('sub_category_description', 'super_midsize_jets');

                

                //$this->db->order_by('description ASC');
                $category = $this->db->get('sub_category')->result();
                foreach($category  as $sub){
        ?>
    <br>
      <div class="container">
         <div class="mybanner">
            <p><?php echo ucwords(str_replace('_', ' ', $sub->sub_category_description)); ?></p>
         </div>
         <br>
      </div>
      <div class="container">
         <!--start content-->
         <div class="row">
           
                <?php
                    $this->db->where('flight.sub_category_id', $sub->sub_category_id);
                    $this->db->join('manufacture', 'manufacture.manufacture_id = flight.manufacture_id');
                    $this->db->join('model', 'model.model_id = flight.model_id');
                    $flights = $this->db->get('flight')->result();
                    foreach($flights as $flight){
                ?>
                <!-- item start -->
                    <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="cb-feature-box-1 less-padd">
                        <div class="col-md-12">
                            <div class="">
                                <image  class=" img-box img-responsive" src="<?php echo base_url('assets/shared/images/aircraft/exterior/'.$flight->flight_id.'.jpg'); ?>" />
                                <br>
                            </div>
                        </div>
                        <div class="col-md-12 alert-danger">
                            <br>
                            <div class="col-md-6">
                                <div  class="text_bold"> <?php echo $flight->manufacture_name; ?> <?php echo $flight->model_name; ?></div>
                            </div>
                            <div class="col-md-4">
                                <div  class="l"> Compare Aircraft</div>
                            </div>
                            <div class="col-md-1">
                                <input type="checkbox"  disabled="disabled" />
                            </div>
                        </div>
                        <div class="col-md-12 col-sm-12 center">
                        <br>
                            <center class="col-md-4 col-sm-4 col-xs-4 ">
                                <div  class="circle left_space"><?php echo $flight->number_of_seats; ?></div> 
                                <div class="">Passenger</div>
                            </center>
                            <center class="col-md-4 col-sm-4 col-xs-4 center">
                                <div  class="circle left_space"> <?php echo $flight->estimated_range; ?></div>
                                <div  class="">Range</div>
                            </center>
                            <center class="col-md-4 col-sm-4 col-xs-4  center">
                                <div  class="circle left_space"> <?php echo $flight->estimated_cruise_speed; ?></div>
                                <div  class=""> Speed</div>
                            </center>
                        </div>
                    </div>
                    </div>
                    <!-- item end -->
                    <?php } ?>





      </div>
      <!--End content section-->    
   </div>
   <?php } ?>
</section>
<div class="clearfix"></div>
<div class="clearfix"></div>

