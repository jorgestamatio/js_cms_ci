<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Backend extends MX_Controller{

	function __construct() {
		parent::__construct();
		if (!$this->ion_auth->logged_in())
		{
			redirect('login');
		} 
	}

	function index(){
		$this->load->model('mdl_backend');

		$user = $this->ion_auth->user()->row();

		$data['username'] = $user->first_name;
		$data['module'] = 'backend';
		$data['view_file'] = 'dashboard';

		echo Modules::run('templates/backend', $data);
	}

}