<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class empleadoModel extends CI_Model {

    function __construct(){
        parent::__construct();
       
    }

    public function guardarEmpleado($nombre, $apellido, $nacionalidad)
    {
        return $this->db->query("INSERT INTO datos(nombre, apellido, nacionalidad) 
        values({$nombre}, {$apellido}, {$nacionalidad})");
    }

    // public function getPost()
    //   {
    //     return $this->bd->get('datos');
    //   }

    //   public function getPostNom(){
    //       $this->db->query("SELECT * FROM datos");
    //       return $result->row();
    //   }



}
