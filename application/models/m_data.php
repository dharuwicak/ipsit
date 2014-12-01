<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_upload extends CI_Model {
 
    public function show($table){
	  $this->db->select('*');
	  $data = $this->db->get($table);
	  	if($data->num_rows() > 0){
	  		return $data->result_array();
 		}else{
 			return false;
 		}
 	}
 
 	public function insert($data,$table){
 		$this->db->insert($table, $data);
 	}
 
}