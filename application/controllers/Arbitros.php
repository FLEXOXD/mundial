<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Arbitros extends CI_Controller {
	// definiendo el constructor de la clase
	public function __construct(){
		parent::__construct();
		$this->load->model("arbitro");
	}
	// renderiza la vista index de arbitro
	public function index(){
		$data["listadoArbitros"]=$this->arbitro->obtenerTodos();
		$this->load->view('header');
		$this->load->view('arbitros/index',$data);
		$this->load->view('footer');
	}
	// renderiza la vista nuevo de arbitros
  public function nuevo(){
    $this->load->view('header');
    $this->load->view('arbitros/nuevo');
    $this->load->view('footer');
  }
	// funcion para capturar los valores del formulario Nuevo
	public function guardarArbitro(){
		$datosNuevoArbitro=array(
      "nomarb_md"=>$this->input->post('nomarb_md'),
			"fecing_md"=>$this->input->post('fecing_md')
		);

		print_r($datosNuevoArbitro);
		if ($this->arbitro->insertar($datosNuevoArbitro)) {
				$this->session->set_flashdata('confirmacion','Arbitro insertado exitosamente');
		}else{
				$this->session->set_flashdata('error','Error al insertar, verifique e intente de nuevo');
		}
		redirect('arbitros/index');
	}
	//Función para eliminar arbitros
	public function borrar($codarb_md ){
		if ($this->arbitro->eliminarPorId($codarb_md )){
			$this->session->set_flashdata('confirmacion','Arbitro ELIMINADO exitosamente');
	} else {
			$this->session->set_flashdata('error','Error al eliminar, verifique e intente de nuevo');
	}
		redirect('arbitros/index');
	}
	//Función para renderizar formulario de actualización
	public function actualizar($id){
		$data["arbitroEditar"]=$this->arbitro->ObtenerPorId($id);
		$this->load->view("header");
		$this->load->view("arbitros/actualizar",$data);
		$this->load->view("footer");
	}
	//Funcion para procesar botón actualización
	public function procesarActualizacion(){
		$datosArbitroEditado=array(
      "nomarb_md"=>$this->input->post('nomarb_md'),
			"fecing_md"=>$this->input->post('fecing_md')
		);
		$id=$this->input->post("codarb_md");
		if ($this->arbitro->actualizar($id,$datosArbitroEditado)) {
			$this->session->set_flashdata('confirmacion','Arbitro ACTUALIZADO exitosamente');
		}else{
			$this->session->set_flashdata('error','Error al actualizar, verifique e intente de nuevo');
		}
		redirect('arbitros/index');
		echo "<h1>ERROR</h1>";
	}
}//cierre de la clase NO BORRAR
