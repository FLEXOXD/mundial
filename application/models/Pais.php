<?php
  class Pais extends CI_Model
  {
    function __construct()
    {
      parent::__construct();
    }
    public function insertar($datos){
      return $this->db->insert("pais",$datos);
    }
    // Función de consulta todos los paises de la base de datos
    public function obtenerTodos(){
      $paises=$this->db->get("pais");
      if ($paises->num_rows()>0) {
        return $paises;
      } else {
        return false; //cuando no hay datos
      }
    }
    //función para eliminar un pais se recibe el //
    public function eliminarPorId($id){
      $this->db->where("id_pa_md",$id);
      return $this->db->delete("pais");
    }
    //Consultando el pais por su id
    public function ObtenerPorId($id){
      $this->db->where("id_pa_md",$id);
      $pais=$this->db->get("pais");
      if ($pais->num_rows()>0){
        return $pais->row(); //porque solo hay uno
      } else {
        return false;
      }
    }
    //Proceso de actualización de paises
    public function actualizar($id,$datos){
      $this->db->where("id_pa_md",$id);
      return $this->db->update("pais",$datos);
    }
  }//cierre de la clase (No borrar)
