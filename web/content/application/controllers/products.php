<?php
if(! defined('BASEPATH')) exit('No direct script access allowed');

class Products extends CI_Controller {
	
	private $data=array();
	
	public function __construct() {
		parent::__construct();
		$this->load->helper('url');
		$this->data['base_url']=base_url();
		$this->data['miniContactus']=$this->load->view('Brownstone/miniContactus.html',$this->data,true);
	}

	public function index($data=null,$data2=null,$data3=null){
		$this->type();
	}
	
	public function suppliers($data2=null, $data3=null){
		$this->data['products']="";
		if($data2!=null){
			$this->data['sups']=$data2;
			$this->data['typs']=$data3;
			$this->data['by']="supplierselected";
			if($data3!=null){
				$this->data['by']="supplierselected2";
				$this->data['suppliers']=$this->load->view('Brownstone/products/bySupplier/supplierSelected2',$this->data,true);
			}else{
				$this->data['suppliers']=$this->load->view('Brownstone/products/bySupplier/supplierSelected',$this->data,true);
			}
		}else{
			$this->data['by']="suppliers";
			$this->data['suppliers']=$this->load->view('Brownstone/products/bySupplier/suppliers',$this->data,true);
		}
		$this->data['suppliersSideList']=$this->load->view('Brownstone/products/bySupplier/supplierSideList',$this->data,true);
		$this->data['pageby']="suppliers";
		$this->product();
	}
	
	public function industries($data2=null, $data3=null){
		$this->data['products']="";
		if($data2!=null){
			$this->data['inds']=$data2;
			$this->data['typs']=$data3;
			$this->data['by']="industryselected1";
			if($data3!=null){
				$this->data['by']="industryselected2";
				$this->data['industries']=$this->load->view('Brownstone/products/byIndustries/industrySelected2',$this->data,true);
			}else{
				$this->data['industries']=$this->load->view('Brownstone/products/byIndustries/industrySelected',$this->data,true);
			}
		}else{
			$this->data['industries']=$this->load->view('Brownstone/products/byIndustries/industries',$this->data,true);
			$this->data['by']="industries";
		}
		$this->data['industriesSideList']=$this->load->view('Brownstone/products/byIndustries/industriesSideList',$this->data,true);
		$this->data['pageby']="industries";
		$this->product();
	}
	
	public function type($data2=null){
		if($data2==null){
			$this->data['by']="products";
			$this->data['products']=$this->load->view('Brownstone/products/byProducts/products',$this->data,true);
			$this->data['productsSideList']=$this->load->view('Brownstone/products/byProducts/productsSideList',$this->data,true);
		}else{
			$this->data['by']="productselected";
			$this->data['typs']=$data2;
			$this->data['productsSideList']=$this->load->view('Brownstone/products/byProducts/productsSideList',$this->data,true);
			$this->data['products']=$this->load->view('Brownstone/products/byProducts/productsSelected',$this->data,true);
		}
		$this->data['pageby']="type";
		$this->product();
	}
	
	public function all($data2=null){
		$this->data['by']="productAll";
		$this->data['productsSideList']=$this->load->view('Brownstone/products/byProducts/productsSideList',$this->data,true);
		$this->data['products']=$this->load->view('Brownstone/products/byProducts/allProducts',$this->data,true);
		$this->data['pageby']="type";
		$this->product();
	}
	
	public function product($data=null,$data2=null, $data3=null ){
		$this->data['prod_url']='';
		$this->data['content']=$this->load->view('Brownstone/products',$this->data,true);
		$this->load->view('template',$this->data);
	}
	
}