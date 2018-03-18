<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * summary
 */
class Login_Model extends CI_Model
{
    /**
     * summary
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function checkLogin($id,$password){	
/*
    	$login_data = array('stu_id' => $id)

		$this->db->select('*')->where('stu_id');*/
    }
}

/* End of file Login_Model.php */
/* Location: ./application/models/Login_Model.php */