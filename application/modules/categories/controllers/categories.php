<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Categories extends MX_Controller{

	public $data = array();

	function __construct() {
		parent::__construct();

		$this->load->model('mdl_categories');

		if (!$this->ion_auth->logged_in())
		{
			redirect('login');
		} 

		$user = $this->ion_auth->user()->row();
		$this->data['username'] = $user->first_name;
		$this->data['content_active'] = true;
	}

	function index(){

		$this->data['query'] = $this->getCategories();

		$this->data['module'] = 'categories';
		$this->data['view_file'] = 'display';

		echo Modules::run('templates/backend', $this->data);
	}

	function getCategories(){
		return $this->mdl_categories->get('category');
	}


}