<?php

class Service_model extends CI_Model{
	private $table = 'service';
	private $field_id = 'service_id';
	function __construct(){
		parent::__construct();
	}
	
	function find($service_id){
		return !is_null($service_id) ? $this->db->get_where($this->table, array($this->field_id => $service_id))->row() : false;
	}
	function all(){
		return $this->db->get($this->table);
	}
	
	
}