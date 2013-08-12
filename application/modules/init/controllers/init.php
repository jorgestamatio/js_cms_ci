<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Init extends MX_Controller {

	public $data = array();
	public $isCreated = false;

	function __construct(){
		parent::__construct();

		$this->data['module'] = 'init';
		$this->data['title'] = 'Initialize Database';

		if ($this->db->table_exists('app_users')){	
			$this->isCreated = true;
			$this->data['view_file'] = 'init_created';
		}
	}


	function index(){
		if ($this->isCreated){
		   	echo Modules::run('templates/backend', $this->data);
		}
		else{
			$this->data['view_file'] = 'init';
			echo Modules::run('templates/backend', $this->data);
		}
		
	}


	function createTables(){

		if($this->isCreated){
			$this->load->view($this->layout, $this->data);
		}
		else{

			$this->load->model('mdl_init');
			$response = $this->mdl_init->createTables();

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
		$this->load->model('mdl_init');
		$response = $this->mdl_init->deleteTables();

		if($response){
			$this->data['view_file'] = 'init';
			echo Modules::run('templates/backend', $this->data);
		}else{
			$this->data['view_file'] = 'init_fail';
			echo Modules::run('templates/backend', $this->data);
		}
	}
}

/* End of file init.php */
/* Location: ./application/controllers/backend.php */