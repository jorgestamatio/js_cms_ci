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
		if(!$this->ion_auth->is_admin()){
			redirect('content');
		}

		$user = $this->ion_auth->user()->row();
		$this->data['username'] = $user->first_name;
	}

	function index(){

		$this->data['query'] = $this->getCategories();

		$this->data['module'] = 'categories';
		$this->data['view_file'] = 'display';

		echo Modules::run('templates/backend', $this->data);
	}

	function getCategories(){
		return $this->mdl_categories->get('id');
	}


	function add(){

		$data = array(
   			'category' => 'new'
		);

		$this->mdl_categories->_insert($data);

		$this->index();
	}


	function edit($id){

		//$this->data['query'] = $this->mdl_categories->get_where($id);
		$query = $this->mdl_categories->get_where($id);
		$this->data['row'] = $query->row();



		$this->data['module'] = 'categories';
		$this->data['view_file'] = 'edit';

		echo Modules::run('templates/backend', $this->data);
	}

	function save(){
		$id = $this->input->post('id', TRUE);
		$category = $this->input->post('category', TRUE);

		$data = array(
   			'category' => $category
		);

		$this->mdl_categories->_update($id,$data);

		$this->index();

	}


}