<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller{
    protected $data = array();

    function __construct(){
        parent:: __construct();
    }

    public function layout(){
        $this->partials["header"] = $this->load->view("partials/header", $this->data, TRUE);
        $this->partials["footer"] = $this->load->view("partials/footer", $this->data, TRUE);
        $this->partials["page"] = $this->load->view($this->page, $this->data, TRUE);
        $this->load->view("shared/layout", $this->partials);
    }
}