<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('Model_Usuario');
    }

    public function index(){
        $data['contenido']="usuario/index";
        $data['selUsu']=$this->Model_Usuario->selUsu();
        $data['lisUsu']=$this->Model_Usuario->lisUsu();
        
        $this->load->view("principal",$data);
    }

    public function insertar(){
       $datos= $this->input->post();
        if(isset($datos)){
          $nombre= $datos['nombre'];
          $apellido= $datos['apellido'];
          $nacionalidad= $datos['nacionalidad'];
          $this->Model_Usuario->insertarUsu($nombre, $apellido,$nacionalidad);
          //preguntar al profe
         // redirect("usuario/index");       
        }

    }

    public function eliminar($id=null){
       if($id!=null){
            $this->Model_Usuario->eliminar($id);
       }
    }

    public function editar($id=null){
        if($id!=null){
            $data['contenido']='usuario/editar';
            $data['datos']=$this->Model_Usuario->editar($id);
            $this->load->view("principal",$data);
        }else{
            //redirect("usuario/index");
        }
     }

     public function update(){
        $datos= $this->input->post();
        //var_dump($datos);
        if(isset($datos)){
            $id= $datos['id'];
          $nombre= $datos['nombre'];
          $apellido= $datos['apellido'];
          $nacionalidad= $datos['nacionalidad'];
          $this->Model_Usuario->updateUsu($id,$nombre, $apellido,$nacionalidad);
          //preguntar al profe
         // redirect("usuario/index");       
        }

     }
 



}

