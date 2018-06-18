
<?php 

foreach($models->result() as $model){ ?>
	<option value="<?php echo $model->model_id;?>"><?php echo ucwords($model->model_name);?></option>
<?php } ?>