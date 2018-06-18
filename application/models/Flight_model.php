<?php

class Flight_model extends CI_Model{
	private $table    = 'flight';
	function __construct(){
		parent::__construct();
		$this->response = new \stdClass;
		
	}
	
	function find($flight_id){

		$this->db->join('sales_type', 'sales_type.sales_type_id = flight.sales_type_id');
		$this->db->join('manufacture', 'manufacture.manufacture_id = flight.manufacture_id');
		$this->db->join('model', 'model.model_id = flight.model_id');
		$this->db->join('year', 'year.year_id = flight.year_id');
		$this->db->join('sub_category', 'sub_category.sub_category_id = flight.sub_category_id');
		$this->db->join('condition', 'condition.condition_id = flight.condition_id');
		$this->db->join('service', 'flight.service_id = service.service_id');
		
		$this->db->where('flight.flight_id', $flight_id);
		return $this->db->get($this->table)->row();
	}
	function all(){
		$this->db->select('flight.*, service.*, sales_type.*, flight.flight_id, manufacture.manufacture_name as make, model.model_name as model, year.year_name as year, flight.date_added as date'); 
		$this->db->join('manufacture', 'flight.manufacture_id = manufacture.manufacture_id');
		$this->db->join('model', 'model.model_id = flight.model_id');
		$this->db->join('year', 'year.year_id = flight.year_id');
		$this->db->join('category', 'category.category_id = flight.category_id');
		$this->db->join('condition', 'condition.condition_id = flight.condition_id');
		$this->db->join('sub_category', 'sub_category.sub_category_id = flight.sub_category_id');
		$this->db->join('service', 'flight.service_id = service.service_id');
		$this->db->join('sales_type', 'sales_type.sales_type_id = flight.sales_type_id');
		//$this->db->join('status', 'status.status_id = flight.status_id');
		$this->response = $this->db->get('flight');
		//var_dump($this->response);
		return $this->response;
	}
	
}