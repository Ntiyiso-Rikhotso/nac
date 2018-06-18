

<div class="clearfix"></div>
<!--end section-->
<section class="section-light">
   <div class="container-fluid">
      <div id="page-content" role="main">
         <div class="container">
            <div id="content">
               <div class="container-out container-dark">
                  <div class="title title-section">
                     <h2 class="title_bold text-center ">Get in touch with us</h2>
                     <span class="sticker">
                     <i class="icon icomoon-home3"></i>
                     </span>
                  </div>
                  <!-- .title.title-section -->
               </div>
               <!-- .container-out -->
               <br><br><br>
               <div class="container-out">
                  <div class="row">
                     <div class="col-sm-10 col-sm-offset-1">
                        <div class="form-inner">
                              <div class="title">
                                 <h2 class="h3">Send message</h2>
                                 <form data-name="contact-us"  id="talk-to-us" method="post" action="<?php echo base_url('home/talk_to_us/'); ?>" class="form-validate"></form>
                              </div>
                              <div class="row">
                                 <div class="col-sm-6">
                                    <div class="form-field">
                                       <label for="name">Name<span class="require">(*)</span></label>
                                       <input form="talk-to-us" class="form-control" type="text" maxlength="100" name="name" id="name" required />
                                    </div>
                                    <!-- .form-field -->
                                 </div>
                                 <!-- .col-sm-6 -->
                                 <div class="col-sm-6">
                                    <div class="form-field">
                                       <label for="Tel">Tel No<span class="require">(*)</span></label>
                                       <input form="talk-to-us" class="form-control" type="telephone_number" name="telephone_number" id="Tel" required />
                                    </div>
                                    <!-- .form-field -->
                                 </div>
                                 <!-- .col-sm-6 -->
                                 <div class="col-sm-6">
                                    <div class="form-field">
                                       <label for="email">Email<span class="require">(*)</span></label>
                                       <input form="talk-to-us" class="form-control" type="email" name="email" id="email" required />
                                    </div>
                                    <!-- .form-field -->
                                 </div>
                                 <!-- .col-sm-6 -->
                                 <div class="col-sm-6">
                                    <div class="form-field">
                                       <label for="Department">Department<span class="require">(*)</span></label>
                                       <select form="talk-to-us" class="form-control" name="department">
                                          <option value="" selected="">- - Select Department - -</option>
                                        <?php
                                        //$this->db->where('airport_id', $airport->airport_id);
                                        $departments = $this->db->get('department')->result();
                                        foreach($departments as $department){
                                        ?>
                                          <option value="<?php echo $department->department_email;?>"><?php echo $department->department_description;?></option>
                                         <?php } ?>
                                       </select>
                                    </div>
                                    <!-- .form-field -->
                                 </div>
                                 <!-- .col-sm-6 -->
                              </div>
                              <!-- .row -->
                              <div class="form-field form-controld">
                                 <label for="message">Query<span class="require">(*)</span></label>
                                 <textarea form="talk-to-us" class="form-control" maxlength="5000" rows="4" name="message" id="message" required></textarea>
                              </div>
                              <!-- .form-field -->
                              <div class="form-field text-right">
                                  <br>
                                 <input type="submit" value="Reset" class="btn">
                                 <input type="submit" value="Send Message" class="btn talk-to-us">
                              </div>
                              <!-- .form-field 
                        </div>
                        <!-- .form -->
                        <br><br>
                     </div>
                     <!-- .col-sm-7 -->
                  </div>
                  <!--container-out  -->
               </div>
               <div id="page-content" role="main">
                  <div class="container">
                  <?php 
                  $this->db->order_by('airport_description ASC');
                        $airports = $this->db->get('airport')->result(); 
                        foreach($airports as $airport){
                    ?>   
                        <div class="row">
                            <div class="row">
                                <div class="title col-md-12">
                                    <h3 class="red-color"><i class="fa fa-map-marker"></i><b>&nbsp;<?php echo $airport->airport_description;?></b></h3>
                                   
                                </div>
                               <?php
                                $this->db->where('airport_id', $airport->airport_id);
                                $departments = $this->db->get('department')->result();
                                foreach($departments as $department){
                               ?>
                                    <div class="col-sm-4">
                                    <h4 class="blue-color"><br><b>&nbsp;<?php echo $department->department_description;?></b></h4>
                                    Tel&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <?php echo $department->department_normal_hours_telephone;?><br>
                                    Email&nbsp;&nbsp;:<a href="mailto:<?php echo $department->department_email;?>"><?php echo $department->department_email;?></a><br>
                                    <b>After Hours: &nbsp;<?php echo $department->department_normal_hours_telephone;?></b>
                                    
                                    </div>
                                   
                                <?php } ?>
                              
                            <hr />
                            </div>



                        </div>
                        <hr/>
                     <?php } ?>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <br><br><br>
      <!--end content-->
   </div>
   <!-- #content -->
   </div>
   <!--End content section-->    
   </div>
</section>
<div class="clearfix"></div>
<div class="clearfix"></div>

