 <form enctype="multipart/form-data"  method="POST" action="<?php echo base_url('admin/aircrafts/do_update/'); ?>" id="create-form"></form>  

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
                        <option <?php echo $aircraft_info->manufacture_id == $manufacture->manufacture_id ? 'selected' : ''; ?> value="<?php echo $manufacture->manufacture_id;?>"><?php echo ucwords($manufacture->manufacture_name);?></option>
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
                    <?php 
                    $this->db->where('manufacture_id', $aircraft_info->manufacture_id);
                    foreach($this->model->all()->result() as $model){ ?>
                        <option <?php echo $aircraft_info->model_id == $model->model_id ? 'selected' : ''; ?> value="<?php echo $model->model_id;?>"><?php echo ucwords($model->model_name);?></option>
					        <?php } ?>
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
                        <option <?php echo $aircraft_info->category_id == $category->category_id ? 'selected' : ''; ?> value="<?php echo $category->category_id;?>"><?php echo ucwords($category->category_name);?></option>
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
                        <option <?php echo $aircraft_info->sub_category_id == $sub_category->sub_category_id ? 'selected' : ''; ?> value="<?php echo $sub_category->sub_category_id;?>"><?php echo str_replace('_', ' ',ucwords($sub_category->sub_category_description));?></option>
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
                        <option <?php echo $aircraft_info->year_id == $year->year_id ? 'selected' : ''; ?> value="<?php echo $year->year_id;?>"><?php echo ucwords($year->year_name);?></option>
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
                        <option  <?php echo $aircraft_info->service_id == $service->service_id ? 'selected' : ''; ?> value="<?php echo $service->service_id;?>"><?php echo ucwords($service->service_description);?></option>
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
                        <option <?php echo $aircraft_info->manufacture_type_id == $service->manufacture_type_id ? 'selected' : ''; ?> value="<?php echo $service->manufacture_type_id;?>"><?php echo ucwords($service->manufacture_type_description);?></option>
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
                        <option <?php echo $aircraft_info->sales_type_id == $sales_type->sales_type_id ? 'selected' : ''; ?> value="<?php echo $sales_type->sales_type_id;?>"><?php echo str_replace('_', '-', ucwords($sales_type->sales_type_description));?></option>
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
                        <option <?php echo $aircraft_info->condition_id == $condition->condition_id ? 'selected' : ''; ?> value="<?php echo $condition->condition_id;?>"><?php echo ucwords($condition->condition_name);?></option>
					<?php } ?>
				   </select>
                </div>
              </div>
			  <div class="form-group">
                <label class="col-sm-3 control-label">Serial number</label>
                <div class="col-sm-9">
                  <input form="create-form" value="<?php echo $aircraft_info->serial_number; ?>" name="serial_number" type="text" class="form-control popovers" placeholder="" data-trigger="hover" data-toggle="popover" data-content="Serial number" data-original-title="A Title" />
                </div>
              </div>
	      <div class="form-group">
                <label class="col-sm-3 control-label">Registration</label>
                <div class="col-sm-9">
                  <input form="create-form" value="<?php echo $aircraft_info->registration; ?>" name="registration" type="text" class="form-control popovers" placeholder="" data-trigger="hover" data-toggle="popover" data-content="Serial number" data-original-title="A Title" />
                </div>
              </div>
			  <div class="form-group">
                <label form="create-form"  class="col-sm-3 control-label">Total time</label>
                <div class="col-sm-9">
                  <input type="text" value="<?php echo $aircraft_info->total_time; ?>"  form="create-form" name="total_time" class="form-control popovers" placeholder="" data-trigger="hover" data-toggle="popover"  />
                </div>
              </div>
              <!--form-group end--> 
              <!--form-group start-->
              <div class="form-group">
                <label class="col-sm-3 control-label">Time between overhaul</label>
                <div class="col-sm-9">
                  <input form="create-form" value="<?php echo $aircraft_info->time_between_overhaul; ?>" name="time_between_overhaul" type="text" class="form-control" placeholder=""  />
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-3 control-label">Engine</label>
                <div class="col-sm-9">
                  <input form="create-form" value="<?php echo $aircraft_info->engine; ?>" name="engine" type="text" class="form-control" placeholder=""  />
                </div>
              </div>
			  <div class="form-group">
                <label class="col-sm-3 control-label">Crew - Charter </label>
                <div class="col-sm-9">
                  <input form="create-form" value="<?php echo $aircraft_info->crew; ?>" name="crew" type="text" class="form-control" placeholder=""  />
                </div>
              </div>
			  <div class="form-group">
                <label class="col-sm-3 control-label">Typical Use - Charter</label>
                <div class="col-sm-9">
                  <input form="create-form" value="<?php echo $aircraft_info->typical_use; ?>"  name="typical_use" type="text" class="form-control" placeholder=""  />
                </div>
              </div>
			  <div class="form-group">
                <label class="col-sm-3 control-label">Estimated Cruise speed - Charter</label>
                <div class="col-sm-9">
                  <input form="create-form" value="<?php echo $aircraft_info->estimated_cruise_speed; ?>" name="estimated_cruise_speed" type="text" class="form-control" placeholder=""  />
                </div>
              </div>
			  <div class="form-group">
                <label class="col-sm-3 control-label">Estimated Range (Max Pax) - Charter</label>
                <div class="col-sm-9">
                  <input form="create-form" value="<?php echo $aircraft_info->estimated_range; ?>" name="estimated_range" type="text" class="form-control" placeholder=""  />
                </div>
              </div>
			  <div class="form-group">
                <label class="col-sm-3 control-label">Maximum cruising speed</label>
                <div class="col-sm-9">
                  <input form="create-form" value="<?php echo $aircraft_info->maximum_cruising_speed; ?>" name="maximum_cruising_speed" type="text" class="form-control" placeholder=""  />
                </div>
              </div>
			  <div class="form-group">
                <label class="col-sm-3 control-label">Maximum Range</label>
                <div class="col-sm-9">
                  <input form="create-form" value="<?php echo $aircraft_info->maximum_range; ?>"  name="maximum_range" type="text" class="form-control" placeholder=""  />
                </div>
              </div>
			  <div class="form-group">
                <label class="col-sm-3 control-label">Range From Johannesburg - Charter</label>
                <div class="col-sm-9">
                  <input form="create-form" value="<?php echo $aircraft_info->range_from; ?>" name="range_from" value="" type="text" class="form-control" placeholder=""  />
                </div>
              </div>
			  <div class="form-group">
                <label class="col-sm-3 control-label">Take off weight</label>
                <div class="col-sm-9">
                  <input form="create-form" value="<?php echo $aircraft_info->take_off_weight; ?>"  name="take_off_weight" type="text" class="form-control" placeholder=""  />
                </div>
              </div>
			  <div class="form-group">
                <label class="col-sm-3 control-label">Cabin volumn</label>
                <div class="col-sm-9">
                  <input form="create-form" value="<?php echo $aircraft_info->cabin_volumn; ?>" name="cabin_volumn" type="text" class="form-control" placeholder=""  />
                </div>
              </div>
			  <div class="form-group">
                <label class="col-sm-3 control-label">Standard useful load</label>
                <div class="col-sm-9">
                  <input form="create-form" value="<?php echo $aircraft_info->standard_useful_load; ?>" name="standard_useful_load" type="text" class="form-control" placeholder=""  />
                </div>
              </div>
			  <div class="form-group">
                <label class="col-sm-3 control-label">Price</label>
                <div class="col-sm-9">
                  <input form="create-form" name="price" value="<?php echo $aircraft_info->price; ?>" type="text" class="form-control" placeholder=""  />
                </div>
              </div>
			  <div class="form-group">
                <label class="col-sm-3 control-label">Number of seats</label>
                <div class="col-sm-9">
                  <input form="create-form" value="<?php echo $aircraft_info->number_of_seats; ?>" name="number_of_seats" type="text" class="form-control" placeholder=""  />
                </div>
              </div>
			  <div class="form-group">
                <label class="col-sm-3 control-label">Location</label>
                <div class="col-sm-9">
                  <input form="create-form" value="<?php echo $aircraft_info->location; ?>" name="location" type="text" class="form-control" placeholder=""  />
                </div>
              </div>
			  <div class="form-group">
                <label class="col-sm-3 control-label">General Description</label>
                <div class="col-sm-9">
                  <textarea form="create-form" value="<?php echo $aircraft_info->description; ?>" name="description" class="form-control"></textarea>
                </div>
			</div>
		
			<div class="form-group">
                <label class="col-sm-3 control-label">Technical Information</label>
                <div class="col-sm-9">
                  <textarea form="create-form"   rows="10" name="technical_information" class="form-control"><?php echo $aircraft_info->technical_information; ?></textarea>
                </div>
			</div>
		
              
              <!--form-group end--> 
              <!--form-group start-->

              <div class="form-group">
                <label class="col-sm-3 control-label">Uploaded Interior Image</label>
                <div class="col-sm-4">
                  <img src="<?php echo base_url('assets/shared/images/aircraft/interior/'. $aircraft_info->flight_id.'.jpg'); ?>" />
                </div>
                <div class="col-sm-1">
                    <!--<input  form="create-form" type="file" name="interior" class="form-control"  placeholder='Choose a file...' />-->
                </div>
                <div class="col-sm-4">
                          <div class="panel panel-primary" data-collapsed="0">
                  
                  <div class="panel-heading">
                    <div class="panel-title">
                   <p style="white-space: nowrap;"> <input class="checkbox right" type="checkbox" name="upadet_interior_mage" /> Upadate Interior</p>
                    </div>
                    
                    <div class="panel-options">
                      <a href="#sample-modal" data-toggle="modal" data-target="#sample-modal-dialog-1" class="bg"><i class="entypo-cog"></i></a>
                      <a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
                      <a href="#" data-rel="reload"><i class="entypo-arrows-ccw"></i></a>
                      <a href="#" data-rel="close"><i class="entypo-cancel"></i></a>
                    </div>
                  </div>
                          
                  <div class="panel-body">
                    
                    <div class="thumbnail-highlight">
                      <img id="jcrop-4" src="<?php echo base_url('assets/shared/images/aircraft/interior/'. $aircraft_info->flight_id.'.jpg'); ?>" class="img-responsive img-rounded" />
                    </div>
                  
                  </div>
                  
                  <div class="panel-body">
                  
                   <!-- <form action="data/image-crop.php" method="post" onsubmit="return checkCoords();" target="_blank"> -->
                      <input type="hidden" id="x" name="x" />
                      <input type="hidden" id="y" name="y" />
                      <input type="hidden" id="w" name="w" />
                      <input type="hidden" id="h" name="h" />
                      <!--<input type="submit" value="Crop Image" class="btn btn-large btn-primary" />
                    </form> -->
                    
                  </div>
                  
                </div>
            </div>
              </div>

              <div class="form-group">
                <label class="col-sm-3 control-label">Uploaded Exterior Image</label>
                <div class="col-sm-4">
                  <img src="<?php echo base_url('assets/shared/images/aircraft/exterior/'. $aircraft_info->flight_id.'.jpg'); ?>" />
                </div>
                <div class="col-sm-1">
                    <!--<input  form="create-form" type="file" name="interior" class="form-control"  placeholder='Choose a file...' />-->
                </div>
                <div class="col-sm-4">
                          <div class="panel panel-primary" data-collapsed="0">
                  
                  <div class="panel-heading">
                    <div class="panel-title">
                   <p style="white-space: nowrap;"> <input class="checkbox right" type="checkbox" name="upadet_interior_mage" /> Upadete exterior?</p>
                    </div>
                    
                    <div class="panel-options">
                      <a href="#sample-modal" data-toggle="modal" data-target="#sample-modal-dialog-1" class="bg"><i class="entypo-cog"></i></a>
                      <a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
                      <a href="#" data-rel="reload"><i class="entypo-arrows-ccw"></i></a>
                      <a href="#" data-rel="close"><i class="entypo-cancel"></i></a>
                    </div>
                  </div>
                          
                  <div class="panel-body">
                    
                    <div class="thumbnail-highlight">
                      <img id="jcrop-4" src="<?php echo base_url('assets/shared/images/aircraft/exterior/'. $aircraft_info->flight_id.'.jpg'); ?>" class="img-responsive img-rounded" />
                    </div>
                  
                  </div>
                  
                  <div class="panel-body">
                  
                   <!-- <form action="data/image-crop.php" method="post" onsubmit="return checkCoords();" target="_blank"> -->
                      <input type="hidden" id="x" name="x" />
                      <input type="hidden" id="y" name="y" />
                      <input type="hidden" id="w" name="w" />
                      <input type="hidden" id="h" name="h" />
                      <!--<input type="submit" value="Crop Image" class="btn btn-large btn-primary" />
                    </form> -->
                    
                  </div>
                  
                </div>
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

}

	bs_input_file();
;
</script> 
    