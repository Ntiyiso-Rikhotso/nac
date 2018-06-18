<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Helicopter extends CI_Controller {
    private $views, $page_name, $subdir;
    private $view = 'frontend/';
    private $_content = 'helicopter/';
    private $banner = false;
    private $page_data = null;
    function __construct() {
        parent::__construct();
        $this->views = 'frontend/' . strtolower(__class__);
        $this->page_data = new \stdClass;
        $this->page_data->banner = $this->banner;
        //$this->output->enable_profiler(true);
    }
    function index($index = 'pre_owned', $manufacture_type = null, $manufacture_name = null) {
        $this->output->cache(5);
        $this->page_data->page_title = 'Helicopter Sales';
        //var_dump($manufacture_type);
        
        //$this->db->or_where('sub_category_description', 'turbine'); 
        //$this->db->or_where('sub_category_description', 'piston');
        $this->page_data->categories        = $this->sub_category->all()->result();
        $this->page_data->filter            = $index == 'new' ? 'new' : 'pre_owned';
        $this->page_data->manufacture_type  = 'distributor';
        $this->page_data->secondary_title  = str_replace('_', '-', ucwords($this->page_data->filter)) .' '. ucwords(__class__) . 's For Sale';
        $this->page_data->manufacture_name  = ($manufacture_name != null) ? $manufacture_name :  null;
        $this->page_data->page_name         = $this->_content . 'listing/categories';
        $this->load->view($this->view . '/index', $this->page_data);
    }
    function details($name = '', $flight_id) {
        $this->output->cache(5);
        $this->page_data->page_name = $this->_content . 'details/details';
        $this->page_data->flight = $this->flight->find($flight_id);
        $this->page_data->secondary_title  = str_replace('_', '-', ucwords($this->page_data->flight->sales_type_description)) .' '. ucwords(__class__) . 's For Sale';
        $this->page_data->page_title = $this->page_data->flight->manufacture_name . ' - ' . $this->page_data->flight->model_name . ' details';
        $this->load->view($this->view . '/index', $this->page_data);
    }
    /*
     * 	Ajax function
    */
    function get_models_after_select() {
        //$this->output->cache(5);
        $manufactures = $this->input->post('manufacture_id');
        if (!empty($manufactures)) {
            $this->db->where_in('manufacture_id', $manufactures);
        } else {
            $this->db->where('manufacture_id', 0); //dummy
            
        }
        $this->page_data->models = $this->model->all();
        $this->load->view($this->views . '/ajax/get_models', $this->page_data);
    }
}
