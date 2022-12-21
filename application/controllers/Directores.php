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
			"fecha_ingreso_dir_md"=>$this->input->post('fecha_ingreso_dir_md'),
			"foto_dir_md"=>$this->input->post('foto_dir_md')
		);

		// Inicio del proceso de subida de fotografía
		$this->load->library("upload"); //activando la libreria de subida de archivos
	 	$new_name = "foto_" . time() . "_" . rand(1, 5000); //generando nombre aleatorio
	 	$config['file_name'] = $new_name;
	 	$config['upload_path'] = FCPATH . 'uploads/directores/'; //ruta de subida
	 	$config['allowed_types'] = 'jpg|png'; //pdf|docx
	 	$config['max_size']  = 5*1024; //5MB
	 	$this->upload->initialize($config); //inicializar la configuración
		//validando la subida de archivo
	 	if ($this->upload->do_upload("foto_dir_md")){
		//Que si se subio con éxito
		$dataSubida = $this->upload->data();
		$datosNuevoDirector["foto_dir_md"] = $dataSubida['file_name'];
		} //fin del proceso de subida de archivos

		print_r($datosNuevoDirector);
		if ($this->director->insertar($datosNuevoDirector)) {
				$this->session->set_flashdata('confirmacion','Director insertado exitosamente');
		}else{
				$this->session->set_flashdata('error','Error al insertar, verifique e intente de nuevo');
		}
		redirect('directores/index');
	}
	//Función para eliminar directores
	public function borrar($id_dir_md ){
		if ($this->director->eliminarPorId($id_dir_md )){
			$this->session->set_flashdata('confirmacion','Director ELIMINADO exitosamente');
	} else {
			$this->session->set_flashdata('error','Error al eliminar, verifique e intente de nuevo');
	}
		redirect('directores/index');
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
			"fecha_ingreso_dir_md"=>$this->input->post('fecha_ingreso_dir_md'),
			"foto_dir_md"=>$this->input->post('foto_dir_md')
		);
		$id=$this->input->post("id_dir_md");
		if ($this->director->actualizar($id,$datosDirectorEditado)) {
			redirect('directores/index');
		}else{
			echo "<h1>ERROR</h1>";
		}
	}
}//cierre de la clase NO BORRAR
