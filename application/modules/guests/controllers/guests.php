<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Guests extends MX_Controller{

  public $data = array();

  function __construct() {
    parent::__construct();

    $this->load->model('mdl_guests');

    $ajax = $this->input->post('ajax', TRUE);

    if( $ajax ){

    }else{

      if (!$this->ion_auth->logged_in())
      {
        redirect('login');
      }
      $user = $this->ion_auth->user()->row();
      $this->data['username'] = $user->first_name;
      $this->data['guests_active'] = true;
    }

  }

  function index(){

    $this->data['query'] = $this->mdl_guests->get('id');

    $this->data['module'] = 'guests';
    $this->data['view_file'] = 'display';

    echo Modules::run('templates/backend', $this->data);

  }


  function showGuestsDashboard(){
    unset($this->data['guests_active']);
    $this->data['home_active'] = true;
    $this->data['query'] = $this->mdl_guests->get('id');

    $this->data['module'] = 'guests';
    $this->data['view_file'] = 'display';

    echo $this->load->view('display', $this->data); 
  }




  
  
  function add(){
    $data = array(
        'name' => 'new' ,
        'email' => 'email' ,
        'persons' => 'persons'
    );

    $this->mdl_guests->_insert($data);

    $this->index();
  }


  function addGuest(){
    $name = $this->input->post('name', TRUE);
    $email = $this->input->post('email', TRUE);
    $persons = $this->input->post('persons', TRUE);

    $data = array(
        'name' => $name ,
        'email' => $email ,
        'persons' => $persons
    );

    $this->mdl_guests->_insert($data);

    echo "<h1>Thank you!</h1><p>See you there!</p>";
  }


  function edit($id){

    //$this->data['query'] = $this->mdl_guests->get_where($id);
    $query = $this->mdl_guests->get_where($id);
    $this->data['row'] = $query->row();



    $this->data['module'] = 'guests';
    $this->data['view_file'] = 'edit';

    echo Modules::run('templates/backend', $this->data);
  }

  function save(){
    $id = $this->input->post('id', TRUE);
    $name = $this->input->post('name', TRUE);
    $email = $this->input->post('email', TRUE);
    $persons = $this->input->post('persons', TRUE);

    $data = array(
        'name' => $name ,
        'email' => 'email' ,
        'persons' => $persons
    );

    $this->mdl_guests->_update($id,$data);

    $this->index();

  }

  function delete($id){

    $this->mdl_guests->_delete($id);

    $this->index();

  }

}