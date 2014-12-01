<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class M_admin_login extends CI_Model {
 
  public function __construct(){
        parent::__construct();
  }

  function login($username, $password)
  {
     $this->db->select('nama');
     $this->db->from('usr_adm');
     $this->db->where('user', $username);
     $this->db->where('pass', md5($password));
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