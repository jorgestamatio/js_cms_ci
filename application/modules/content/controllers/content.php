<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Content extends MX_Controller{

	public $data = array();

	function __construct() {
		parent::__construct();

		$user = $this->ion_auth->user()->row();
		$this->data['username'] = $user->first_name;

	}

	function index(){
		$this->load->model('mdl_content');

		$this->data['query'] = $this->mdl_content->get('title');

		$this->data['module'] = 'content';
		$this->data['view_file'] = 'display';

		echo Modules::run('templates/backend', $this->data);

	}

	
	function add(){
		$this->load->model('mdl_content');

		$data = array(
   			'title' => 'new' ,
   			'lang' => 'en' ,
   			'content' => 'content'
		);


		$this->mdl_content->_insert($data);

		$this->index();
	}


	function edit($id){
		$this->load->model('mdl_content');

		$this->data['query'] = $this->mdl_content->get_where($id);


		$this->data['module'] = 'content';
		$this->data['view_file'] = 'edit';

		echo Modules::run('templates/backend', $this->data);
	}


}