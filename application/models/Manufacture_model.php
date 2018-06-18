<?php

class Manufacture_model extends CI_Model{
	private $table = 'manufacture';
	function __construct(){
		parent::__construct();
	}
	
	function find($manufacture_id){
		return !is_null($manufacture_id) ? $this->db->get_where($this->table, array('manufacture_id' => $manufacture_id))->row() : false;
	}
	function all(){
		return $this->db->get($this->table);
	}
	
	
}