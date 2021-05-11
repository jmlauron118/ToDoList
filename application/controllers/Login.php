<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends MY_Controller{
    function __construct(){
        parent::__construct();
        $this->load->helper('form');
        $this->load->helper('url');
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
        $test = $_POST["userData"];

        echo $test["FirstName"];
    }
}