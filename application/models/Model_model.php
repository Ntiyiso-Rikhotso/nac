<?php

class Model_model extends CI_Model{
	private $table = 'model';
	function __construct(){
		parent::__construct();
	}
	
	function find($model_id){
		return !is_null($model_id) ? $this->db->get_where($this->table, array('model_id' => $model_id))->row() : false;
	}
	function all(){
		return $this->db->get($this->table);
	}
	
	
}