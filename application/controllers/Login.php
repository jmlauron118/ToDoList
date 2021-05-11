<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends MY_Controller{
    function __construct(){
        parent::__construct();
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->model('UserModel');
    }

    public function index(){
        $this->checkSession();
    }

    public function checkSession(){
        $user_id = $this->session->userdata("user_id");
        
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

        echo $this->UserModel->GetUserByCreds($data["username"], $data["password"]);
    }
}