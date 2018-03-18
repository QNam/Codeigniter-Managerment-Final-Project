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
		$data = array();

		$this->load->library('form_validation');
 
       //TẠO CÁC LUẬT KIỂM TRA TÍNH HỢP LỆ CỦA DỮ LIỆU
           //id:  bắt buộc / là số 
       $this->form_validation->set_rules('id', 'Mã sinh viên', 'required|numeric');
           //password:  bắt buộc
       $this->form_validation->set_rules('password', 'Mật khẩu', 'required');
			

		if($this->form_validation->run() == TRUE){
            //KIỂM TRA VỚI DỮ LIỆU TRÊN DATABASE
			$data['id'] = $this->input->post('id');
			$data['password'] = $this->input->post('password');

            //ĐƯA VÀO SESSION ĐỂ TIỆN XỬ LÝ SAU NÀY

            $session_data = array(
				        'id'  => $data['id'],
				        'password'     => $data['password'],
				        'logged_in' => TRUE
				);

		$this->session->set_userdata($session_data);

        }
       	$this->load->view('template/header'); 
        $this->load->view('Login_View',$data );
      	$this->load->view('template/footer');
			
	}
}
