<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Home extends CI_Controller {
    private $views, $page_name, $subdir;
    private $view = 'frontend/';
    private $_content = 'home/';
    private $banner = false;
    private $page_data = null;
    function __construct() {
        parent::__construct();
        $this->page_data = new \stdClass;
        $this->page_data->banner = $this->banner;
    }
    function index() {
        //$this->output->cache(5);
        $this->page_data->page_title = 'NAC Home';
        $this->page_data->banner = true;
        $this->page_data->page_name = $this->_content . __function__;
        $this->page_data->categories = $this->category->all()->result();
        $this->load->view($this->view . '/index', $this->page_data);
    }
    function executive_team() {
        $this->output->cache(5);
        $this->page_data->page_title = ucwords(str_replace('_', ' ', __function__));
        $this->page_data->page_name = $this->_content . __function__;
        $this->load->view($this->view . '/index', $this->page_data);
    }
    function news() {
        $this->output->cache(5);
        $this->page_data->page_title = ucwords(str_replace('_', ' ', __function__));
        $this->page_data->page_name = $this->_content . __function__;
        $this->load->view($this->view . '/index', $this->page_data);
    }
    function hangar_talk() {
        $this->output->cache(5);
        $this->page_data->page_title = ucwords(str_replace('_', ' ', __function__));
        $this->page_data->page_name = $this->_content . __function__;
        $this->load->view($this->view . '/index', $this->page_data);
    }
    function air_show_event() {
        $this->output->cache(5);
        $this->page_data->page_title = ucwords(str_replace('_', ' ', __function__));
        $this->page_data->page_name = $this->_content . __function__;
        $this->load->view($this->view . '/index', $this->page_data);
    }
    function contact_us() {
       // $this->output->cache(5);
        $this->page_data->contact_us = true;
        $this->page_data->page_title = ucwords(str_replace('_', ' ', __function__));
        $this->page_data->page_name = $this->_content . __function__;
        $this->load->view($this->view . '/index', $this->page_data);
    }
    function awesome_air_evac() {
        $this->output->cache(5);
        $this->page_data->page_title = ucwords(str_replace('_', ' ', __function__));
        $this->page_data->page_name = $this->_content . __function__;
        $this->load->view($this->view . '/index', $this->page_data);
    }
    function flyawesome() {
        $this->output->cache(5);
        $this->page_data->page_title = ucwords(str_replace('_', ' ', __function__));
        $this->page_data->page_name = $this->_content . __function__;
        $this->load->view($this->view . '/index', $this->page_data);
    }
    function aircraft_leasing() {
        $this->output->cache(5);
        $this->page_data->page_title = ucwords(str_replace('_', ' ', __function__));
        $this->page_data->page_name = $this->_content . __function__;
        $this->load->view($this->view . '/index', $this->page_data);
    }
    function flyawesome_technical_training() {
        $this->output->cache(5);
        $this->page_data->page_title = ucwords(str_replace('_', ' ', __function__));
        $this->page_data->page_name = $this->_content . __function__;
        $this->load->view($this->view . '/index', $this->page_data);
    }
	function aircraft_wanted() {
        $this->output->cache(5);
        $this->page_data->page_title = ucwords(str_replace('_', ' ', __function__));
        $this->page_data->page_name = $this->_content . __function__;
        $this->load->view($this->view . '/index', $this->page_data);
    }
	function career() {
        $this->output->cache(5);
        $this->page_data->page_title = ucwords(str_replace('_', ' ', __function__));
        $this->page_data->page_name = $this->_content . __function__;
        $this->load->view($this->view . '/index', $this->page_data);
    }
	function news_letter() {
       // $this->output->cache(5);
        $this->page_data->page_title = ucwords(str_replace('_', ' ', __function__));
        $this->page_data->page_name = $this->_content . __function__;
        $this->load->view($this->view . '/index', $this->page_data);
    }
	
	
	function aircraft_maintenance() {
        $this->output->cache(5);
        $this->page_data->page_title = ucwords(str_replace('_', ' ', __function__));
        $this->page_data->page_name = $this->_content . __function__;
        $this->load->view($this->view . '/index', $this->page_data);
    }
	function aircraft_sales() {
        $this->output->cache(5);
        $this->page_data->page_title = ucwords(str_replace('_', ' ', __function__));
        $this->page_data->page_name = $this->_content . __function__;
        $this->load->view($this->view . '/index', $this->page_data);
    }

    
	
	
	function arrival_forms() {
        $this->output->cache(5);
        $this->page_data->page_title = ucwords(str_replace('_', ' ', __function__));
        $this->page_data->page_name = $this->_content . __function__;
        $this->load->view($this->view . '/index', $this->page_data);
    }
	
	function search_results() {
        $this->output->cache(5);
        $this->page_data->page_title = ucwords(str_replace('_', ' ', __function__));
        $this->page_data->page_name = $this->_content . __function__;
        $this->load->view($this->view . '/index', $this->page_data);
    }
	function sell_your_aircraft() {
        $this->page_data->page_title = ucwords(str_replace('_', ' ', __function__));
        $this->page_data->page_name = $this->_content . __function__;
        $this->load->view($this->view . '/index', $this->page_data);
    }
	function specialized_aircraft_services() {
        $this->page_data->page_title = ucwords(str_replace('_', ' ', __function__));
        $this->page_data->page_name = $this->_content . __function__;
        $this->load->view($this->view . '/index', $this->page_data);
    }
	function parts() {
        $this->page_data->page_title = ucwords(str_replace('_', ' ', __function__));
        $this->page_data->page_name = $this->_content . __function__;
        $this->load->view($this->view . '/index', $this->page_data);
    }
	
	function helicopter_charter_services() {
        $this->page_data->page_title = ucwords(str_replace('_', ' ', __function__));
        $this->page_data->page_name = $this->_content . __function__;
        $this->load->view($this->view . '/index', $this->page_data);
    }
	function helicopter_distributors() {
        $this->page_data->page_title = ucwords(str_replace('_', ' ', __function__));
        $this->page_data->page_name = $this->_content . __function__;
        $this->load->view($this->view . '/index', $this->page_data);
    }
	function helicopter_maintenance() {
        $this->page_data->page_title = ucwords(str_replace('_', ' ', __function__));
        $this->page_data->page_name = $this->_content . __function__;
        $this->load->view($this->view . '/index', $this->page_data);
    }
	function helicopter_sales() {
        $this->page_data->page_title = ucwords(str_replace('_', ' ', __function__));
        $this->page_data->page_name = $this->_content . __function__;
        $this->load->view($this->view . '/index', $this->page_data);
    }
	function helicopter_tours() {
        $this->page_data->page_title = ucwords(str_replace('_', ' ', __function__));
        $this->page_data->page_name = $this->_content . __function__;
        $this->load->view($this->view . '/index', $this->page_data);
    }
	function helicopter_training() {
        $this->page_data->page_title = ucwords(str_replace('_', ' ', __function__));
        $this->page_data->page_name = $this->_content . __function__;
        $this->load->view($this->view . '/index', $this->page_data);
    }
	function helicopter_wanted() {
        $this->page_data->page_title = ucwords(str_replace('_', ' ', __function__));
        $this->page_data->page_name = $this->_content . __function__;
        $this->load->view($this->view . '/index', $this->page_data);
    }
	function helicopters_cape_town() {
        $this->page_data->page_title = ucwords(str_replace('_', ' ', __function__));
        $this->page_data->page_name = $this->_content . __function__;
        $this->load->view($this->view . '/index', $this->page_data);
    }
	function under_construction() {
        $this->page_data->page_title = ucwords(str_replace('_', ' ', __function__));
        $this->page_data->page_name = $this->_content . __function__;
        $this->load->view($this->view . '/index', $this->page_data);
    }
	function fbo() {
        $this->page_data->page_title = strtoupper((str_replace('_', ' ', __function__)));
        $this->page_data->page_name = $this->_content . __function__;
        $this->load->view($this->view . '/index', $this->page_data);
    }
	function request_proporsal() {
        $this->page_data->page_title = ucwords(str_replace('_', ' ', __function__));
        $this->page_data->page_name = $this->_content . __function__;
        $this->load->view($this->view . '/index', $this->page_data);
    }
	function aircraft_charter() {
        $this->page_data->page_title = ucwords(str_replace('_', ' ', __function__));
        $this->page_data->page_name = $this->_content . __function__;
        $this->load->view($this->view . '/index', $this->page_data);
    }
		function air_school() {
        $this->page_data->page_title = ucwords(str_replace('_', ' ', __function__));
        $this->page_data->page_name = $this->_content . __function__;
        $this->load->view($this->view . '/index', $this->page_data);
    }
	function sell_your_helicopter() {
        $this->page_data->page_title = ucwords(str_replace('_', ' ', __function__));
        $this->page_data->page_name = $this->_content . __function__;
        $this->load->view($this->view . '/index', $this->page_data);
    }
	function helicopter_pilot_training() {
        $this->page_data->page_title = ucwords(str_replace('_', ' ', __function__));
        $this->page_data->page_name = $this->_content . __function__;
        $this->load->view($this->view . '/index', $this->page_data);
    }
	function gallery() {
        $this->page_data->page_title = ucwords(str_replace('_', ' ', __function__));
        $this->page_data->page_name = $this->_content . __function__;
        $this->load->view($this->view . '/index', $this->page_data);
    }
	function portal() {
        $this->page_data->page_title = ucwords(str_replace('_', ' ', __function__));
        $this->page_data->page_name = $this->_content . __function__;
        $this->load->view($this->view . '/index', $this->page_data);
    }
		function about_us() {
        $this->page_data->page_title = ucwords(str_replace('_', ' ', __function__));
        $this->page_data->page_name = $this->_content . __function__;
        $this->load->view($this->view . '/index', $this->page_data);
    }

    function talk_to_us(){
        if( ! empty($this->input->post())){
            $this->load->library('email'); //load email class
            $form_name = null != $this->input->post('form_name') ? strtolower(str_replace('-', '_', $this->input->post('form_name'))) : ''; //form name
            if($form_name != ''){ //contact us
                $form_data['_post'] = $this->input->post();
                $this->email->message($this->load->view('mail/email', $form_data, true));
                $this->email->from('test@tester', 'name');
                $this->email->to('truminnd@gmail.com, hugolutete@gmail.com');
                $this->email->subject('Website Form');
                $this->email->set_mailtype("html");
                if($this->email->send()){
                    echo '<p>Message sent!</p>';
                } 
            }
        }


        

        


        
       
        
        
        
        



    }
}
