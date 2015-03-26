<?php
if(! defined('BASEPATH')) exit('No direct script access allowed');

class Sale extends CI_Controller {
	
	private $data=array();
	
	public function __construct() {
		parent::__construct();
		$this->load->helper('url');
		$this->data['base_url']=base_url();
		$this->data['miniContactus']=$this->load->view('Brownstone/miniContactus.html',$this->data,true);
	}

	public function index(){
		$this->data['sale']="";
		$this->data['saleContent']=$this->load->view('Brownstone/sale/csale',$this->data,true);
		$this->data['saleSideList']=$this->load->view('Brownstone/sale/saleSideList',$this->data,true);
		$this->data['content']=$this->load->view('Brownstone/sale',$this->data,true);
		$this->load->view('template',$this->data);
	}
	
	public function type($data2=null){
		$this->data['sale']="";
		$this->data['typs']=$data2;
		$this->data['saleContent']=$this->load->view('Brownstone/sale/saleselected',$this->data,true);
		$this->data['saleSideList']=$this->load->view('Brownstone/sale/saleSideList',$this->data,true);
		$this->data['content']=$this->load->view('Brownstone/sale',$this->data,true);
		$this->load->view('template',$this->data);
	}
	
}