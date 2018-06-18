<?php

class Aircraft_model extends CI_Model{
	private $table    = 'flight';
	function __construct(){
		parent::__construct();
		$this->response = new \stdClass;
		
	}
	
	function find($flight_id){
		$this->db->join('manufacture', 'manufacture.manufacture_id = flight.manufacture_id');
		$this->db->join('model', 'model.model_id = flight.model_id');
		$this->db->join('year', 'year.year_id = flight.year_id');
		$this->db->join('category', 'category.category_id = flight.category_id');
		$this->db->join('condition', 'condition.condition_id = flight.condition_id');
		$this->db->join('status', 'status.status_id = flight.status_id');
		
		$this->db->where('flight.flight_id', $flight_id);
		return $this->db->get($this->table)->row();
	}
	function all(){
		$this->db->join('manufacture', 'flight.manufacture_id = manufacture.manufacture_id');
		$this->db->join('model', 'model.model_id = flight.model_id');
		$this->response = $this->db->get('flight');
		return $this->response;
	}
	
}