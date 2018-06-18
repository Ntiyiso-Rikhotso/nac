<?php

class Condition_model extends CI_Model{
	private $table = 'condition';
	private $field_id = 'condition_id';
	function __construct(){
		parent::__construct();
	}
	
	function find($condition_id){
		return !is_null($model_id) ? $this->db->get_where($this->table, array($this->field_id => $condition_id))->row() : false;
	}
	function all(){
		return $this->db->get($this->table);
	}
	
	
}