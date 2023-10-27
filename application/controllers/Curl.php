<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Curl extends CI_Controller{
	
	public function __construct(){
		parent::__construct();
		$this->load->model("Admin_model");
	}
	
	public function curl(){
		curl_init();
		curl_setopt();
	}
	
		
		
}

 ?>