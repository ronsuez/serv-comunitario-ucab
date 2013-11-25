<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Prestador extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */

	private $controller;

	function __construct(){

		parent::__construct();

			//$this->load->helper('author_helper');

		$this->controller="prestador/";

		$this->load->model("prestador_model");

	}  


	public function index() {

		$this->load->view($this->controller.'ge_prestador');
	}

	public function insertar() {

		$this->load->view($this->controller.'insertar_prestador');
	}

	public function consultar() {

		$this->load->view($this->controller.'consultar_prestador');
	}

	public function asignar_pro() {

		$this->load->view($this->controller.'asignar_proyecto');
	}

	public function hola() {

		$this->load->view($this->controller.'hola');
	}

	public function ver_datos_personales() {

		$id=$this->input->post('id');

		$salida=$this->prestador_model->listar_datos_prestador($id);

		if($salida == -1){

			echo "No se encontro";
		
		} 
		else {

			echo json_encode($salida);

		}
	}   

	public function insertar_datos_prestador()
	{			

		$datos = array("cedula" => $this->input->post('cedula'),
					   "nombre" => $this->input->post('nombre'),
					   "apellido" => $this->input->post('apellido'),
					   "email" => $this->input->post('email'),
					   "celular" => $this->input->post('telefono_cel'),
					   "telefono" => $this->input->post('telefono_hab'),
					   "direccion" => $this->input->post('direccion'),
					   "expediente" => $this->input->post('expediente'),
					   "escuela" => $this->input->post('escuela'),
					   "mencion" => $this->input->post('mencion'),
					   "semestre" => $this->input->post('semestre'));
		

		echo $salida = $this->prestador_model->insertar_datos_prestador($datos);
	}


	public function listar_x_proyecto(){

		$id_proyecto= $this->input->post('id_proyecto');

		$salida = $this->prestador_model->listar_x_pro($id_proyecto);

		echo json_encode($salida);

	}


}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
