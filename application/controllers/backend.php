<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Backend extends MY_Controller {


	private $layout;
	private $is_logged_in = false;

	public function __construct(){
		parent::__construct();
		$this->layout = 'backend/layout/master';
	}


	public function index(){

		$this->login();

		if($this->is_logged_in){
			$data['title'] = 'Dashboard';
			$data['content'] = 'backend/dashboard';
		}
		else{
			$data['title'] = 'Login';
			$data['content'] = 'backend/login';
		}

		$this->load->view($this->layout, $data);
	}

	public function login(){
		$this->load->library('form_validation');
		$this->form_validation->set_error_delimiters('<div class="alert alert-error">', '</div>');
		$this->form_validation->set_rules('user', 'User', 'trim|required|min_length[4]');
		$this->form_validation->set_rules('pass', 'Password', 'trim|required|min_length[4]');
		$this->form_validation->set_rules('remember', 'Remember', '');

		if( $this->form_validation->run() !== false ) {
			// then validation passed. Get from the db.
			$this->is_logged_in = true;
		}else{
			$this->is_logged_in = false;
		}
	}
}

/* End of file backend.php */
/* Location: ./application/controllers/backend.php */