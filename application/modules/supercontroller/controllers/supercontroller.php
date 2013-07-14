<?php

class Supercontroller extends MX_Controller{

	function __construct() {
		parent::__construct();
	}

	function get($order_by){
		$this->load->model('mdl_supercontroller');
		$query = $this->mdl_supercontroller->get($order_by);
		return $query;
	}

	function get_with_limit($limit, $offset, $order_by) {
		$this->load->model('mdl_supercontroller');
		$query = $this->mdl_supercontroller->get_with_limit($limit, $offset, $order_by);
		return $query;
	}

	function get_where($id){
		$this->load->model('mdl_supercontroller');
		$query = $this->mdl_supercontroller->get_where($id);
		return $query;
	}

	function get_where_custom($col, $value) {
		$this->load->model('mdl_supercontroller');
		$query = $this->mdl_supercontroller->get_where_custom($col, $value);
		return $query;
	}

	function _insert($data){
		$this->load->model('mdl_supercontroller');
		$this->mdl_supercontroller->_insert($data);
	}

	function _update($id, $data){
		$this->load->model('mdl_supercontroller');
		$this->mdl_supercontroller->_update($id, $data);
	}

	function _delete($id){
		$this->load->model('mdl_supercontroller');
		$this->mdl_supercontroller->_delete($id);
	}

	function count_where($column, $value) {
		$this->load->model('mdl_supercontroller');
		$count = $this->mdl_supercontroller->count_where($column, $value);
		return $count;
	}

	function get_max() {
		$this->load->model('mdl_supercontroller');
		$max_id = $this->mdl_supercontroller->get_max();
		return $max_id;
	}

	function _custom_query($mysql_query) {
		$this->load->model('mdl_supercontroller');
		$query = $this->mdl_supercontroller->_custom_query($mysql_query);
		return $query;
	}

}