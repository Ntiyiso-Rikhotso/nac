			<?php foreach($categories as $category){ ?>
			<?php $category_info = $this->category->find($category->category_id); ?>
				<div class="container">
                  <div class="mybanner">
                     <p><?php echo strtoupper($category_info->category_name); ?></p>
                  </div>
               </div>
			   <?php 
			   $this->db->where('category_id', $category->category_id);
			   foreach($this->aircraft->all()->result() as $flight){ ?>
               <section class="sec-padding section-white">
                  <div class="container">
                     <div class="row">
                        <div class="col-md-4 col-sm-6 col-xs-12">
                           <div class="cb-feature-box-1 less-padd">
                              <div class="img-box">
                                 <img src="<?php echo base_url(); ?>/assets/shared/images/aircraft/exterior/<?php echo $flight->flight_id; ?>.png" alt="<?php echo $flight->manufacture_name; ?> <?php //echo $flight->model_name; ?>" class="img-responsive"> 
                              </div>
                           </div>
                        </div>
                        <!--end col main-->
                        <div class="col-md-4 col-sm-6 col-xs-12">
                           <div class="cb-feature-box-1 less-padd">
                              <div class="img-box">
                                 <img src="<?php echo base_url(); ?>/assets/shared/images/aircraft/interior/<?php echo $flight->flight_id; ?>.png" alt="<?php echo $flight->manufacture_name; ?> <?php //echo $flight->model_name; ?>" class="img-responsive"> 
                              </div>
                           </div>
                        </div>
                        <!--end col main-->
                        <div class="col-md-4 col-sm-6 col-xs-12">
                           <div class="cb-feature-box-1 less-padd">
                              <div class="postinfo-box">
                                 <h3 class="uppercase title font-weight-4 montserrat"><a href="#"><?php echo strtoupper($flight->manufacture_name); ?> </a></h3>
                                 <div class="blog-post-info"><span><i class="fa fa-comments-o"></i> 15 Comments</span> <span><i class="fa fa-folder"></i> Business/corporate</span><span><i class="fa fa-thumbs-up"></i> 256 Likes</span> </div>
                                 <br>
                                 <p><?php echo $flight->description; ?> </p>
                              </div>
                              <!--end post item-->
                           </div>
                        </div>
                        <!--end col main-->
                     </div>
                     <div class="row">
                        <div class="col-md-4 col-sm-6 col-xs-12"> 
                        </div>
                        <!--end col main-->
						<?php 
						$name = $this->url->parse($flight->manufacture_name);
						?>
                        <div class="col-md-4 col-sm-6 col-xs-12"> 
                           <a class="btn  btn-info btn-round btn-block  btn-medium uppercase mybuttonfull" href="<?php echo base_url('aircraft/details/'. $name . '/' .$flight->flight_id); ?>"> VIEW AIRCRAFT SPECS &nbsp;<i class="fa fa-forward" aria-hidden="true"></i></a>
                        </div>
                        <!--end col main-->
                        <div class="col-md-4 col-sm-6 col-xs-12"> 
                           <a class="btn btn-prim btn-round btn-block btn-medium uppercase mybuttonfull" href="#"> I'M INTERESTED  &nbsp;<i class="fa fa-forward" aria-hidden="true"></i></a>
                        </div>
                        <!--end col main-->
                     </div>
                  </div>
               </section>
			   <?php } //end aircraft?>  
			<?php } //end categories?>  