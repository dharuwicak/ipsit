<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_login extends CI_Controller {

	function __construct()
	{
		parent::__construct();
	}

	function index() {
        if($this->session->userdata('login_sess'))
        {
            redirect('admin', 'refresh');
        }
        else 
        {
            $this->load->view('admin/v_admin_login');
        }
    }
  
}