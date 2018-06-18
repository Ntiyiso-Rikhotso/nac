<?php

class Sub_category_model extends CI_Model{
	private $table = 'sub_category';
	function __construct(){
		parent::__construct();
		$this->response = new \stdClass;
		
	}
	function find($category_id){
		$this->db->where('sub_category_id', $category_id);
		return $this->db->get($this->table)->row();
	}
	function all(){
		return $this->db->get($this->table);
	}
	
}