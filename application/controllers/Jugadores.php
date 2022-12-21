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
			"fecha_nacimiento_jug_md"=>$this->input->post('fecha_nacimiento_jug_md'),
			"foto_jug_md"=>$this->input->post('foto_jug_md')
		);
		// Inicio del proceso de subida de fotografía
		$this->load->library("upload"); //activando la libreria de subida de archivos
	 	$new_name = "foto_" . time() . "_" . rand(1, 5000); //generando nombre aleatorio
	 	$config['file_name'] = $new_name;
	 	$config['upload_path'] = FCPATH . 'uploads/jugadores/'; //ruta de subida
	 	$config['allowed_types'] = 'jpg|png'; //pdf|docx
	 	$config['max_size']  = 5*1024; //5MB
	 	$this->upload->initialize($config); //inicializar la configuración
		//validando la subida de archivo
	 	if ($this->upload->do_upload("foto_jug_md")){
		//Que si se subio con éxito
		$dataSubida = $this->upload->data();
		$datosNuevoJugador["foto_jug_md"] = $dataSubida['file_name'];
		} //fin del proceso de subida de archivos

		print_r($datosNuevoJugador);
		if ($this->jugador->insertar($datosNuevoJugador)) {
				$this->session->set_flashdata('confirmacion','Jugador insertado exitosamente');
		}else{
				$this->session->set_flashdata('error','Error al insertar, verifique e intente de nuevo');
		}
		redirect('jugadores/index');
	}
	//Función para eliminar jugadores
	public function borrar($id_jug_md){
		if ($this->jugador->eliminarPorId($id_jug_md)){
				$this->session->set_flashdata('confirmacion','Jugador ELIMINADO exitosamente');
		} else {
			  $this->session->set_flashdata('error','Error al eliminar, verifique e intente de nuevo');
		}
		redirect('jugadores/index');
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
			"fecha_nacimiento_jug_md"=>$this->input->post('fecha_nacimiento_jug_md'),
			"foto_jug_md"=>$this->input->post('foto_jug_md')
		);
		$id=$this->input->post("id_jug_md");
		if ($this->jugador->actualizar($id,$datosJugadorEditado)) {
			$this->session->set_flashdata('confirmacion','Jugador ACTUALIZADO exitosamente');
		}else{
			$this->session->set_flashdata('error','Error al actualizar, verifique e intente de nuevo');
		}
		redirect('jugadores/index');
		echo "<h1>ERROR</h1>";
	}
}//cierre de la clase NO BORRAR
