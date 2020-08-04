<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class empleado extends CI_Controller {

    //cargar modelo automaticamente
    function __construct(){
        parent::__construct();
        $this->load->model("empleadoModel");
    }

	public function guardarDatos(){
		if($this->input->post()){
            $nombre=$this->db->escape($_POST["nombre"]);
            $apellido=$this->db->escape($_POST["apellido"]);
            $nacionalidad=$this->db->escape($_POST["nacionalidad"]);
            if($this->empleadoModel->guardarEmpleado($nombre, $apellido, $nacionalidad)){
                $this->load ->view('welcome_message');
            }              
            
        }
    }
    
    // public function index(){
    //      $result= $this->db->get('datos');
    //      $consulta['consulta']=$result;
    //     $this->load->view('welcome_message',$consulta);
    // }


}
