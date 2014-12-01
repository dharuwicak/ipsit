<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_rendalop extends CI_Controller {

	function __construct()
	{
		parent::__construct();
	}

	function index()
	{
			$sess = $this->session->userdata('login_sess_user');
			$data['nama'] = $sess['nama'];
        	$data['jenis_login'] = $sess['jenis_login'];

			if($this->session->userdata('login_sess_user')) {
				$this->load->view('page/template/user_header', $data);
	            $this->load->view('page/v_rendalop');
	            $this->load->view('page/template/user_footer');
	        } else {
	        	redirect('main', 'refresh');
	        }
	}
}