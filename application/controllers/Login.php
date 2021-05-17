<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends MY_Controller{
    function __construct(){
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->model('UserModel');
    }

    public function index(){
        $this->checkSession();
    }

    public function checkSession(){
       $user_id = $this->session->userdata("id");
        
        if(isset($user_id)){
            $this->page = "home/home";
            $this->layout();
        }
        else{
            $this->load->view("login/index");
        }
    }

    public function signUp(){
        $data = $_POST["userData"];
        echo $this->UserModel->AddUser($data);
    }

    public function signIn(){
        $data = $_POST["userCreds"];
        $result = $this->UserModel->GetUserByCreds($data["username"], $data["password"]);

        echo json_encode($result);
    }
}