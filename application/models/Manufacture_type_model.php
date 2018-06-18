<?php

class Manufacture_type_model extends CI_Model{
	private $table = 'manufacture_type';
	function __construct(){
		parent::__construct();
		$this->response = new \stdClass;
		
	}
	function find($category_id){
		$this->db->where('manufacture_type_id', $category_id);
		return $this->db->get($this->table)->row();
	}
	function all(){
		return $this->db->get($this->table);
	}
	
}