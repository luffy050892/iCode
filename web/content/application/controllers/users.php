	<?php
if(! defined('BASEPATH')) exit('No direct script access allowed');

class Users extends CI_Controller {
	
	private $data=array();
	
	public function __construct() {
		parent::__construct();
		session_start();
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->model('user','',TRUE);
		$this->data['base_url']=base_url();
		if($this->session->userdata('logged_in')){
		     $session_data = $this->session->userdata('logged_in');
		     $this->data['username'] = $session_data['username'];
		}
	}

	public function index() {
		if($this->session->userdata('logged_in')) {
			redirect('home', 'refresh');
		}
		$this->load->view('iCode/login', $this->data);
	}

	function logout() {
		$this->session->unset_userdata('logged_in');
		session_destroy();
		$this->index();
	}
	
	function register() {
		if($this->input->post('username')) {
			$username = $this->input->post('username');
			$fullname = $this->input->post('fullname');
			$email = $this->input->post('email');
			$gender = $this->input->post('gender');
			$password = $this->input->post('pwd1');
			$result = $this->user->register($username, $fullname, $email, $gender, $password);
			$this->data['success'] = true;
			$this->data['username'] = $username;
			if($result==1){
				$this->load->view('iCode/login', $this->data);
			}
		}else{
			$this->load->view('iCode/register', $this->data);
		}
	}

	function profile() { 
		$this->data['content'] = $this->load->view('iCode/profile', $this->data, true);
		$this->load->view('template', $this->data);
	}
	
	public function checkUsername($username) {
		$result = $this->user->checkUsername($username);
		echo $result;
		return $result;
	}
}