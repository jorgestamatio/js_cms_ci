<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Content extends MX_Controller{

  public $data = array();
  public $lang;

  function __construct() {
    parent::__construct();
    $this->lang = $this->config->item('SITE_LANGUAGES_DEFAULT');

    $this->load->model('mdl_content');

    if (!$this->ion_auth->logged_in())
    {
      redirect('login');
    } 

    $user = $this->ion_auth->user()->row();
    $this->data['username'] = $user->first_name;
    $this->data['content_active'] = true;
  }

  function index($lang=null,$category='index'){
    if($lang == null){ $lang = $this->lang;}

    $this->data['category'] = $category;
    $this->data['categories'] = Modules::run('categories/getCategories');

    if($category == 'all'){
      $this->data['query'] = $this->mdl_content->get_where_custom('lang',$lang);
    }else{
      $this->data['query'] = $this->mdl_content->get_where_and('lang','category',$lang,$category);
    }

    $this->data['module'] = 'content';
    $this->data['view_file'] = 'display';
    $this->data['lang'] = $lang;

    echo Modules::run('templates/backend', $this->data);

  }


  
  function add($lang,$category='index'){

    if($category=='all'){ $category = 'index'; }

    $data = array(
        'title' => 'new' ,
        'lang' => $lang ,
        'category' => $category,
        'content' => 'content'
    );

    $this->mdl_content->_insert($data);

    redirect('content/'.$lang);
  }


  function edit($id){

    $query = $this->mdl_content->get_where($id);
    $this->data['row'] = $query->row();

    $this->data['categories'] = Modules::run('categories/getCategories');

    $this->data['module'] = 'content';
    $this->data['view_file'] = 'edit';

    echo Modules::run('templates/backend', $this->data);
  }



  function save(){
    $id = $this->input->post('id', TRUE);
    $title = $this->input->post('title', TRUE);
    $content = $this->input->post('content', TRUE);
    $lang = $this->input->post('lang', TRUE);
    $category = $this->input->post('category', TRUE);

    $data = array(
        'title' => $title ,
        'lang' => $lang ,
        'category' => $category ,
        'content' => $content
    );

    $this->mdl_content->_update($id,$data);

    redirect('content/'.$lang.'/'.$category);

  }


  function delete($id,$lang,$category){
      $this->mdl_content->_delete($id);

      redirect('content/'.$lang.'/'.$category);
    }



  /*
  Abandoned idea, better store the languages on a constant in site_config.
  function getAllLang(){
    $query = $this->mdl_content->get_unique_from('lang');
    return $query;
  }
  */

  // function getLangSelect(){
  //  //$data['data'] = $this->getAllLang();
  //  //$data['data'] = $this->config->item('SITE_LANGUAGES_ENABLED');
  //  //return $this->load->view('lang_select', $data, true); 
  //  //return $this->config->item('SITE_LANGUAGES_ENABLED');
  // }  

}