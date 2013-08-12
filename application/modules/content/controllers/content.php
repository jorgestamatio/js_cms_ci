<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Content extends MX_Controller{

	function __construct() {
		parent::__construct();
	}

	function index(){
		$this->load->model('mdl_content');

		$data['query'] = $this->mdl_content->get('date');

		$data['module'] = 'content';
		$data['view_file'] = 'display';

		echo Modules::run('templates/backend', $data);

	}


}