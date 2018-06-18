 <form enctype="multipart/form-data"  method="POST" action="<?php echo base_url('admin/create_item/'); ?>" id="create-form"></form>  

 <div class="row"> 
          <!--col-md-6 start-->
          <div class="col-md-12"> 
            <!--box-info start-->
            <div class="box-info">
              <hr>
              <!--form-horizontal row-border start-->
              <form action="" class="form-horizontal row-border" />
              
              <!--form-group start-->
              <div class="form-group">
                <label class="col-sm-3 control-label">Manufacturer</label>
                <div class="col-sm-9">
                  <select onchange="getModels(this.value)" form="create-form" name="manufacture_id" class="form-control" id="source">
                    <option value="0">--Select manufacturer--</option>
					<?php foreach($this->manufacture->all()->result() as $manufacture){ ?>
                        <option value="<?php echo $manufacture->manufacture_id;?>"><?php echo ucwords($manufacture->manufacture_name);?></option>
					<?php } ?>
				   </select>
                </div>
              </div>
              <!--form-group end--> 
              <!--form-group start-->
              <div class="form-group">
                <label class="col-sm-3 control-label">Model</label>
                <div class="col-sm-9">
                  <select form="create-form" name="model_id" id="model_id" class="form-control" placeholder="Disabled Dropdown">
				  <option>-- select manufacturer first --</option>
				  </select>
                </div>
              </div>
              <!--form-group end--> 
              <!--form-group start-->
              <div class="form-group">
                <label  class="col-sm-3 control-label">Category</label>
                <div class="col-sm-9">
                  <select form="create-form" name="category_id" class="form-control" id="source">
                    <option value="0">--Select Category--</option>
					<?php foreach($this->category->all()->result() as $category){ ?>
                        <option value="<?php echo $category->category_id;?>"><?php echo ucwords($category->category_name);?></option>
					<?php } ?>
				   </select>
                </div>
              </div>
			  
			  <div class="form-group">
                <label  class="col-sm-3 control-label">Sub-category</label>
                <div class="col-sm-9">
                  <select form="create-form" name="sub_category_id" class="form-control" id="sub-category">
                    <option value="0">--Select sub-Category--</option>
					<?php foreach($this->sub_category->all()->result() as $sub_category){ ?>
                        <option value="<?php echo $sub_category->sub_category_id;?>"><?php echo str_replace('_', ' ',ucwords($sub_category->sub_category_description));?></option>
					<?php } ?>
				   </select>
                </div>
              </div>
			  
			  <div class="form-group">
                <label class="col-sm-3 control-label">Year</label>
                <div class="col-sm-9">
                  <select form="create-form" name="year_id" class="form-control" id="source">
                    <option value="">--Select Year--</option>
					<?php 
						$this->db->order_by('year_name ASC');
						foreach($this->year->all()->result() as $year){ ?>
                        <option value="<?php echo $year->year_id;?>"><?php echo ucwords($year->year_name);?></option>
					<?php } ?>
				   </select>
                </div>
              </div>
			  <div class="form-group">
                <label class="col-sm-3 control-label">Service type</label>
                <div class="col-sm-9">
                  <select form="create-form" name="service_id" class="form-control" id="source">
                    <option value="">--Select Service--</option>
					<?php 
						foreach($this->service->all()->result() as $service){ ?>
                        <option value="<?php echo $service->service_id;?>"><?php echo ucwords($service->service_description);?></option>
					<?php } ?>
				   </select>
                </div>
              </div>


      <div class="form-group">
                <label class="col-sm-3 control-label">Manufacture Type</label>
                <div class="col-sm-9">
                  <select form="create-form" name="manufacture_type_id" class="form-control" id="source">
                    <option value="">--Select Manufacture Type--</option>
					<?php 
						foreach($this->manufacture_type->all()->result() as $service){ ?>
                        <option value="<?php echo $service->manufacture_type_id;?>"><?php echo ucwords($service->manufacture_type_description);?></option>
					<?php } ?>
				   </select>
                </div>
              </div>
               <div class="form-group">
                <label class="col-sm-3 control-label">Sales type</label>
                <div class="col-sm-9">
                  <select form="create-form" name="sales_type_id" class="form-control" id="source">
                    <option value="">--Select sales type--</option>
					<?php 
						foreach($this->sales_type->all()->result() as $sales_type){ ?>
                        <option value="<?php echo $sales_type->sales_type_id;?>"><?php echo str_replace('_', '-', ucwords($sales_type->sales_type_description));?></option>
					<?php } ?>
				   </select>
                </div>
              </div>
			  <div class="form-group">
                <label class="col-sm-3 control-label">Condition</label>
                <div class="col-sm-9">
                  <select form="create-form" name="condition_id" class="form-control" id="source">
                    <option value="0">--Select Condition--</option>
					<?php
						foreach($this->condition->all()->result() as $condition){ ?>
                        <option value="<?php echo $condition->condition_id;?>"><?php echo ucwords($condition->condition_name);?></option>
					<?php } ?>
				   </select>
                </div>
              </div>
			  <div class="form-group">
                <label class="col-sm-3 control-label">Serial number</label>
                <div class="col-sm-9">
                  <input form="create-form" name="serial_number" type="text" class="form-control popovers" placeholder="" data-trigger="hover" data-toggle="popover" data-content="Serial number" data-original-title="A Title" />
                </div>
              </div>
	      <div class="form-group">
                <label class="col-sm-3 control-label">Registration</label>
                <div class="col-sm-9">
                  <input form="create-form" name="registration" type="text" class="form-control popovers" placeholder="" data-trigger="hover" data-toggle="popover" data-content="Serial number" data-original-title="A Title" />
                </div>
              </div>
			  <div class="form-group">
                <label form="create-form"  class="col-sm-3 control-label">Total time</label>
                <div class="col-sm-9">
                  <input type="text" form="create-form" name="total_time" class="form-control popovers" placeholder="" data-trigger="hover" data-toggle="popover"  />
                </div>
              </div>
              <!--form-group end--> 
              <!--form-group start-->
              <div class="form-group">
                <label class="col-sm-3 control-label">Time between overhaul</label>
                <div class="col-sm-9">
                  <input form="create-form" name="time_between_overhaul" type="text" class="form-control" placeholder=""  />
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-3 control-label">Engine</label>
                <div class="col-sm-9">
                  <input form="create-form" name="engine" type="text" class="form-control" placeholder=""  />
                </div>
              </div>
			  <div class="form-group">
                <label class="col-sm-3 control-label">Crew - Charter </label>
                <div class="col-sm-9">
                  <input form="create-form" name="crew" type="text" class="form-control" placeholder=""  />
                </div>
              </div>
			  <div class="form-group">
                <label class="col-sm-3 control-label">Typical Use - Charter</label>
                <div class="col-sm-9">
                  <input form="create-form" name="typical_use" type="text" class="form-control" placeholder=""  />
                </div>
              </div>
			  <div class="form-group">
                <label class="col-sm-3 control-label">Estimated Cruise speed - Charter</label>
                <div class="col-sm-9">
                  <input form="create-form" name="estimated_cruise_speed" type="text" class="form-control" placeholder=""  />
                </div>
              </div>
			  <div class="form-group">
                <label class="col-sm-3 control-label">Estimated Range (Max Pax) - Charter</label>
                <div class="col-sm-9">
                  <input form="create-form" name="estimated_range" type="text" class="form-control" placeholder=""  />
                </div>
              </div>
			  <div class="form-group">
                <label class="col-sm-3 control-label">Maximum cruising speed</label>
                <div class="col-sm-9">
                  <input form="create-form" name="maximum_cruising_speed" type="text" class="form-control" placeholder=""  />
                </div>
              </div>
			  <div class="form-group">
                <label class="col-sm-3 control-label">Maximum Range</label>
                <div class="col-sm-9">
                  <input form="create-form" name="maximum_range" type="text" class="form-control" placeholder=""  />
                </div>
              </div>
			  <div class="form-group">
                <label class="col-sm-3 control-label">Range From Johannesburg - Charter</label>
                <div class="col-sm-9">
                  <input form="create-form" name="range_from" value="" type="text" class="form-control" placeholder=""  />
                </div>
              </div>
			  <div class="form-group">
                <label class="col-sm-3 control-label">Take off weight</label>
                <div class="col-sm-9">
                  <input form="create-form" name="take_off_weight" type="text" class="form-control" placeholder=""  />
                </div>
              </div>
			  <div class="form-group">
                <label class="col-sm-3 control-label">Cabin volumn</label>
                <div class="col-sm-9">
                  <input form="create-form" name="cabin_volumn" type="text" class="form-control" placeholder=""  />
                </div>
              </div>
			  <div class="form-group">
                <label class="col-sm-3 control-label">Standard useful load</label>
                <div class="col-sm-9">
                  <input form="create-form" name="standard_useful_load" type="text" class="form-control" placeholder=""  />
                </div>
              </div>
			  <div class="form-group">
                <label class="col-sm-3 control-label">Price</label>
                <div class="col-sm-9">
                  <input form="create-form" name="price" type="text" class="form-control" placeholder=""  />
                </div>
              </div>
			  <div class="form-group">
                <label class="col-sm-3 control-label">Number of seats</label>
                <div class="col-sm-9">
                  <input form="create-form" name="number_of_seats" type="text" class="form-control" placeholder=""  />
                </div>
              </div>
			  <div class="form-group">
                <label class="col-sm-3 control-label">Location</label>
                <div class="col-sm-9">
                  <input form="create-form" name="location" type="text" class="form-control" placeholder=""  />
                </div>
              </div>
			  <div class="form-group">
                <label class="col-sm-3 control-label">General Description</label>
                <div class="col-sm-9">
                  <textarea form="create-form" name="description" class="form-control"></textarea>
                </div>
			</div>
		
			<div class="form-group">
                <label class="col-sm-3 control-label">Technical Information</label>
                <div class="col-sm-9">
                  <textarea form="create-form" name="technical_information" class="form-control"></textarea>
                </div>
			</div>
		
              </div>
              <!--form-group end--> 
              <!--form-group start-->
              <div class="form-group">
                <label class="col-sm-3 control-label">Interior Image</label>
                <div class="col-sm-9">
					<input  form="create-form" type="file" name="interior" class="form-control"  placeholder='Choose a file...' />
				</div>
                </div>
			  <div class="form-group">
                <label class="col-sm-3 control-label">Exterior Image</label>
                <div class="col-sm-9">
					<input form="create-form" type="file" name="exterior" class="form-control"  placeholder='Choose a file...' />
				</div>
			</div>
			  
			 
		
			  <!--<div class="form-group">
                <label class="col-sm-3 control-label">All Images</label>
                <div class="col-sm-9">
                 <div id="dropzone">
					  <div form="create-form" id="demo-upload" class="dropzone dz-clickable">
						<div class="dz-default dz-message"><span>Drop files here to upload</span></div>
					  </div>
					</div>
                </div>
              </div>-->
			  
			 
              <!--form-group end--> 
             
              <!--form-group end-->
             
              <!--form-horizontal row-border end--> 
              <!--row start-->
              <div class="row">
                <div class="col-sm-9 col-sm-offset-3">
                  <div class="btn-toolbar">
                    <button form="create-form" type="submit" class="btn-primary btn">Submit</button>
                    <button class="btn-default btn">Cancel</button>
                  </div>
                </div>
              </div>
              <!--row end--> 
            </div>
            <!--box-info end--> 
          </div>
</div>

<script>
function getModels(modelId){
	$.ajax({
		url: '<?php echo base_url('/admin/get_models/'); ?>' + modelId,
		success: function(response){
			$(document).find('#model_id').html(response);
		}
	})
}


function bs_input_file() {
	$(".input-file").before(
		function() {
			if ( ! $(this).prev().hasClass('input-ghost') ) {
				var element = $("<input type='file' class='input-ghost' style='visibility:hidden; height:0'>");
				element.attr("name",$(this).attr("name"));
				element.change(function(){
					element.next(element).find('input').val((element.val()).split('\\').pop());
				});
				$(this).find("button.btn-choose").click(function(){
					element.click();
				});
				$(this).find("button.btn-reset").click(function(){
					element.val(null);
					$(this).parents(".input-file").find('input').val('');
				});
				$(this).find('input').css("cursor","pointer");
				$(this).find('input').mousedown(function() {
					$(this).parents('.input-file').prev().click();
					return false;
				});
				return element;
			}
		}
	);
}
$(function() {
	bs_input_file();
});
</script> 
    