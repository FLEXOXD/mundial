<?php
  class Estadio extends CI_Model
  {
    function __construct()
    {
      parent::__construct();
    }
    public function insertar($datos){
      return $this->db->insert("estadio",$datos);
    }
    // Función de consulta todos los estadios de la base de datos
    public function obtenerTodos(){
      $estadios=$this->db->get("estadio");
      if ($estadios->num_rows()>0) {
        return $estadios;
      } else {
        return false; //cuando no hay datos
      }
    }
    //función para eliminar un estadio se recibe el //
    public function eliminarPorId($id){
      $this->db->where("codest_md",$id);
      return $this->db->delete("estadio");
    }
    //Consultando el estadio por su id
    public function ObtenerPorId($id){
      $this->db->where("codest_md",$id);
      $estadio=$this->db->get("estadio");
      if ($estadio->num_rows()>0){
        return $estadio->row(); //porque solo hay uno
      } else {
        return false;
      }
    }
    //Proceso de actualización de estadios
    public function actualizar($id,$datos){
      $this->db->where("codest_md",$id);
      return $this->db->update("estadio",$datos);
    }
  }//cierre de la clase (No borrar)
