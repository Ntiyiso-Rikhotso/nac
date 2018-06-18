<?php
class Search extends CI_Controller{
	private $views, $page_name, $subdir;
    private $view = 'frontend/';
    private $_content = 'search/';
    private $banner = false;
    private $page_data = null;

	function __construct(){
		parent::__construct();
		$this->views = 'backend/'. strtolower(__class__);
		$this->page_data = new \stdClass;
		//$this->output->enable_profiler(TRUE);
		$this->page_data->banner = $this->banner;
	}
	function index(){
		if( ! empty($this->input->post())){
			$this->db->where('sub_category_id', $this->input->post('sub_category_id'));
			$this->page_data->categories        = $this->sub_category->all()->result();
			$__post 							= $this->input->post();
			$this->page_data->__post         	= $__post;
			$this->page_data->page_name         = $this->_content . 'listing/categories';
			$this->page_data->page_title 		= 'Search';
			$this->load->view($this->view . '/index', $this->page_data);
		}else{
			show_404();
		}
	}
	function phrase(){
		$phrase = $this->input->post('phrase');
		$this->db->like('manufacture_name', $phrase);    
		//$this->db->or_like('model.model_name', $phrase);     
		//$this->db->or_like('service.description', $phrase, 'both');
		//$this->db->or_like('manufacture_category.manufacture_category_name', $phrase, 'both');
		//$this->db->join('model', 'model.manufacture_id = manufacture.manufacture_id');
		//$this->db->join('flight', 'flight.manufacture_id = manufacture.manufacture_id');
		
		$this->db->select('*');
		//$this->db->from('offers as o');
		//$this->db->join('location as l', 'l.id = o.id', 'left');
		$this->db->join('model', 'model.manufacture_id = manufacture.manufacture_id');
		//$this->db->where('d.guests', $guests);
		//$this->db->where('o.completed', 1);
		//$this->db->where("(manufacture.manufacture_name LIKE '".$phrase."%' or model.model_name LIKE '".$phrase."%')");
		$this->db->limit(5);

		$this->search_results($this->db->get('manufacture'));	

	}
	function search_results($results) {
        $this->page_data->page_title = ucwords(str_replace('_', ' ', __function__));
		$this->page_data->page_name = $this->_content . 'ajax/'.  __function__;
		$this->page_data->results = $results;
        $this->load->view($this->view . '/index', $this->page_data);
	}
	
	function on_change_aircraft($category_id = '', $service_id = ''){
		if( $category_id != ''){
			$page_data['category_id'] 	= $category_id;
			$page_data['service_id'] 	= $service_id;
			$this->load->view('frontend/search/ajax/on_change_aircraft', $page_data);
		}
		

	}

	function range_from($category_id = ''){
		if( $category_id != ''){
			$page_data['category_id'] = $category_id;
			$this->load->view('frontend/search/ajax/range_from', $page_data);
		}
	}

	function submit_form(){
		if( ! empty($this->input->post())){
			$this->db->where('sub_category_id', $this->input->post('sub_category_id'));
			$this->page_data->categories        = $this->sub_category->all()->result();
			$__post 							= $this->input->post();
			$this->page_data->__post         	= $__post;
			$this->page_data->page_name         = $this->_content . 'listing/categories';
			$this->page_data->page_title 		= 'Search';
			$this->load->view('frontend/search/listing/categories', $this->page_data);
		}
        
	}

	function new_and_pre_owned_selection_status($service_id){
		$page_data['status'] = '';
		if($service_id > 0 && $this->db->get_where('service', array('service_id' =>$service_id))->row()->service_description == 'charter'){
			$page_data['status'] = 'hidden';
		}

		$this->load->view('frontend/search/new_and_pre_owned_selection_status', $page_data);
	}
}