<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    function __construct()
    {
        parent::__construct();
        $this->load->model('Blogcontent_model');
        $this->load->library('session');
        

    }

    function index(){
       
        if($this->session->userdata('user_id')){
            $data['post'] = $this->Blogcontent_model->getpost($this->session->userdata('user_id'));   
            }
        else{
            $data['post'] = $this->Blogcontent_model->getallpost(); 
            }

            $this->load->view('home',$data); 
            }

    function view_blogger_name(){
            $this->data['view_blogger_name'] = $this->Blogcontent_model->view_blogger_name($user_id);       
            $this->load->view('view_blogger_name', $this->data);
            }
}



?>