<?php
  class Uniforme extends CI_Model
  {
    function __construct()
    {
      parent::__construct();
    }
    public function insertar($datos){
      return $this->db->insert("uniforme",$datos);
    }
    // Función de consulta todos los uniformes de la base de datos
    public function obtenerTodos(){
      $uniformes=$this->db->get("uniforme");
      if ($uniformes->num_rows()>0) {
        return $uniformes;
      } else {
        return false; //cuando no hay datos
      }
    }
    //función para eliminar un uniforme se recibe el //
    public function eliminarPorId($id){
      $this->db->where("coduni_md",$id);
      return $this->db->delete("uniforme");
    }
    //Consultando el uniforme por su id
    public function ObtenerPorId($id){
      $this->db->where("coduni_md",$id);
      $uniforme=$this->db->get("uniforme");
      if ($uniforme->num_rows()>0){
        return $uniforme->row(); //porque solo hay uno
      } else {
        return false;
      }
    }
    //Proceso de actualización de uniformes
    public function actualizar($id,$datos){
      $this->db->where("coduni_md",$id);
      return $this->db->update("uniforme",$datos);
    }
  }//cierre de la clase (No borrar)
