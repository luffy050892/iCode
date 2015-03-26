<?php
if(! defined('BASEPATH')) exit('No direct script access allowed');

class Error extends CI_Controller {
	
	private $data=array();
	
	public function __construct() {
		parent::__construct();
		$this->load->helper('url');
		$this->data['base_url']=base_url();
		$this->data['miniContactus']=$this->load->view('Brownstone/miniContactus.html',$this->data,true);
	}

	public function index(){
		$this->data['content'] =$this->load->view('Brownstone/error',$this->data,true);
		$this->load->view('template',$this->data);
	}
	
}