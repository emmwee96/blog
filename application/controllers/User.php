<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
    
    function __construct(){
        parent::__construct();
        $this->load->model('User_model');
        $this->load->library('session');
    }
    
    function index(){
        $this->load->view('register');
    }

    function register(){
        if($_POST){

            $data = array(
                'user_name' => $_POST['user_name'],
                'user_email' => $_POST['user_email'],
                'user_password' => $_POST['user_password'],
                'user_age' => $_POST['user_age'],
                'user_phone' => $_POST['user_phone'],
            );
            $data_update= $this->User_model->register($data);
           //die(var_dump($data));     
        }
        $this->load->view('register');
    }

    function login(){
        $this->load->view('login');
    }

    function user_profile(){
        $this->data['user_profile'] = $this->User_model->user_view($this->session->userdata('user_id'));       
        $this->load->view('user_profile', $this->data);
    }

    function login_user(){
        if($_POST){
            $data = array(

                'user_email' => $_POST['user_email'],
                'user_password' => $_POST['user_password'],

            );
            $user_id = $this->User_model->login_user($data);

            if($user_id){

                $this->session->set_userdata('user_id', $user_id['user_id']);
                $this->session->set_userdata('user_name', $user_id['user_name']);
  
                //die(var_dump($this->session->userdata('user_id')));
                $this->load->view('home'); 
            }
            //$this->session->set_flashdata('flash_data', 'Welcome to Blogger!');
            //$this->load->view('home'); 
        else{

            $this->session->set_flashdata('flash_data', 'Email or password is wrong!');
            $this->load->view('login','refresh');

            }
            }
            }

function logout(){       
    $this->session->sess_destroy();
       redirect('home'); 
}

function user_profile_update(){
    if($_POST){

        $data = array(
            'user_name' => $_POST['user_name'],
            'user_email' => $_POST['user_email'],
            'user_age' => $_POST['user_age'],
            'user_phone' => $_POST['user_phone'],
        );
        $this->User_model->update($data, $this->session->userdata("user_id"));
       //die(var_dump($data));
    }
    
    // $this->load->view('user_profile');

    $this->data['user_profile_update'] = $this->User_model->user_profile_update($this->session->userdata('user_id'));
        
    $this->load->view('user_profile_update', $this->data); 
}

}

?>