<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends MX_Controller{

	public $lang;

	function __construct() {
		parent::__construct();
		$this->lang = $this->config->item('SITE_LANGUAGES_DEFAULT');
	}

	function index($lang=null){
		if($lang == null){ $lang = $this->lang;}
		$this->load->model('mdl_home');


		$data['module'] = 'home';
		$data['view_file'] = 'home';
		$data['lang'] = $lang;

		echo Modules::run('templates/frontend', $data);
	}




}