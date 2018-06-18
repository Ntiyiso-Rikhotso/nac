<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	private $views,
            $page_name,	
			$subdir;
			
	function __construct(){
		parent::__construct();
		$this->views = 'backend/'. strtolower(__class__);
		$this->page_data = new \stdClass;
		//$this->output->enable_profiler(TRUE);
	}
	function index(){
		$this->page_data->page_title = 'Dashboard';
		$this->page_data->page_name = 'dashboard/dashboard';
		$this->load->view($this->views . '/index', $this->page_data);

		
	}
	
	function create_item(){
		$data =  array();
		if( ! empty($this->input->post()) ){
			//VAR_DUMP($this->input->post());
			$fields = $this->db->list_fields('flight');
			foreach($fields as $field){
				if($this->input->post($field) != null){
					$data[$field] = $this->input->post($field);
				}
			}
			$data['date_added'] = now();
			$data['date_updated'] = now();
			$this->db->insert('flight', $data);
			
			$flight_id = $this->db->insert_id(); 
			
			$images = array('interior', 'exterior', 'views');
			foreach($images as $image){
				if(isset($_FILES[$image])){
					$file_ext      = explode('.', $_FILES[$image]['name']);
					$file_ext = strtolower(end($file_ext));
					move_uploaded_file($_FILES[$image]['tmp_name'], 'assets/shared/images/aircraft/'.$image.'/'. $flight_id .'.jpg' );
					$this->image_crop($image, $flight_id);
				}
			}
			redirect(base_url('admin/aircrafts/all')); 
		}else{
			$this->page_data->page_name = 'sales/create_item';
			$this->page_data->page_title = 'Create Item';
			$this->load->view($this->views . '/index', $this->page_data);
		}
	}
	
	function aircrafts($param1 = 'all', $param2 = ''){
		if($param1 == 'all'){
			$this->page_data->page_title = 'Aircraft list';
			$this->page_data->page_name = 'sales/aircrafts';
			$this->page_data->aircrafts = $this->flight->all();
			$this->load->view($this->views . '/index', $this->page_data);
		}else if($param1 == 'edit'){
			$this->page_data->page_name = 'sales/update_item';
			$this->page_data->page_title = 'Update aircraft infomation';
			$this->page_data->aircraft_info = $this->flight->find($param2);
			//var_dump($this->page_data->aircraft_info);
			$this->load->view($this->views . '/index', $this->page_data);
		}else if($param1 == 'delete'){
			$this->db->where('flight_id', $param2);
			$this->db->delete('flight');
			redirect(base_url('admin/aircrafts/all')); 
		}else if($param1 == 'do_update'){
			$this->db->where('flight_id', $this->input->post('flight_id'));
			$fields = $this->db->list_fields('flight');
			foreach($fields as $field){
				if($this->input->post($field) != null){
					$data[$field] = $this->input->post($field);
				}
			}
			$images = array('interior', 'exterior', 'views');
			foreach($images as $image){
				if(null == $this->input->post($images.'_image_update'))continue;
				$this->image_crop($image, $this->input->post('flight_id'));
			}
			
			$data['date_updated'] = now();
			$this->db->update('flight', $data);
			
			redirect(base_url('admin/aircrafts/all')); 
		}else if($param1 == 'hide'){
			
		}
	}

	function service($type){
		$this->page_data->page_title = ucwords($type) . ' flights';
		$this->page_data->page_name = $type . '/' . $type;
		$this->db->order_by('sales_type.sales_type_description DESC');
		$this->db->where('service.service_description', $type);
		$this->page_data->aircrafts = $this->flight->all();
		$this->load->view($this->views . '/index', $this->page_data);
	}

	function image_crop($image_type, $flight_id){
		$targ_w = $targ_h = 150;
		$jpeg_quality = 90;

		$src = base_url('assets/shared/images/aircraft/'.strtolower($image_type).'/'.$flight_id. '.jpg');
		$img_r = imagecreatefromjpeg($src);
		$dst_r = ImageCreateTrueColor( $targ_w, $targ_h );

		imagecopyresampled($dst_r,$img_r,0,0,$_POST['x'],$_POST['y'],
		$targ_w,$targ_h,$_POST['w'],$_POST['h']);

		header('Content-type: image/jpeg');
		imagejpeg($dst_r,null,$jpeg_quality);
	}
	
	function get_models($manufacture_id){
		$this->db->where('manufacture_id', $manufacture_id);
		$this->page_data->models = $this->model->all();
		$this->load->view($this->views . '/sales/get_models', $this->page_data);
	}

	function news($action = 'list'){
		if($action == 'create'){
			$data = $this->input->post();
			$this->db->insert('news', $data);
			
		}
	}
	
	
}
