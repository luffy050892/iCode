<?php
if(! defined('BASEPATH')) exit('No direct script access allowed');

class News extends CI_Controller {
	
	private $data=array();
	
	public function __construct() {
		parent::__construct();
		$this->load->helper('url');
		$this->data['base_url']=base_url();
		$this->data['miniContactus']=$this->load->view('Brownstone/miniContactus.html',$this->data,true);
	}
	/*
	public function index($data=null){
		$this->data['news']="";
		$this->data['page']="news";
		$this->data['eventList']=$this->load->view('Brownstone/newsAndEvents/eventList',$this->data,true);
		if($data!=null){
			$this->data['r_event']="";
			$this->data['event']=$this->load->view('Brownstone/newsAndEvents/events/'.$data,$this->data,true);
		}else{
			$this->data['event']=$this->load->view('Brownstone/newsAndEvents/eventAll',$this->data,true);
		}
		
		$this->data['content']=$this->load->view('Brownstone/newsandevents',$this->data,true);
		$this->load->view('template',$this->data);
	}*/
	
	public function all($data=null){
		$this->data['news']="";
		$this->data['page']="news";
		$this->data['selectedDate']=$data;
		$this->data['eventList']=$this->load->view('Brownstone/newsAndEvents/eventList',$this->data,true);
		/*if($data!=null){
			$this->data['r_event']="";
			$this->data['event']=$this->load->view('Brownstone/newsAndEvents/events/'.$data,$this->data,true);
		}else{*/
			$this->data['event']=$this->load->view('Brownstone/newsAndEvents/eventAll',$this->data,true);
		/*}*/
		$this->data['content']=$this->load->view('Brownstone/newsandevents',$this->data,true);
		$this->load->view('template',$this->data);
	}
	
	public function selected($id=null){
		$this->data['news']="";
		$this->data['page']="news";
		$this->data['eventid']=$id;
		$this->data['eventList']=$this->load->view('Brownstone/newsAndEvents/eventList',$this->data,true);
		$this->data['event']=$this->load->view('Brownstone/newsAndEvents/eventselected',$this->data,true);
		$this->data['content']=$this->load->view('Brownstone/newsandevents',$this->data,true);
		$this->load->view('template',$this->data);
	}
	
}