<?php
  class Arbitro extends CI_Model
  {
    function __construct()
    {
      parent::__construct();
    }
    public function insertar($datos){
      return $this->db->insert("arbitro",$datos);
    }
    // Función de consulta todos los arbitros de la base de datos
    public function obtenerTodos(){
      $arbitros=$this->db->get("arbitro");
      if ($arbitros->num_rows()>0) {
        return $arbitros;
      } else {
        return false; //cuando no hay datos
      }
    }
    //función para eliminar un arbitro se recibe el //
    public function eliminarPorId($id){
      $this->db->where("codarb_md",$id);
      return $this->db->delete("arbitro");
    }
    //Consultando el arbitro por su id
    public function ObtenerPorId($id){
      $this->db->where("codarb_md ",$id);
      $director=$this->db->get("arbitro");
      if ($director->num_rows()>0){
        return $director->row(); //porque solo hay uno
      } else {
        return false;
      }
    }
    //Proceso de actualización de arbitros
    public function actualizar($id,$datos){
      $this->db->where("codarb_md",$id);
      return $this->db->update("arbitro",$datos);
    }
  }//cierre de la clase (No borrar)
