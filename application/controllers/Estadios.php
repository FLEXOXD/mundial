<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Estadios extends CI_Controller {
	// definiendo el constructor de la clase
	public function __construct(){
		parent::__construct();
		$this->load->model("estadio");
	}
	// renderiza la vista index de estadios
	public function index(){
		$data["listadoEstadios"]=$this->estadio->obtenerTodos();
		$this->load->view('header');
		$this->load->view('estadios/index',$data);
		$this->load->view('footer');
	}
	// renderiza la vista nuevo de estadios
  public function nuevo(){
    $this->load->view('header');
    $this->load->view('estadios/nuevo');
    $this->load->view('footer');
  }
	// funcion para capturar los valores del formulario Nuevo
	public function guardarEstadio(){
		$datosNuevoEstadio=array(
      "desest_md"=>$this->input->post('desest_md'),
			"ubiest_md"=>$this->input->post('ubiest_md'),
      "capest_md"=>$this->input->post('capest_md')
		);
		print_r($datosNuevoEstadio);
		if ($this->estadio->insertar($datosNuevoEstadio)) {
			$this->session->set_flashdata('confirmacion','Estadio insertado exitosamente');
	}else{
			$this->session->set_flashdata('error','Error al insertar, verifique e intente de nuevo');
		}
		redirect('estadios/index');
	}
	//Función para eliminar estadios
	public function borrar($codest_md){
		if ($this->estadio->eliminarPorId($codest_md)){
			$this->session->set_flashdata('confirmacion','Estadio ELIMINADO exitosamente');
	} else {
			$this->session->set_flashdata('error','Error al eliminar, verifique e intente de nuevo');
		}
		redirect('estadios/index');
	}
	//Función para renderizar formulario de actualización
	public function actualizar($id){
		$data["estadioEditar"]=$this->estadio->ObtenerPorId($id);
		$this->load->view("header");
		$this->load->view("estadios/actualizar",$data);
		$this->load->view("footer");
	}
	//Funcion para procesar botón actualización
	public function procesarActualizacion(){
		$datosEstadioEditado=array(
      "desest_md"=>$this->input->post('desest_md'),
			"ubiest_md"=>$this->input->post('ubiest_md'),
      "capest_md"=>$this->input->post('capest_md')
		);
		$id=$this->input->post("codest_md");
		if ($this->estadio->actualizar($id,$datosEstadioEditado)) {
			$this->session->set_flashdata('confirmacion','Estadio ACTUALIZADO exitosamente');	
		}else{
			$this->session->set_flashdata('error','Error al actualizar, verifique e intente de nuevo');
		}
		redirect('estadios/index');
		echo "<h1>ERROR</h1>";
	}
}//cierre de la clase NO BORRAR
