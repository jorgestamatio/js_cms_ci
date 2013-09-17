<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Content extends MX_Controller{

	public $data = array();

	function __construct() {
		parent::__construct();

		$this->load->model('mdl_content');

		if (!$this->ion_auth->logged_in())
		{
			redirect('login');
		} 

		$user = $this->ion_auth->user()->row();
		$this->data['username'] = $user->first_name;
		$this->data['content_active'] = true;
	}

	function index(){

		$this->data['query'] = $this->mdl_content->get('title');

		$this->data['module'] = 'content';
		$this->data['view_file'] = 'display';

		echo Modules::run('templates/backend', $this->data);

	}


	function categories(){

		$this->data['query'] = Modules::run('categories/getCategories');
		$this->data['module'] = 'content';
		$this->data['view_file'] = 'categories';

		echo Modules::run('templates/backend', $this->data);

	}

	

	
	function add(){

		$data = array(
   			'title' => 'new' ,
   			'lang' => 'en' ,
   			'content' => 'content'
		);

		$this->mdl_content->_insert($data);

		$this->index();
	}


	function edit($id){

		//$this->data['query'] = $this->mdl_content->get_where($id);
		$query = $this->mdl_content->get_where($id);
		$this->data['row'] = $query->row();



		$this->data['module'] = 'content';
		$this->data['view_file'] = 'edit';

		echo Modules::run('templates/backend', $this->data);
	}

	function save(){
		$id = $this->input->post('id', TRUE);
		$title = $this->input->post('title', TRUE);
		$content = $this->input->post('content', TRUE);

		$data = array(
   			'title' => $title ,
   			'lang' => 'en' ,
   			'content' => $content
		);

		$this->mdl_content->_update($id,$data);

		$this->index();

	}

}