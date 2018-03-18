<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	
	public function index($id,$str)
	{
		var_dump($id);
		var_dump($str);
	}
}
