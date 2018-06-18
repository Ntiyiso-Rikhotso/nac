<?php if($models->num_rows() > 0){?>
	<?php foreach($models->result() as $model){?>
			<li class="form-controll">
				<input type="checkbox" value="<?php echo $model->model_id; ?>"/>&nbsp; <?php echo $model->model_name; ?>
			</li>
	<?php } ?>
<?php }?>
