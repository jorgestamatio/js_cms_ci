<?php

class Templates extends MX_Controller{

	function __construct() {
		parent::__construct();
	}

	function frontend($data){
		$this->load->view('frontend', $data);
	}

	function backend($data){
		$this->load->view('backend', $data);
	}


}