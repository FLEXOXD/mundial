<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Paises extends CI_Controller {
	// definiendo el constructor de la clase
	public function __construct(){
		parent::__construct();
		$this->load->model("pais");
	}
	// renderiza la vista index de paises
	public function index(){
		$data["listadoPaises"]=$this->pais->obtenerTodos();
		$this->load->view('header');
		$this->load->view('paises/index',$data);
		$this->load->view('footer');
	}
	// renderiza la vista nuevo de paises
  public function nuevo(){
    $this->load->view('header');
    $this->load->view('paises/nuevo');
    $this->load->view('footer');
  }
	// funcion para capturar los valores del formulario Nuevo
	public function guardarPais(){
		$datosNuevoPais=array(
      "nombre_pa_md"=>$this->input->post('nombre_pa_md'),
			"descripcion_pa_md"=>$this->input->post('descripcion_pa_md')
		);
		print_r($datosNuevoPais);
		if ($this->pais->insertar($datosNuevoPais)) {
			$this->session->set_flashdata('confirmacion','Pais insertado exitosamente');
	}else{
			$this->session->set_flashdata('error','Error al insertar, verifique e intente de nuevo');
		}
		redirect('paises/index');
	}
	//Función para eliminar paises
	public function borrar($id_pa_md){
		if ($this->pais->eliminarPorId($id_pa_md)){
			$this->session->set_flashdata('confirmacion','Pais ELIMINADO exitosamente');
	} else {
			$this->session->set_flashdata('error','Error al eliminar, verifique e intente de nuevo');
		}
		redirect('paises/index');
	}
	//Función para renderizar formulario de actualización
	public function actualizar($id){
		$data["paisEditar"]=$this->pais->ObtenerPorId($id);
		$this->load->view("header");
		$this->load->view("paises/actualizar",$data);
		$this->load->view("footer");
	}
	//Funcion para procesar botón actualización
	public function procesarActualizacion(){
		$datosPaisEditado=array(
      "nombre_pa_md"=>$this->input->post('nombre_pa_md'),
			"descripcion_pa_md"=>$this->input->post('descripcion_pa_md')
		);
		$id=$this->input->post("id_pa_md");
		if ($this->pais->actualizar($id,$datosPaisEditado)) {
			redirect('paises/index');
		}else{
			echo "<h1>ERROR</h1>";
		}
	}
}//cierre de la clase NO BORRAR
