<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller 
{

	public function __construct()
	{	
		parent::__construct();
		$this->load->library('form_validation','session');
	}

	function index() 
	{
            if($this->session->userdata("is_login") == "true" ){
                        redirect('main','refresh');  
            } else {
		$this->form_validation->set_rules("nm_user","Nama User","required|callback_cek_user");
		$this->form_validation->set_rules("pass_user","Password User","required|callback_cek_pass");
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('v_login');
		} else{
			$nm_user = $this->input->post("nm_user");
			$pass_user = $this->input->post("pass_user");
			$cek_login = $this->m_user->get_login(array("user_username"=>$nm_user,"user_pass"=>md5($pass_user)), TRUE);
			$this->session->set_userdata(array("id_user"=>$cek_login['user_id'],"nm_user"=>$cek_login['user_username'],"is_login"=>TRUE));
			redirect('main','refresh');                        
		}
            }
	}

	function cek_pass($pass)
	{
		$this->load->model('m_user');
		$nm_user = $this->input->post("nm_user");
		$cek_login = $this->m_user->get_login(array("user_username"=>$nm_user,"user_pass"=>md5($pass)));

		if (count($cek_login) > 0) {
			return true;
		} else {
			$this->form_validation->set_message("cek_pass","Password Salah");
			return false;
		}
	}

	function cek_user($pass)
	{
		$this->load->model('m_user');
		$nm_user = $this->input->post("nm_user");
		$cek_login = $this->m_user->get_login(array("user_username"=>$nm_user,"user_pass"=>md5($pass)));

		if (count($cek_login) > 0) {
			return true;
		} else {
			$this->form_validation->set_message("cek_user","Username Salah");
			return false;
		}
	}

	function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url()."login","refresh");
	}
}