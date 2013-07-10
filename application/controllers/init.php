<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Init extends MY_Controller {

	private $layout;
	public $data = array();
	public $isCreated = false;

	public function __construct(){
		parent::__construct();

		$this->layout = 'backend/layout/master';

		$this->data['title'] = 'Initialize Database';
		if ($this->db->table_exists('app_users')){	
			$this->isCreated = true;
			$this->data['content'] = 'backend/init/init_created';
		}
	}


	public function index(){
		if ($this->isCreated){
		   	$this->load->view($this->layout, $this->data);
		}
		else{
			$this->data['title'] = 'Initialize Database';
			$this->data['content'] = 'backend/init/init';
			$this->load->view($this->layout, $this->data);
		}
		
	}


	public function createTables(){

		if($this->isCreated){
			$this->load->view($this->layout, $this->data);
		}
		else{

			$this->load->model('Init_model');
			$response = $this->Init_model->createTables();

			if($response){

				$this->data['title'] = 'Initialize Database';
				$this->data['content'] = 'backend/init/init_success';
				$this->load->view($this->layout, $this->data);

			}else{

				$this->data['title'] = 'Initialize Database';
				$this->data['content'] = 'backend/init/init_fail';
				$this->load->view($this->layout, $this->data);
				
			}

		}

	}
}

/* End of file init.php */
/* Location: ./application/controllers/backend.php */