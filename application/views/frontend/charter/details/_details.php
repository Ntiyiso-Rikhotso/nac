

<!-- header -->
<!-- header -->
<!-- START REVOLUTION SLIDER 5.0 -->

<section class="sec-padding section-white">
   <div class="container">
      <div class="mybanner">
         <p>Jet Aircraft</p>
      </div>
   </div>
   <section class="sec-padding section-white">
      <div class="container">
         <div class="row">
            <div class="col-md-4 col-sm-6 col-xs-12">
               <div class="cb-feature-box-1 less-padd">
                  <div class="img-box">
                     <img src="<?php echo base_url(); ?>/assets/shared/images/aircraft/exterior/<?php echo $flight->flight_id; ?>.png" alt="" class="img-responsive"> 
                  </div>
               </div>
            </div>
            <!--end col main-->
            <div class="col-md-4 col-sm-6 col-xs-12">
               <div class="cb-feature-box-1 less-padd">
                  <div class="img-box">
                     <img src="<?php echo base_url(); ?>/assets/shared/images/aircraft/interior/<?php echo $flight->flight_id; ?>.png" alt="" class="img-responsive"> 
                  </div>
               </div>
            </div>
            <!--end col main-->
            <div class="col-md-4 col-sm-6 col-xs-12">
               <div class="cb-feature-box-1 less-padd">
                  <div class="postinfo-box">
                     <h3 class="uppercase title font-weight-4 montserrat"><a href="#"><?php echo $flight->manufacture_name; ?> <?php echo $flight->model_name; ?></a></h3>
                     <div class="blog-post-info"><span><i class="fa fa-comments-o"></i> 15 Comments</span> <span><i class="fa fa-folder"></i> Business/corporate</span><span><i class="fa fa-thumbs-up"></i> 256 Likes</span> </div>
                     <br>
                     <p>consectetuer adipiscing elit Suspendisse et justo Praesent mattis commodo augue Aliquam ornare . </p>
                  </div>
                  <!--end post item-->
               </div>
            </div>
            <!--end col main-->
         </div>
         <br><br>
         <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-12">
               <div class="cb-feature-box-1">
                  <h3 class="uppercase title font-weight-4 montserrat"><a href="#"> Equipement Specifiacation  </a></h3>
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
               </div>
               <!--end post item-->
            </div>
            <!--end col main-->
            <div class="col-md-6 col-sm-6 col-xs-12">
               <div class="cb-feature-box-1">
                  <h3 class="uppercase title font-weight-4 montserrat"><a href="#">General Information </a></h3>
                  <p><?php echo $flight->description; ?></p>
               </div>
               <!--end post item-->
            </div>
            <!--end col main-->
         </div>
         <div class="row">
            <div class="col-md-4 col-sm-6 col-xs-12"> 
            </div>
            <!--end col main-->
            <div class="col-md-4 col-sm-6 col-xs-12"> 
               <a class="btn btn-prim btn-round btn-medium uppercase mybuttonfull" href="#"> BACK <i class="fa fa-arrow-backward" aria-hidden="true"></i></a>
            </div>
            <!--end col main-->
            <div class="col-md-4 col-sm-6 col-xs-12"> 
               <a class="btn btn-prim btn-round btn-medium uppercase mybuttonfull" href="#"> I'M INTERESTED <i class="fa fa-play-circle" aria-hidden="true"></i></a>
            </div>
            <!--end col main-->
         </div>
         <div class="clearfix"></div>
         <div class="col-divider-margin-3"></div>
   </section>
   <div class="clearfix"></div>
   <!-- end section --> 
</section>
<!-- footer -->
<!-- footer-->
</div>

