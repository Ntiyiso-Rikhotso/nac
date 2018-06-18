<?php

class Year_model extends CI_Model{
	private $table = 'year';
	private $field_id = 'year_id';
	function __construct(){
		parent::__construct();
	}
	
	function find($year_id){
		return !is_null($model_id) ? $this->db->get_where($this->table, array($this->field_id => $year_id))->row() : false;
	}
	function all(){
		return $this->db->get($this->table);
	}
	
	
}