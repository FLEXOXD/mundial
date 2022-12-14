<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jugadores extends CI_Controller {
	// definiendo el constructor de la clase
	public function __construct(){
		parent::__construct();
		$this->load->model("jugador");
	}
	// renderiza la vista index de jugadores
	public function index(){
		$data["listadoJugadores"]=$this->jugador->obtenerTodos();
		$this->load->view('header');
		$this->load->view('jugadores/index',$data);
		$this->load->view('footer');
	}
	// renderiza la vista nuevo de jugadores
  public function nuevo(){
    $this->load->view('header');
    $this->load->view('jugadores/nuevo');
    $this->load->view('footer');
  }
	// funcion para capturar los valores del formulario Nuevo
	public function guardarJugador(){
		$datosNuevoJugador=array(
      "nombre_jug_md"=>$this->input->post('nombre_jug_md'),
			"apellido_jug_md"=>$this->input->post('apellido_jug_md'),
			"nacionalidad_jug_md"=>$this->input->post('nacionalidad_jug_md'),
			"edad_jug_md"=>$this->input->post('edad_jug_md'),
			"fecha_nacimiento_jug_md"=>$this->input->post('fecha_nacimiento_jug_md')
		);
		print_r($datosNuevoJugador);
		if ($this->jugador->insertar($datosNuevoJugador)) {
			redirect('jugadores/index');
		}else{
			echo "<h1>ERROR</h1>";
		}
	}
	//Función para eliminar jugadores
	public function borrar($id_jug_md){
		if ($this->jugador->eliminarPorId($id_jug_md)){
			redirect('jugadores/index');
		} else {
			echo "Error al eliminar :(";
		}
	}
	//Función para renderizar formulario de actualización
	public function actualizar($id){
		$data["jugadorEditar"]=$this->jugador->ObtenerPorId($id);
		$this->load->view("header");
		$this->load->view("jugadores/actualizar",$data);
		$this->load->view("footer");
	}
	//Funcion para procesar botón actualización
	public function procesarActualizacion(){
		$datosJugadorEditado=array(
			"nombre_jug_md"=>$this->input->post('nombre_jug_md'),
			"apellido_jug_md"=>$this->input->post('apellido_jug_md'),
			"nacionalidad_jug_md"=>$this->input->post('nacionalidad_jug_md'),
			"edad_jug_md"=>$this->input->post('edad_jug_md'),
			"fecha_nacimiento_jug_md"=>$this->input->post('fecha_nacimiento_jug_md')
		);
		$id=$this->input->post("id_jug_md");
		if ($this->jugador->actualizar($id,$datosJugadorEditado)) {
			redirect('jugadores/index');
		}else{
			echo "<h1>ERROR</h1>";
		}
	}
}//cierre de la clase NO BORRAR
