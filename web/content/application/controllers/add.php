<?php
if(! defined('BASEPATH')) exit('No direct script access allowed');

class Add extends CI_Controller {
	
	private $data=array();
	
	public function __construct() {
		parent::__construct();
		session_start();
		$this->load->helper('form');
		$this->load->helper('url');
		$this->data['base_url']=base_url();
		 if($this->session->userdata('logged_in')){
		     $session_data = $this->session->userdata('logged_in');
		     $this->data['username'] = $session_data['username'];
		} else {
	    	//If no session, redirect to login page
	    	redirect('users', 'refresh');
	    }
	}

	public function index(){
		$this->data['content'] = $this->load->view('iCode/insert.php', $this->data, true);
		$this->load->view('template', $this->data);
	}
	
}