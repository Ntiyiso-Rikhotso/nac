

<div class="clearfix"></div>
<!--end section-->
<section class="section-light">
   <div class="container-fluid">
      <div class="container">
         <!--start content-->
		 <h2 class="title_bold text-center">Charter Quote</h2>
		<div class="row">
            <div class="col-sm-8 col-sm-offset-2 form-box">
               
               <div class="form-bottom">
                  <form data-name="request-proposal"  id="talk-to-us" method="post" action="<?php echo base_url('home/talk_to_us/'); ?>" class="form-validate">
                     <div class="form-group">
                        <p class="form-control-static">
                         
                           &nbsp; &nbsp; Asterisk * indicates fields that are required
                        </p>
                     </div>
                     <div class="form-group has-error">
                        <label for="inputEmail3" class="col-sm-5 control-label2" required>Company Name (if applicable)</label>
                        <div class="col-sm-6">
                           <input type="text" class="form-control" name="company_name" required id="inputEmail3"  value="" placeholder="* Company Name">
                        </div>
                     </div>
                     <div class="form-group has-error">
                        <label for="inputEmail3" class="col-sm-5 control-label2">Contact Person</label>
                        <div class="col-sm-6">
                           <input type="text" class="form-control" name="contact_person" required id="inputEmail3" value="" placeholder="* Contact Person">
                        </div>
                     </div>
                     <div class="form-group has-error">
                        <label for="inputEmail3" class="col-sm-5 control-label2">Email Address</label>
                        <div class="col-sm-6">
                           <input type="email" class="form-control" name="email" required id="inputEmail3" value="" placeholder="* Email Address">
                        </div>
                     </div>
                     <div class="form-group">
                        <label for="inputEmail3" class="col-sm-5 control-label2">Telephone Number</label>
                        <div class="col-sm-6">
                           <input type="text" name='tel_number' class="form-control" id="inputEmail3" value="" placeholder="Telephone Number">
                        </div>
                     </div>
                     <div class="form-group">
                        <label for="inputEmail3" class="col-sm-5 control-label2">Mobile Number</label>
                        <div class="col-sm-6">
                           <input type="text" name='cell_number' class="form-control" id="inputEmail3" value="" placeholder="Mobile Number">
                        </div>
                     </div>
                     <div class="form-group">
                        <label for="inputEmail3" class="col-sm-5 control-label2">Routing</label>
                        <div class="col-sm-6">
                           <input type="text" name="routing" class="form-control" id="inputEmail3" value="" placeholder="e.g. Lanseria - Cape Town - Bloemfontein">
                        </div>
                     </div>
                     <div class="form-group has-error">
                        <label for="inputEmail3" class="col-sm-5 control-label2">Drop off / Return / Multi-leg</label>
                        <div class="col-sm-6">
                           <label>
                           <input type="radio" name="charter_type" required value="Drop off" > Drop off &nbsp;&nbsp;
                           </label>
                           <label>
                           <input type="radio" name="charter_type" value="Return" > Return &nbsp;&nbsp;
                           </label>
                           <label>
                           <input type="radio" name="charter_type" value="Multi-leg" > Multi-leg
                           </label>
                        </div>
                     </div>
                     <div class="form-group">
                        <label for="inputEmail3" class="col-sm-5 control-label2">Departure Date</label>
                        <div class="col-sm-6">
                           <div class="input-group date form_date " id="datetimepicker1" data-date="" data-date-format="yyyy-mm-dd"
                              data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
                              <input class="form-control" size="16" type="text" name="departure_date" placeholder="Departure Date">
                              <span class="input-group-addon"><span class="fa fa-calendar-o"></span></span>
                           </div>
                        </div>
                     </div>
                     <div class="form-group">
                        <label for="inputEmail3" class="col-sm-5 control-label2">Return Date</label>
                        <div class="col-sm-6">
                           <div class="input-group date form_date " id="datetimepicker1" data-date="" data-date-format="yyyy-mm-dd"
                              data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
                              <input class="form-control" size="16" type="text" name="return_date" placeholder="Return Date">
                              <span class="input-group-addon"><span class="fa fa-calendar-o"></span></span>
                           </div>
                        </div>
                     </div>
                     <div class="form-group has-error">
                        <label for="inputEmail3" class="col-sm-5 control-label2">Number of Passengers</label>
                        <div class="col-sm-6">
                           <input type="text" class="form-control" name="number_of_passengers" required value=" " id="inputEmail3" placeholder="* Number of Passengers">
                        </div>
                     </div>
                     <div class="form-group has-error">
                        <label for="inputEmail3" class="col-sm-5 control-label2">Flight Requirements</label>
                        <div class="col-sm-6">
                           <textarea class="form-control" rows="3" required name="flight_requirements" placeholder="* Flight Requirements"></textarea>
                        </div>
                     </div>
                     <div class="form-group">
                        <label for="inputEmail3" class="col-sm-5 control-label2">Catering Requirements</label>
                        <div class="col-sm-6">
                           <label>
                           <input type="checkbox" name="catering_requirements[]" value="Halaal" > Halaal &nbsp;&nbsp;
                           </label>
                           <label>
                           <input type="checkbox" name="catering_requirements[]" value="Kosher" > Kosher &nbsp;&nbsp;
                           </label>
                           <label>
                           <input type="checkbox" name="catering_requirements[]" value="Vegetarian" > Vegetarian &nbsp;&nbsp;
                           </label>
                           <label>
                           <input type="checkbox" name="catering_requirements[]" value="Other" > Other &nbsp;&nbsp;
                           </label>
                        </div>
                     </div>
                     <div class="form-group">
                        <label for="inputEmail3" class="col-sm-5 control-label2">Additional Comments</label>
                        <div class="col-sm-6">
                           <textarea class="form-control" rows="3" name="additional_comments" placeholder="* Additional Comments"></textarea>
                        </div>
                     </div>
                     <div class="form-group">
                        <label for="inputEmail3" class="col-sm-5 control-label2">Have you flown with NAC before?</label>
                        <div class="col-sm-6">
                           <label>
                           <input type="radio" name="flown_before" required value="Yes" > Yes &nbsp;&nbsp;
                           </label>
                           <label>
                           <input type="radio" name="flown_before" required value="No" > No &nbsp;&nbsp;
                           </label>
                        </div>
                     </div>
                     <div class="form-group">
                        <div class="col-sm-12">
                           <br>   
						  <div class="col-sm-4">
						  </div>
						  <div>
                           <p align="center">
                           
							<input type="submit" value="Reset" class="btn">
						   <input type="submit" value="Send Message" class="btn talk-to-us">
                            <!--    <button type="reset" class="btn btn-info"><span class="glyphicon glyphicon-refresh"></span> Reset</button>
                            <!--  <button type="submit" name="submit" value="1" class="btn btn-primary"><span class="glyphicon glyphicon-send"></span> Send</button> -->
                           </p>
                        </div>
                     </div>
                  </form>
               </div>
            </div>
         </div>



		<!--end content-->
	  </div>
      <!-- #content -->
   </div>
   <!--End content section-->    
   </div>
</section>
<div class="clearfix"></div>
<div class="clearfix"></div>

