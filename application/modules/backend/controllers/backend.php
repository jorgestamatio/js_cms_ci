<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Backend extends MX_Controller{

	function __construct() {
		parent::__construct();
	}

	function index(){
		$this->load->model('mdl_backend');


		$data['module'] = 'home';
		$data['view_file'] = 'dashboard';

		echo Modules::run('templates/backend', $data);
	}
}