<?php

class Home extends MX_Controller{

	function __construct() {
		parent::__construct();
	}

	function index(){
		$this->load->view('home.php');
	}
}