<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Selecciones extends CI_Controller {
	// definiendo el constructor de la clase
	public function __construct(){
		parent::__construct();
		$this->load->model("seleccion");
	}
	// renderiza la vista index de selecciones
	public function index(){
		$data["listadoSelecciones"]=$this->seleccion->obtenerTodos();
		$this->load->view('header');
		$this->load->view('selecciones/index',$data);
		$this->load->view('footer');
	}
	// renderiza la vista nuevo de selecciones
  public function nuevo(){
    $this->load->view('header');
    $this->load->view('selecciones/nuevo');
    $this->load->view('footer');
  }
	// funcion para capturar los valores del formulario Nuevo
	public function guardarSeleccion(){
		$datosNuevaSeleccion=array(
      "nombre_selec_md"=>$this->input->post('nombre_selec_md'),
			"descripcion_selec_md"=>$this->input->post('descripcion_selec_md')
		);
		print_r($datosNuevaSeleccion);
		if ($this->seleccion->insertar($datosNuevaSeleccion)) {
			redirect('selecciones/index');
		}else{
			echo "<h1>ERROR</h1>";
		}
	}
	//Función para eliminar selecciones
	public function borrar($id_selec_md){
		if ($this->seleccion->eliminarPorId($id_selec_md)){
			redirect('selecciones/index');
		} else {
			echo "Error al eliminar :(";
		}
	}
	//Función para renderizar formulario de actualización
	public function actualizar($id){
		$data["seleccionEditar"]=$this->seleccion->ObtenerPorId($id);
		$this->load->view("header");
		$this->load->view("selecciones/actualizar",$data);
		$this->load->view("footer");
	}
	//Funcion para procesar botón actualización
	public function procesarActualizacion(){
		$datosSeleccionEditada=array(
      "nombre_selec_md"=>$this->input->post('nombre_selec_md'),
			"descripcion_selec_md"=>$this->input->post('descripcion_selec_md')
		);
		$id=$this->input->post("id_selec_md");
		if ($this->seleccion->actualizar($id,$datosSeleccionEditada)) {
			redirect('selecciones/index');
		}else{
			echo "<h1>ERROR</h1>";
		}
	}
}//cierre de la clase NO BORRAR
