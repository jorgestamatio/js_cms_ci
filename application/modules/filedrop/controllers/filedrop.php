<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Filedrop extends MX_Controller{

	public $data = array();

	function __construct() {
		parent::__construct();

		$this->load->model('mdl_filedrop');

		if (!$this->input->is_ajax_request()) {
  
			if (!$this->ion_auth->logged_in())
			{
				redirect('login');
			} 

			$user = $this->ion_auth->user()->row();
			$this->data['username'] = $user->first_name;
			$this->data['content_active'] = true;
		}
	}

	function index(){

		$this->data['error'] = '';
		$this->data['module'] = 'filedrop';
		$this->data['view_file'] = 'upload_form';

		echo Modules::run('templates/backend', $this->data);

	}


	function do_upload(){
		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= 1024*8;
		$config['max_width']  = '0';
		$config['max_height']  = '0';

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload())
		{
			$this->data['error'] = array('error' => $this->upload->display_errors('',''));
			$this->data['module'] = 'filedrop';
			$this->data['view_file'] = 'upload_form';

			// echo Modules::run('templates/backend', $this->data);
			echo json_encode(array("status"=>"error","msg"=>$this->data['error']));
		}
		else
		{

			$this->data['data'] = array('upload_data' => $this->upload->data());
			$this->data['module'] = 'filedrop';
			$this->data['view_file'] = 'upload_success';

			// echo Modules::run('templates/backend', $this->data);
			echo json_encode(array("status"=>"success","msg"=>$this->upload->data()));
		}
	}


}
