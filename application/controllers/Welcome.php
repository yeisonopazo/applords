<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

    public function __construct(){
        parent::__construct();
//        $this->load->model('AdminModel');
    }

    public function index() {
        $this->load->view('index');
    }

    public function Administrar() {
        $this->load->view('AdminView');
    }

}
