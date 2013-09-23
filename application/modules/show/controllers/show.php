<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Show extends MX_Controller{

	public $data = array();

	function __construct() {
		parent::__construct();
		$this->load->model('mdl_show');
		
	}

	function index(){
		$query = $this->mdl_show->get_where_custom('title',$title);
		echo $query->row('content');
	}

	function id($id){
		$query = $this->mdl_show->get_where($id);
		return $query->row();
	}

	function title($title="Us",$lang='en'){
		$query = $this->mdl_show->get_where_custom('title',$title);
	    return $query->row('content');
	}

	function title_lang($title=null,$lang=null){
		$query = $this->mdl_show->get_where_and('title','lang',$title,$lang);
		return $query->row('content');
	}

}