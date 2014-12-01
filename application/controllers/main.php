<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {

	function __construct()
	{
		parent::__construct();
	}

	function index()
	{
		$sess = $this->session->userdata('login_sess_user');
		$data['nama'] = $sess['nama'];
        $data['jenis_login'] = $sess['jenis_login'];

        if($data['jenis_login'] == 'rendal_har') {
            redirect('user_rendalhar', 'refresh');
        } if ($data['jenis_login'] == 'rendal_op') {
            redirect('user_rendalop', 'refresh');
        } else {
            $this->load->view('page/v_main');
        }
	}

	function logout(){
       $this->session->unset_userdata('login_sess_user');
       $this->session->sess_destroy();
       redirect('main', 'refresh');
    }
}

/* End of file main.php */
/* Location: ./application/controllers/main.php */