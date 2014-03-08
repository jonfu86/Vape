<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Register extends Welcome {


	
	public function register()
	{
		$this->load->view('registration');
	}
	
}
