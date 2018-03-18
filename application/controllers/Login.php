<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->helper( array('url', 'form') );
		$this->load->library('session');
	}
	
	public function index()
	{
			$this->load->library('form_validation');
 
       //tao cac tap luat
           //id:  bắt buộc - đúng định dạng email
       $this->form_validation->set_rules('id', 'id', 'required|numeric|xss_clean');
           //password:  bắt buộc - tối thiểu 8 ký tự
       $this->form_validation->set_rules('password', 'password', 'required|min_length[8]|xss_clean');
			

		if($this->form_validation->run() == TRUE){
            echo 'thanh cong r';
        }
       	$this->load->view('inc/header'); 
        $this->load->view('Login_View');
      	$this->load->view('inc/footer');
			
	}
}
