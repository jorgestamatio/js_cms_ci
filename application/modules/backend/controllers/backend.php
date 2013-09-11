<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Backend extends MX_Controller{

	public $data = array();

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

		$this->data['username'] = $user->first_name;
		$this->data['module'] = 'backend';
		$this->data['view_file'] = 'dashboard';
		$this->data['home_active'] = true;

		echo Modules::run('templates/backend', $this->data);
	}


	

}