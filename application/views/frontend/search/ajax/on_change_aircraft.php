                        <?php 
                       //$this->db->where('sub_category.category_id', $category_id);
                       $this->db->where('sub_category.category_id', $category_id);
                       $this->db->where('flight.service_id', $service_id);
                        $this->db->join('flight', 'flight.sub_category_id = sub_category.sub_category_id', 'left');
                        $manufactures = $this->db->get('sub_category')->result();
                            foreach($manufactures as $manufacture){ 
                                $array[] = $manufacture->sub_category_id;
                            } 
                            $array = array_unique($array);

                            $this->db->where_in('sub_category_id', $array);
                            $manufactures = $this->db->get('sub_category');
                            ?>

                            
                              
                            <?php
                           
                          
                            foreach($manufactures->result() as $manufacture){ ?>

                                <input hidden form="search"  name='sub_category_selection[]' value="<?php echo $manufacture->sub_category_id; ?>">
								<option value="<?php echo $manufacture->sub_category_id; ?>"><?php echo str_replace('_', ' ', ucwords($manufacture->sub_category_description)); ?></option>
                            <?php } 
                            
                            
                            ?>