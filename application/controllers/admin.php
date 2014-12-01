<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Admin extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('m_upload','upload_crud',TRUE);
        $session_data = $this->session->userdata('login_sess');
        $this->data['username'] = $session_data['nama'];
    }
 
    function index() {
        $this->check_session();
    }
    function check_session(){
        if($this->session->userdata('login_sess'))
        {
            $session_data = $this->session->userdata('login_sess');
            $data['username'] = $session_data['nama'];
            //page
            $this->load->view('admin/template/admin_header');
            $this->load->view('admin/template/admin_menu', $data);
            $this->load->view('admin/content_home', $data);
            $this->load->view('admin/template/admin_footer');

        }
        else 
        {
            redirect('admin_login', 'refresh');
        }
    }
    function page($page)
    {
        redirect('admin/'.$page, 'refresh');
    }

    //PAGE inventory procedure
    function inv_pro()
    {
        if($this->session->userdata('login_sess')){
            $this->view();
        } else {
            redirect('admin_login', 'refresh');
        }
    }

    function logout(){
       $this->session->unset_userdata('login_sess');
       $this->session->sess_destroy();
       redirect('admin', 'refresh');
    }

    public function upload_file()
    {
        $config['upload_path'] = './assets/files/'; //lokasi folder yang akan digunakan untuk menyimpan file
        $config['allowed_types'] = 'pdf'; //extension yang diperbolehkan untuk diupload
        $config['file_name'] = url_title($this->input->post('file_upload'));
 
        $this->upload->initialize($config); //meng set config yang sudah di atur
        if( !$this->upload->do_upload('file_upload'))
        {
 
            echo $this->upload->display_errors();
        }
        else {
            $data = array(
                'title'       => $this->input->post('title'),
                'filenames'   => $this->upload->file_name,
                'category'    => $this->input->post('title'),
                'date'        => date('d-m-Y')
                );
            $this->upload_crud->insert($data,'files');
            $this->view();
        }
 
    }

    public function view()
    {
        $data['files'] = $this->upload_crud->show('files');
        $this->load->view('admin/template/admin_header');
        $this->load->view('admin/template/admin_menu', $this->data);
        $this->load->view('admin/upload_files',$data);
        $this->load->view('admin/template/admin_footer');
    }
}
/* End of file c_home.php */
/* Location: ./application/controllers/c_home.php */