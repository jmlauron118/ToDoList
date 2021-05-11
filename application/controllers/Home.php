<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller{
    function __construct(){
        parent:: __construct();
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
            redirect(base_url()."login");
        }
    }
}