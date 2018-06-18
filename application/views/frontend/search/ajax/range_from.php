<option value="0">0 KM</option>
<?php 
    //$this->db->select('flight.range_from');
    $this->db->where('flight.category_id', $category_id);
    $this->db->where('sales_type.sales_type_description', 'pre_owned');
    $this->db->order_by('flight.estimated_range ASC');
    $sales_types = $this->flight->all()->result();
    //var_dump($sales_types);
        foreach($sales_types as $sales_type){ 
            if($sales_type->estimated_range == "")continue;
            ?>
            <option value="<?php echo $sales_type->estimated_range; ?>"><?php echo str_replace('_', ' ', ucwords($sales_type->estimated_range)); ?> KM</option>
<?php } ?>