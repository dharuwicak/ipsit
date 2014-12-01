<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Admin_verifyLogin extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model('m_admin_login','login',TRUE);
    }
 
    function index() {
        $this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean|callback_check_database');
 
        if($this->form_validation->run() == FALSE) {
                $this->load->view('admin/v_admin_login');
            } else {
                //Go to private area
                redirect('admin', 'refresh');
            }       
     }
 
     function check_database($password) {
         //Field validation succeeded.  Validate against database
         $username = $this->input->post('username');
         //query the database
         $result = $this->login->login($username, $password);
         if($result) {
             $sess_array = array();
             foreach($result as $row) {
                 //create the session
                 $sess_array = array('nama' => $row->nama);
                 //set session with value from database
                 $this->session->set_userdata('login_sess', $sess_array);
                 }
          return TRUE;
          } else {
              //if form validate false
              $this->form_validation->set_message('check_database', 'Login gagal, silahkan cek User atau Password');
              return FALSE;
          }
      }
}
/* End of file c_verifylogin.php */
/* Location: ./application/controllers/c_verifylogin.php */