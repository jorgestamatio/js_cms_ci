<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Copythis extends MX_Controller{

	public $data = array();

	function __construct() {
		parent::__construct();

		$this->load->model('mdl_copythis');

		if (!$this->ion_auth->logged_in())
		{
			redirect('login');
		} 

		$user = $this->ion_auth->user()->row();
		$this->data['username'] = $user->first_name;
		$this->data['content_active'] = true;
	}

	function index(){

		$this->data['module'] = 'COPYTHIS';
		$this->data['view_file'] = 'display';

		echo Modules::run('templates/backend', $this->data);

	}


}