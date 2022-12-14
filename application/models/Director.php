<?php
  class Director extends CI_Model
  {
    function __construct()
    {
      parent::__construct();
    }
    public function insertar($datos){
      return $this->db->insert("director",$datos);
    }
    // Función de consulta todos los directores de la base de datos
    public function obtenerTodos(){
      $directores=$this->db->get("director");
      if ($directores->num_rows()>0) {
        return $directores;
      } else {
        return false; //cuando no hay datos
      }
    }
    //función para eliminar un director se recibe el //
    public function eliminarPorId($id){
      $this->db->where("id_dir_md",$id);
      return $this->db->delete("director");
    }
    //Consultando el director por su id
    public function ObtenerPorId($id){
      $this->db->where("id_dir_md ",$id);
      $director=$this->db->get("director");
      if ($director->num_rows()>0){
        return $director->row(); //porque solo hay uno
      } else {
        return false;
      }
    }
    //Proceso de actualización de directores
    public function actualizar($id,$datos){
      $this->db->where("id_dir_md",$id);
      return $this->db->update("director",$datos);
    }
  }//cierre de la clase (No borrar)
