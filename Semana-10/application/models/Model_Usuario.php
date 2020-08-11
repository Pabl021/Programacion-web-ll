<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_Usuario extends CI_Model {

    function __construct(){
        parent::__construct();
        $this->load->database();
    }

    public function selUsu(){
        $query= $this->db->query("SELECT * FROM datos");
        return $query->result();
    }

    public function insertarUsu($nombre, $apellido, $nacionalidad){
       $arrayDatos= array(
            'nombre'=>$nombre,
            'apellido'=>$apellido,
            'nacionalidad'=>$nacionalidad
       );
       $this->db->insert('datos',$arrayDatos);
    }

    public function lisUsu(){
        $query= $this->db->query("SELECT * FROM datos");
        return $query->result();
    }

    public function eliminar($id){
        $query= $this->db->where('id',$id);
        $this->db->delete('datos');
        //redirect("usuario/index");
    }

     public function editar($id){
         $query= $this->db->query("SELECT * FROM datos WHERE id=$id");
         return $query->result();
     }

    public function updateUsu($id,$nombre, $apellido,$nacionalidad){
        $arrayDat= array(
            'nombre'=>$nombre,
            'apellido'=>$apellido,
            'nacionalidad'=>$nacionalidad
       );  
       $this->db->where('id',$id);
       $this->db->update('datos', $arrayDat);
    }



}

