<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Uniformes extends CI_Controller {
	// definiendo el constructor de la clase
	public function __construct(){
		parent::__construct();
		$this->load->model("uniforme");
	}
	// renderiza la vista index de uniforme
	public function index(){
		$data["listadoUniformes"]=$this->uniforme->obtenerTodos();
		$this->load->view('header');
		$this->load->view('uniformes/index',$data);
		$this->load->view('footer');
	}
	// renderiza la vista nuevo de arbitro
  public function nuevo(){
    $this->load->view('header');
    $this->load->view('uniformes/nuevo');
    $this->load->view('footer');
  }
	// funcion para capturar los valores del formulario Nuevo
	public function guardarUniforme(){
		$datosNuevoUniforme=array(
      "short_md"=>$this->input->post('short_md'),
			"medias_md"=>$this->input->post('medias_md')
		);
		// Inicio del proceso de subida de fotografía
		$this->load->library("upload"); //activando la libreria de subida de archivos
	 	$new_name = "foto_" . time() . "_" . rand(1, 5000); //generando nombre aleatorio
	 	$config['file_name'] = $new_name;
	 	$config['upload_path'] = FCPATH . 'uploads/uniformes/'; //ruta de subida
	 	$config['allowed_types'] = 'jpg|png'; //pdf|docx
	 	$config['max_size']  = 5*1024; //5MB
	 	$this->upload->initialize($config); //inicializar la configuración
		//validando la subida de archivo
	 	if ($this->upload->do_upload("short_md")){
		//Que si se subio con éxito
		$dataSubida = $this->upload->data();
		$datosNuevoUniforme["short_md"] = $dataSubida['file_name'];
		} //fin del proceso de subida de archivos
    if ($this->upload->do_upload("medias_md")){
		//Que si se subio con éxito
		$dataSubida = $this->upload->data();
		$datosNuevoUniforme["medias_md"] = $dataSubida['file_name'];
		} //fin del proceso de subida de archivos
		print_r($datosNuevoUniforme);
		if ($this->uniforme->insertar($datosNuevoUniforme)) {
				$this->session->set_flashdata('confirmacion','Uniforme insertado exitosamente');
		}else{
				$this->session->set_flashdata('error','Error al insertar, verifique e intente de nuevo');
		}
		redirect('uniformes/index');
	}
	//Función para eliminar uniformes
	public function borrar($coduni_md){
		if ($this->uniforme->eliminarPorId($coduni_md)){
				$this->session->set_flashdata('confirmacion','Uniforme ELIMINADO exitosamente');
		} else {
			  $this->session->set_flashdata('error','Error al eliminar, verifique e intente de nuevo');
		}
		redirect('uniformes/index');
	}
	//Función para renderizar formulario de actualización
	public function actualizar($id){
		$data["uniformeEditar"]=$this->uniforme->ObtenerPorId($id);
		$this->load->view("header");
		$this->load->view("uniformes/actualizar",$data);
		$this->load->view("footer");
	}
	//Funcion para procesar botón actualización
	public function procesarActualizacion(){
		$datosUniformeEditado=array(
      "short_md"=>$this->input->post('short_md'),
			"medias_md"=>$this->input->post('medias_md')
		);
		$id=$this->input->post("coduni_md");
		if ($this->uniforme->actualizar($id,$datosUniformeEditado)) {
			$this->session->set_flashdata('confirmacion','Uniforme ACTUALIZADO exitosamente');
		}else{
			$this->session->set_flashdata('error','Error al actualizar, verifique e intente de nuevo');
		}
		redirect('uniformes/index');
		echo "<h1>ERROR</h1>";
	}
}//cierre de la clase NO BORRAR
