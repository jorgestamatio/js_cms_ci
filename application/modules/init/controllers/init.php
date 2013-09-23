<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Init extends MX_Controller {

	public $data = array();
	public $isCreated = false;

	function __construct(){

		parent::__construct();

		$this->load->model('mdl_init');

		$this->data['module'] = 'init';
		$this->data['title'] = 'Initialize Database';
		$this->data['tables'] = $this->mdl_init->listTables();

		if ($this->db->table_exists('users')){	

			$user = $this->ion_auth->user()->row();
			$this->data['username'] = $user->first_name;

			$this->isCreated = true;
			$this->data['view_file'] = 'init_created';
		}
	}


	function index(){

		if ($this->isCreated){

			if ($this->db->table_exists('content')){
				$this->data['tableContent'] = "<a href=".site_url('init/deleteContent')." class='btn btn-danger'><span class='glyphicon glyphicon-trash'></span> Delete table content</a>";
			}else{
				$this->data['tableContent'] = "<a href='".site_url('init/createContent')."' class='btn btn-success'><span class='glyphicon glyphicon-trash'></span> Create table content</a>";
			}

			if ($this->db->table_exists('guests')){
				$this->data['tableGuests'] = "<a href=".site_url('init/deleteGuests')." class='btn btn-danger'><span class='glyphicon glyphicon-trash'></span> Delete table guests</a>";
			}else{
				$this->data['tableGuests'] = "<a href='".site_url('init/createGuests')."' class='btn btn-success'><span class='glyphicon glyphicon-trash'></span> Create table guests</a>";
			}

		   	echo Modules::run('templates/backend', $this->data);
		}
		else{
			$this->data['view_file'] = 'init';
			echo Modules::run('templates/init', $this->data);
		}
		
	}


	function createTables(){

		if($this->isCreated){
			$this->load->view($this->layout, $this->data);
		}
		else{

			$response = $this->mdl_init->createIonAuthTables();

			if($response){
				$this->data['view_file'] = 'init_success';
				echo Modules::run('templates/backend', $this->data);

			}else{
				$this->data['view_file'] = 'init_fail';
				echo Modules::run('templates/backend', $this->data);
				
			}

		}

	}

	function deleteTables(){

		$response = $this->mdl_init->dropTablesIonAuth();
		
		if($response){
			$this->data['view_file'] = 'init';
			echo Modules::run('templates/init', $this->data);
		}else{
			$this->data['view_file'] = 'init_fail';
			echo Modules::run('templates/backend', $this->data);
		}
	}


	function createContent(){

		$response = $this->mdl_init->createContent();
		
		if($response){
				$this->data['tableContent'] = "<a href=".site_url('init/deleteContent')." class='btn btn-danger'><span class='glyphicon glyphicon-trash'></span> Delete table content</a>";
				echo Modules::run('templates/backend', $this->data);

			}else{
				$this->data['view_file'] = 'init_fail';
				echo Modules::run('templates/backend', $this->data);
			}
	}

	function deleteContent(){

		$response = $this->mdl_init->dropTableContent();
		
		if($response){
			$this->data['tableContent'] = "<a href='".site_url('init/createContent')."' class='btn btn-success'><span class='glyphicon glyphicon-trash'></span> Create table content</a>";
			echo Modules::run('templates/backend', $this->data);
		}else{
			$this->data['view_file'] = 'init_fail';
			echo Modules::run('templates/backend', $this->data);
		}
	}


	function createGuests(){

		$response = $this->mdl_init->createGuests();
		
		if($response){
				$this->data['tableGuests'] = "<a href=".site_url('init/deleteGuests')." class='btn btn-danger'><span class='glyphicon glyphicon-trash'></span> Delete table guests</a>";
				echo Modules::run('templates/backend', $this->data);

			}else{
				$this->data['view_file'] = 'init_fail';
				echo Modules::run('templates/backend', $this->data);
			}
	}

	function deleteGuests(){

		$response = $this->mdl_init->dropTableGuests();
		
		if($response){
			$this->data['tableGuests'] = "<a href='".site_url('init/createGuests')."' class='btn btn-success'><span class='glyphicon glyphicon-trash'></span> Create table guests</a>";
			echo Modules::run('templates/backend', $this->data);
		}else{
			$this->data['view_file'] = 'init_fail';
			echo Modules::run('templates/backend', $this->data);
		}
	}
}

/* End of file init.php */
/* Location: ./application/controllers/backend.php */