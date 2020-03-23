<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class AdminController extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model("AdminModel");
    }

    public function index() {

//        if ($this->session->userdata("administrador")) {
        $this->load->view('AdminView');
//        } else {
//            redirect('welcome');
//        }
    }

    public function insertarCaceria() {
        
        $idcastillo = $this->input->post("idcastillo");
        $lvl1 = $this->input->post("lvl1");
        $lvl2 = $this->input->post("lvl2");
        $lvl3 = $this->input->post("lvl3");
        $lvl4 = $this->input->post("lvl4");
        $lvl5 = $this->input->post("lvl5");
        $fechacaceria = $this->input->post("fechacaceria");
        $fecharegistro = $this->input->post("fecharegistro");       
        $fechamodificacion = $this->input->post("fechamodificacion");
        $this->AdminModel->insertarCaceria($idcastillo, $lvl1, $lvl2, $lvl3, $lvl4, $lvl5,
                $fechacaceria, $fecharegistro, $fechamodificacion);
        echo json_encode(array("msg" => "Caceria agregado"));
    }
    
     public function insertarCastillo() {        
        $rango = $this->input->post("rango");
        $nombre = $this->input->post("nombre");        
        $idlider = $this->input->post("idlider");   
        $this->AdminModel->insertarCastillo($rango, $nombre, $idlider);
        echo json_encode(array("msg" => "Castillo agregado"));
    }   
    

    public function getCacerias() {
        echo json_encode($this->AdminModel->getCacerias());
    }

    public function getCastillos() {
        echo json_encode($this->AdminModel->getCastillos());
    }
    
    public function getCastillos2() {
        echo json_encode($this->AdminModel->getCastillos2());
    }
    
    
     public function getCacerias2() {
        echo json_encode($this->AdminModel->getCacerias2());
    }
    
     public function getFDG2() {
        echo json_encode($this->AdminModel->getFDG2());
    }
    

}
