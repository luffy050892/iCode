<?php
if(! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {
	
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

	public function index() {
		if($this->input->post('search')){
			print_r($this->input->post('search'));exit;
		}
		$this->data['page'] = "index";
		$this->data['content'] = $this->load->view('iCode/index.html', $this->data, true);
		$this->load->view('template', $this->data);
	}
	
	public function charts() {
		$this->data['content'] = $this->load->view('iCode/charts.html', $this->data, true);
		$this->load->view('template', $this->data);
	}
	
	public function tables() {
		$this->data['content'] = $this->load->view('iCode/tables.html', $this->data, true);
		$this->load->view('template', $this->data);
	}
	
	public function forms() {
		$this->data['content'] = $this->load->view('iCode/forms.html', $this->data, true);
		$this->load->view('template', $this->data);
	}
	
	public function bootstrapElements() {
		$this->data['content'] = $this->load->view('iCode/bootstrapElements.html', $this->data, true);
		$this->load->view('template', $this->data);
	}
	
	public function bootstrapGrid() {
		$this->data['content'] = $this->load->view('iCode/bootstrap-grid.html', $this->data, true);
		$this->load->view('template', $this->data);
	}
	
	public function indexRtl() {
		$this->data['content'] = $this->load->view('iCode/index-rtl.html', $this->data, true);
		$this->load->view('template', $this->data);
	}
	
	public function blankPage() {
		$this->data['content'] = $this->load->view('iCode/blank-page.html', $this->data, true);
		$this->load->view('template', $this->data);
	}
	
}