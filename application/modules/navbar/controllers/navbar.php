<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Navbar extends MX_Controller{

	function __construct() {
		parent::__construct();
	}

	function index(){
		$this->load->view('frontend');
	}

	function backend(){
		$this->load->view('backend');
	}
}