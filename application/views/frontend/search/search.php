<form id="search" action="<?php echo base_url('search'); ?>" method="post"></form>
<section class="sec-padding section-light">
		<div class="container-fluid">    
            <div class="container">
            <?php if(! empty($__post)){ ?>
				<h3 class="text-center thick"> Search results for...</h3>

                <?php //var_dump($__post); ?>
            <?php } ?>
					<br>	
		
					 <div class="row ">
			
                     <div class="col-md-2">
							<div class="select-box-2 select_text">
									<select id="service_id" onChange="status(this.value)" name="service_id" form="search"  class="form-control select_text ">
                                    <option value="0">Select service</option>
                            <?php 
                            $_categories = $this->db->get('service')->result();
                           
                            foreach($_categories as $category){ ?>
								<option <?php if(! empty($__post) &&  $__post['service_id']  == $category->service_id) echo 'selected';?> value="<?php echo $category->service_id; ?>"><?php echo ucwords($category->service_description); ?></option>
                            <?php } ?>
								</select>
								</div>
						</div>

						<div class="col-md-2">
								<div class="select-box-2 select_text">
									<select onChange="onChangeAircraft(this.value)" name="category_id" form="search" class="form-control select_text ">
								<option value='' >Select Aircraft</option>
                            <?php 
                            $_categories = $this->db->get('category')->result();
                            foreach($_categories as $category){ ?>
								<option <?php if(! empty($__post) &&  $__post['category_id']  == $category->category_id) echo 'selected';?> value="<?php echo $category->category_id; ?>"><?php echo $category->description; ?></option>
                            <?php } ?>
								</select>
								</div>
						</div>
                        <div class="col-md-2">
								<div class="select-box-2">
                                <select onChange="onChangeSubcategory(this.value)" class="form-control" name="sub_category_id" id="sub_category_id" form="search">
								<option >Select  Aircraft first </option>
                                <?php if( ! empty($__post['sub_category_selection'])) {
                                  $this->db->where_in("sub_category_id", $__post['sub_category_selection']); 
                                  foreach($this->db->get('sub_category')->result() as $manufacture){
                               ?>
                                        <option value="<?php echo $manufacture->sub_category_id; ?>"><?php echo str_replace('_', ' ', ucwords($manufacture->sub_category_description)); ?></option>
                                        <?php } ?> 
                                        
                                        <?php } ?>


                               </select>
								</div>
						</div> 
                        <div id="status">
                            <div class="col-md-2">
                                    <div  class="select-box-3">
                                        <select class="form-control" name="sales_type_description"  id="sales_type_id" >
                                        <option value="pre_owned">pre-owned</option>
                                        <option value="new">New</option>
                                    </select>
                                    </div>
                            </div>
                        </div>
						<div class="col-md-2">
								<div class="select-box-2">
                                    <select class="form-control" name="estimated_range" id="range_from" form="search">
                                        <option value="0">Range from 0 KM</option>
                                        <?php if(! empty($__post) and isset($__post['estimated_range']) ){?>
                                            <option value="<?php echo $__post['estimated_range']; ?>" selected><?php echo $__post['estimated_range']; ?> KM</option>
                                        <?php } ?>
                                    </select>
								</div>
						</div>
						
					
						<div class="col-md-1">
								 <button onClick="submitForm(this)" form="search" type="button" class="btn btn-medium btn-blue uppercase search"> Search&nbsp;<i class="fa fa-search" ></i></button>
						</div>
					 </div>
				</div>
					
				<script>

               


                    function submitForm(a){
                        $(document).find('.page-title').html('Search');

                        var $form = $(document).find('form#search');
                        var formData = $form.serialize();
                        $.ajax({
                          url: baseUrl + 'search/submit_form/',
                          method: 'post', 
                          dataType: 'html',
                          data: formData,
                          success: function(response){
                              //alert(response)
                              $('#search-result').html(response);
                                
                                     
                          }
                      });
                        
                     }

                    function onChangeAircraft(categoryId){
                        
                      $.ajax({
                          url: baseUrl + 'search/on_change_aircraft/'+categoryId+ '/'+ $("#service_id").val(),
                          success: function(response){
                              
                              $('#sub_category_id').html(response);
                              rangeFrom(categoryId)    
                                     
                          }
                      }); 
                    }

                    function onChangeSubcategory(subCategoryId){
                      $.ajax({
                          url: baseUrl + 'search/on_change_sub_category/'+subCategoryId,
                          success: function(response){
                             // $('#sales_type_id').html(response);
                        }
                      }); 
                    }

                    function rangeFrom(categoryId){
                        $.ajax({
                            url: baseUrl + 'search/range_from/'+categoryId,
                            success: function(response){
                                //alert(response)
                                $('#range_from').html(response);
                            }
                        });
                    }

                    function status(serviceId){

                        $.ajax({
                            url: baseUrl + 'search/new_and_pre_owned_selection_status/'+serviceId,
                            success: function(response){
                                //alert(response)
                                $('#status').html(response);
                            }
                        });
                    }
                </script>	