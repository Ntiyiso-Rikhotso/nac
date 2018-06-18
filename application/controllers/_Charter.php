<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Charter extends CI_Controller {
	private $views,
            $page_name, $subdir;
    private $view = 'frontend/';
    private $_content = 'charter/';
    private $banner = false;
    private $page_data = null;
			
	function __construct(){
		parent::__construct();
		$this->views = 'frontend/'. strtolower(__class__);
		$this->page_data = new \stdClass;
		//$this->output->enable_profiler(TRUE);
		
        $this->page_data = new \stdClass;
        $this->page_data->banner = $this->banner;
	}
	function __index(){ 
		$this->output->cache(5);
		
		$this->page_data->page_name  		=	'listing/categories';
		$this->db->where('category_name', 'aircraft');
		$this->page_data->categories 		= $this->category->all()->result();
		$this->load->view($this->views . '/index', $this->page_data);
	}
	
	function index($index = 'pre_owned', $manufacture_type = null, $manufacture_name = null) {
		$this->output->cache(5);
        $this->page_data->page_title = ucwords(__class__) . ' Aircraft';;
        //var_dump($manufacture_type);
        
		$this->db->where('sub_category_description', 'large_passenger_transport');
		$this->db->or_where('sub_category_description', 'regional_airliner');
		$this->db->or_where('sub_category_description', 'super_midsize_jets');
		$this->db->or_where('sub_category_description', 'midsize_jets');
		$this->db->or_where('sub_category_description', 'twin_turbine_aircraf');
		$this->db->or_where('sub_category_description', 'single_turbine_aircraft');
		$this->db->or_where('sub_category_description', 'twin_piston_aircraft');
        $this->page_data->categories        = $this->sub_category->all()->result();
		$this->page_data->filter            = $index == 'new' ? 'new' : 'pre_owned';
		$this->page_data->secondary_title  =  ucwords(__class__) . ' Aircraft';
        $this->page_data->manufacture_type  = ($manufacture_type == 'distributor' || $manufacture_type == 'partnerships' ) ? $manufacture_type :  null;
        $this->page_data->manufacture_name  = ($manufacture_name != null) ? $manufacture_name :  null;
        $this->page_data->page_name         = 'listing/categories';
        $this->load->view($this->views . '/index', $this->page_data);
	}
	
	function home(){ 
		$this->output->cache(5);
		$this->page_data->page_name  		=	'listing/categories';
		$this->page_data->categories 		= $this->category->all()->result();
		$this->load->view( 'frontend/index', $this->page_data);
	}
	
	function details($name = '', $flight_id){
		$this->output->cache(5);
		$this->page_data->page_name 		=	__function__ .'/details';
		
		$this->page_data->flight 			= $this->flight->find($flight_id);
		$this->page_data->secondary_title  =  ucwords(__class__) . ' Aircraft';
		$this->page_data->page_title 		=	$this->page_data->secondary_title;
		$this->load->view($this->views . '/index', $this->page_data);
	}
	function get_models_after_select(){
		$this->output->cache(5);
		$manufactures = $this->input->post('manufacture_id');
		if(! empty($manufactures)){
			$this->db->where_in('manufacture_id', $manufactures);
		}else{
			$this->db->where('manufacture_id', 0);//dummy
		}
		$this->page_data->models 			= $this->model->all();
		$this->load->view($this->views . '/ajax/get_models', $this->page_data);
	}
	
	function aircraft_charter_fleet() {
		$this->output->cache(5);
        $this->page_data->page_title = ucwords(str_replace('_', ' ', __function__));
        $this->page_data->page_name = $this->_content . __function__;
        $this->load->view($this->view . '/index', $this->page_data);
    }
}
