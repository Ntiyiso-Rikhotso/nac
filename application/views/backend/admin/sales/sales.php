 <div class="row">
        <!--col-md-12 start-->
          <div class="col-md-12">
            <div class="box-info">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>&nbsp;</th>
                    <th>Make</th>
                    <th>Model</th>
                    <th>Year</th>
					<th>Date added</th>
					<th>Interior Image</th>
					<th>Exterior Image</th>
					<th>Other Images</th>
					<th align="center">Action</th>
                  </tr>
                </thead>
                <tbody>
				<?php $i = 1;?>
                <?php foreach($aircrafts->result() as $aircraft){ ?>  
                <tr <?php if($aircraft->sales_type_description == 'pre_owned'){ ?> class="success" <?php } ?>>
            <td><?php echo $i++; ?></td>
                      <td><?php echo $aircraft->make; ?></td>
                      <td><?php echo $aircraft->model; ?></td>
                      <td><?php echo $aircraft->year; ?></td>
                      <td><?php echo date('d F Y @H:i', $aircraft->date); ?></td>
            <td><?php echo count(glob('assets/shared/images/aircraft/interior/'. $aircraft->flight_id . ".*")); ?></td>
            <td><?php echo count(glob('assets/shared/images/aircraft/exterior/'. $aircraft->flight_id . ".*")); ?></td>
            <?php $dir = 'assets/shared/images/aircraft/views/'.$aircraft->flight_id; ?>
            <td><?php echo is_dir($dir) ? count(scandir($dir)): 0; ?> Images</td>
            <td align="center">
              
              <div class="btn-group btn-group-justifiedc"> <a href="<?php echo base_url('admin/aircrafts/edit/'.$aircraft->flight_id . '/');?>" class="btn btn-success">Edit</a> <a href="<?php echo base_url('admin/aircrafts/edit/'.$aircraft->flight_id . '/');?>" class="btn btn-info">Hide</a> <a href="<?php echo base_url('admin/aircrafts/delete/'.$aircraft->flight_id . '/');?>" class="btn btn-danger">Delete</a> </div>
            </td>
          </tr>
                <?php } ?>  
                </tbody>
              </table>
			  <br>
			  <br>
			  <br>
			  <br>
			  <br>
			  <br>
            </div>
          </div><!--col-md-12 end-->
        </div><!--row end-->
       
       