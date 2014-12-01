<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class M_user_login extends CI_Model {
 
  public function __construct(){
        parent::__construct();
  }

  function login($username, $password)
  {
     $this->db->select('nama,jenis_login');
     $this->db->from('user_unit');
     $this->db->where('username', $username);
     $this->db->where('password', md5($password));
     $this->db->limit(1);

     $query = $this->db->get();

     if($query->num_rows() == 1)
     {
       return $query->result();
     }
     else
     {
       return false;
     }
  }
}