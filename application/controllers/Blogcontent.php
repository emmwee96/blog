<?php
class Blogcontent extends CI_Controller{
 

    
    function __construct(){
        parent::__construct();
        $this->load->model('Blogcontent_model');
        $this->load->library('session');

    }

 
    function newblog(){

        if($_POST){

            $data = array(
                'post_title' => $_POST['post_title'],
                'post_description' => $_POST['post_description'],
                'user_id' => $this->session->userdata('user_id'),
          
            );

            $data_update= $this->Blogcontent_model->newblog($data);
        }
        
        $this->load->view('newblog');

    }

    function getpost(){
        $data = $this->Blogcontent_model->getpost();
        $this->load->view('home',$data);
    }

    function viewblogpost(){

        $data['viewblogpost'] = $this->Blogcontent_model->getallpost();   

        $this->load->view('viewblogpost');
    }
}
    


?>