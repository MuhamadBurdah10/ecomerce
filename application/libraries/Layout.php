<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class Layout {
	protected $_ci;

	function __construct() {
		$this->_ci=&get_instance();
		$this->_ci->config->load('config');
	}

	public function private_temp($template,$data=NULL) {
		$data['header']=$this->_ci->load->view('private_page/templates/header',$data,true);
		$data['content']=$this->_ci->load->view($template,$data,true);
		$data['footer']=$this->_ci->load->view('private_page/templates/footer',$data,true);
		$this->_ci->load->view('private_page/temp.php',$data);
	}

	public function private_temp2($template,$data=NULL) {
		$data['header']=$this->_ci->load->view('private_page/templates/header',$data,true);
		$data['content']=$this->_ci->load->view($template,$data,true);
		$data['footer']=$this->_ci->load->view('private_page/templates/footer',$data,true);
		$this->_ci->load->view('private_page/temp2.php',$data);
	}

	public function admin_temp($template,$data=NULL) {
		$data['header']=$this->_ci->load->view('admin_page/templates/header',$data,true);
		$data['content']=$this->_ci->load->view($template,$data,true);
		$data['footer']=$this->_ci->load->view('admin_page/templates/footer',$data,true);
		$this->_ci->load->view('admin_page/temp.php',$data);
	}

	public function petani_temp($template,$data=NULL) {
		$data['header']=$this->_ci->load->view('admin_page/templates/header',$data,true);
		$data['content']=$this->_ci->load->view($template,$data,true);
		$data['footer']=$this->_ci->load->view('admin_page/templates/footer',$data,true);
		$this->_ci->load->view('petani/temp.php',$data);
	}
	
}