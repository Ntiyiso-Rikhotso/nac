 <form enctype="multipart/form-data"  method="POST" action="<?php echo base_url('admin/aircrafts/do_update/');?>" id="create-form"></form>  
<input name="flight_id" value="<?php echo $aircraft_info->flight_id; ?>" hidden >
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
                <label class="col-sm-3 control-label">Manufacture</label>
                <div class="col-sm-9">
                  <select onchange="getModels(this.value)" form="create-form" name="manufacture_id" class="form-control" id="source">
                    <option value="AK">--Select manufacture--</option>
					<?php foreach($this->manufacture->all()->result() as $manufacture){ ?>
                        <option <?php if($aircraft_info->manufacture_id == $manufacture->manufacture_id)echo 'selected';?> value="<?php echo $manufacture->manufacture_id;?>"><?php echo ucwords($manufacture->manufacture_name);?></option>
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
				  <?php $model = $this->model->find($aircraft_info->model_id);?>
				  <option value="<?php echo $model->model_id; ?>"><?php echo $model->model_name; ?></option>
				  </select>
                </div>
              </div>
              <!--form-group end--> 
              <!--form-group start-->
              <div class="form-group">
                <label  class="col-sm-3 control-label">Category</label>
                <div class="col-sm-9">
                  <select form="create-form" name="category_id" class="form-control" id="source">
                    <option value="AK">--Select Category--</option>
					<?php foreach($this->category->all()->result() as $category){ ?>
                        <option <?php if($aircraft_info->category_id == $category->category_id)echo 'selected';?> value="<?php echo $category->category_id;?>"><?php echo ucwords($category->category_name);?></option>
					<?php } ?>
				   </select>
                </div>
              </div>
			  
			  <div class="form-group">
                <label class="col-sm-3 control-label">Year</label>
                <div class="col-sm-9">
                  <select form="create-form" name="year_id" class="form-control" id="source">
                    <option value="AK">--Select Year--</option>
					<?php 
						$this->db->order_by('year_name ASC');
						foreach($this->year->all()->result() as $year){ ?>
                        <option <?php if($aircraft_info->year_id == $year->year_id)echo 'selected';?>  value="<?php echo $year->year_id;?>"><?php echo ucwords($year->year_name);?></option>
					<?php } ?>
				   </select>
                </div>
              </div>
			  <div class="form-group">
                <label class="col-sm-3 control-label">Condition</label>
                <div class="col-sm-9">
                  <select form="create-form" name="condition_id" class="form-control" id="source">
                    <option value="AK">--Select Condition--</option>
					<?php
						foreach($this->condition->all()->result() as $condition){ ?>
                        <option <?php if($aircraft_info->condition_id == $condition->condition_id)echo 'selected';?>  value="<?php echo $condition->condition_id;?>"><?php echo ucwords($condition->condition_name);?></option>
					<?php } ?>
				   </select>
                </div>
              </div>
			  <div class="form-group">
                <label class="col-sm-3 control-label">Serial number</label>
                <div class="col-sm-9">
                  <input value="<?php echo $aircraft_info->serial_number; ?>" form="create-form" name="serial_number" type="text" class="form-control popovers" placeholder="" data-trigger="hover" data-toggle="popover" data-content="Serial number" data-original-title="A Title" />
                </div>
              </div>
			  <div class="form-group">
                <label form="create-form" name="total_time" class="col-sm-3 control-label">Total time</label>
                <div class="col-sm-9">
                  <input value="<?php echo $aircraft_info->total_time; ?>" type="text" class="form-control popovers" placeholder="" data-trigger="hover" data-toggle="popover" data-content="Serial number" data-original-title="A Title" />
                </div>
              </div>
              <!--form-group end--> 
              <!--form-group start-->
              <div class="form-group">
                <label class="col-sm-3 control-label">Time between overhaul</label>
                <div class="col-sm-9">
                  <input value="<?php echo $aircraft_info->time_between_overhaul; ?>" form="create-form" name="time_between_overhaul" type="text" class="form-control" placeholder=""  />
                </div>
              </div>
			  <div class="form-group">
                <label class="col-sm-3 control-label">Maximum cruising speed</label>
                <div class="col-sm-9">
                  <input value="<?php echo $aircraft_info->maximum_cruising_speed; ?>" form="create-form" name="maximum_cruising_speed" type="text" class="form-control" placeholder=""  />
                </div>
              </div>
			  <div class="form-group">
                <label class="col-sm-3 control-label">Maximum Range</label>
                <div class="col-sm-9">
                  <input form="create-form" value="<?php echo $aircraft_info->maximum_range; ?>" name="maximum_range" type="text" class="form-control" placeholder=""  />
                </div>
              </div>
			  <div class="form-group">
                <label class="col-sm-3 control-label">Take off weight</label>
                <div class="col-sm-9">
                  <input form="create-form" value="<?php echo $aircraft_info->take_off_weight; ?>" name="take_off_weight" type="text" class="form-control" placeholder=""  />
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
                  <input form="create-form" value="<?php echo $aircraft_info->price; ?>" name="price" type="text" class="form-control" placeholder=""  />
                </div>
              </div>
			  <div class="form-group">
                <label class="col-sm-3 control-label">Number of seats</label>
                <div class="col-sm-9">
                  <input value="<?php echo $aircraft_info->number_of_seats; ?>" form="create-form" name="number_of_seats" type="text" class="form-control" placeholder=""  />
                </div>
              </div>
			  <div class="form-group">
                <label class="col-sm-3 control-label">Location</label>
                <div class="col-sm-9">
                  <input form="create-form" value="<?php echo $aircraft_info->location; ?>" name="location" type="text" class="form-control" placeholder=""  />
                </div>
              </div>
			  <div class="form-group">
                <label class="col-sm-3 control-label">Description</label>
                <div class="col-sm-9">
                  <textarea form="create-form" name="description" class="form-control"><?php echo $aircraft_info->description; ?></textarea>
                </div>
              </div>
              <!--form-group end--> 
              <!--form-group start-->
              <div class="form-group">
                <label class="col-sm-3 control-label">Interior 	Image</label>
                <div class="col-sm-9">
                  <input form="create-form" name="interior" type="file" class="form-control"  value="Read only text goes here" />
                </div>
              </div>
			  <div class="form-group">
                <label class="col-sm-3 control-label">Exterior Image</label>
                <div class="col-sm-9">
                  <input form="create-form" name="exterior" type="file" class="form-control"  value="Read only text goes here" />
                </div>
              </div>
			  
			 
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
		url: '<?php echo base_url('admin/get_models/'); ?>' + modelId,
		success: function(response){
			$(document).find('#model_id').html(response);
		}
	})
}
</script> 
    