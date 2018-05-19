<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
	parent::__construct();
	$this->load->model('user');
	$this->load->helper('url','form');
	$this->load->library('form_validation');
	}

	public function index()
	{	
		$this->load->view('login/login_view');
	}

	public function cekLogin()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('username', 'Username','trim|required');
		$this->form_validation->set_rules('password', 'Password','trim|required|callback_cekDb');
			if($this->form_validation->run() == FALSE) {
				$this->load->view('login/login_view');
			}else {
				redirect('apotik','refresh');
			}
	}

	public function cekDb($password)
	{
		$this->load->model('user');
		$username= $this->input->post('username');
		$result= $this->user->login($username,$password);
		if ($result) {
			# code...
			$sess_array = array();
			foreach ($result as $row) {
				$sess_array = array(
					'idPgw'=>$row->idPgw,
					'username'=>$row->username
					);
				$this->session->set_userdata('logged_in',$sess_array);
			}
			return true;
		}else{
			$this->form_validation->set_message('cekDb',"Login gagal Username dan Password tidak valid" );
			return false;
		}
	}


	public function logout()
	{
		$this->session->unset_userdata('logged_in');
		$this->session->sess_destroy();
		redirect('login','refresh');	
	}



}

/* End of file login.php */
/* Location: ./application/controllers/login.php */