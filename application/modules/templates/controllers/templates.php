<?php

class Templates extends MX_Controller{

	function __construct() {
		parent::__construct();
	}

	function master($data){
		$this->load->view('master', $data);
	}
}