<?php
if(! defined('BASEPATH')) exit('No direct script access allowed');

class Landing extends CI_Controller {
	
	private $data=array();
	
	public function __construct() {
		parent::__construct();
		$this->load->helper('url');
		$this->data['base_url']=base_url();
	}

	public function index(){
		redirect('/home');
	}
	
	public function xrf(){
		$this->load->view('landing/xrf',$this->data);
	}
	
}