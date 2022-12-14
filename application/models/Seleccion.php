<?php
  class Seleccion extends CI_Model
  {
    function __construct()
    {
      parent::__construct();
    }
    public function insertar($datos){
      return $this->db->insert("seleccion",$datos);
    }
    // Función de consulta todos los selecciones de la base de datos
    public function obtenerTodos(){
      $selecciones=$this->db->get("seleccion");
      if ($selecciones->num_rows()>0) {
        return $selecciones;
      } else {
        return false; //cuando no hay datos
      }
    }
    //función para eliminar un seleccion se recibe el //
    public function eliminarPorId($id){
      $this->db->where("id_selec_md",$id);
      return $this->db->delete("seleccion");
    }
    //Consultando el seleccion por su id
    public function ObtenerPorId($id){
      $this->db->where("id_selec_md",$id);
      $seleccion=$this->db->get("seleccion");
      if ($seleccion->num_rows()>0){
        return $seleccion->row(); //porque solo hay uno
      } else {
        return false;
      }
    }
    //Proceso de actualización de selecciones
    public function actualizar($id,$datos){
      $this->db->where("id_selec_md",$id);
      return $this->db->update("seleccion",$datos);
    }
  }//cierre de la clase (No borrar)
