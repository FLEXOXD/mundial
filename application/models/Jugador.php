<?php
  class Jugador extends CI_Model
  {
    function __construct()
    {
      parent::__construct();
    }
    public function insertar($datos){
      return $this->db->insert("jugador",$datos);
    }
    // Función de consulta todos los jugadores de la base de datos
    public function obtenerTodos(){
      $jugadores=$this->db->get("jugador");
      if ($jugadores->num_rows()>0) {
        return $jugadores;
      } else {
        return false; //cuando no hay datos
      }
    }
    //función para eliminar un jugador se recibe el //
    public function eliminarPorId($id){
      $this->db->where("id_jug_md",$id);
      return $this->db->delete("jugador");
    }
    //Consultando el jugador por su id
    public function ObtenerPorId($id){
      $this->db->where("id_jug_md",$id);
      $jugador=$this->db->get("jugador");
      if ($jugador->num_rows()>0){
        return $jugador->row(); //porque solo hay uno
      } else {
        return false;
      }
    }
    //Proceso de actualización de jugadores
    public function actualizar($id,$datos){
      $this->db->where("id_jug_md",$id);
      return $this->db->update("jugador",$datos);
    }
  }//cierre de la clase (No borrar)
