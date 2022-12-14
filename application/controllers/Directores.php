<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Directores extends CI_Controller {
	// definiendo el constructor de la clase
	public function __construct(){
		parent::__construct();
		$this->load->model("director");
	}
	// renderiza la vista index de directores
	public function index(){
		$data["listadoDirectores"]=$this->director->obtenerTodos();
		$this->load->view('header');
		$this->load->view('directores/index',$data);
		$this->load->view('footer');
	}
	// renderiza la vista nuevo de directores
  public function nuevo(){
    $this->load->view('header');
    $this->load->view('directores/nuevo');
    $this->load->view('footer');
  }
	// funcion para capturar los valores del formulario Nuevo
	public function guardarDirector(){
		$datosNuevoDirector=array(
      "nombre_dir_md"=>$this->input->post('nombre_dir_md'),
			"apellido_dir_md"=>$this->input->post('apellido_dir_md'),
			"cedula_dir_md"=>$this->input->post('cedula_dir_md'),
			"fecha_ingreso_dir_md"=>$this->input->post('fecha_ingreso_dir_md')
		);
		print_r($datosNuevoDirector);
		if ($this->director->insertar($datosNuevoDirector)) {
			redirect('directores/index');
		}else{
			echo "<h1>ERROR</h1>";
		}
	}
	//Función para eliminar directores
	public function borrar($id_dir_md ){
		if ($this->director->eliminarPorId($id_dir_md )){
			redirect('directores/index');
		} else {
			echo "Error al eliminar :(";
		}
	}
	//Función para renderizar formulario de actualización
	public function actualizar($id){
		$data["directorEditar"]=$this->director->ObtenerPorId($id);
		$this->load->view("header");
		$this->load->view("directores/actualizar",$data);
		$this->load->view("footer");
	}
	//Funcion para procesar botón actualización
	public function procesarActualizacion(){
		$datosDirectorEditado=array(
      "nombre_dir_md"=>$this->input->post('nombre_dir_md'),
			"apellido_dir_md"=>$this->input->post('apellido_dir_md'),
			"cedula_dir_md"=>$this->input->post('cedula_dir_md'),
			"fecha_ingreso_dir_md"=>$this->input->post('fecha_ingreso_dir_md')
		);
		$id=$this->input->post("id_dir_md");
		if ($this->director->actualizar($id,$datosDirectorEditado)) {
			redirect('directores/index');
		}else{
			echo "<h1>ERROR</h1>";
		}
	}
}//cierre de la clase NO BORRAR
