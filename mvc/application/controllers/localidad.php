<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Localidad extends CI_Controller {

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

			$this->controller="localidad/";

			$this->load->model('localidad_model');

		}


	public function index()
	{
	
		$this->load->view($this->controller.'panel');
	}


	public function insertar()
	{
	
		$this->load->view($this->controller.'insertar_localidad');
	}

	public function consultar()
	{
	
		$this->load->view($this->controller.'consultar_localidad');
	}
	
	public function insertar_datos_localidad(){			

	$nombre = $this->input->post('nombre_loc');
	$responsable = $this->input->post('responsable_loc');
	$email = $this->input->post('email_loc');
	$telefono = $this->input->post('telefono_loc');	
	$parroquia = $this->input->post ('parroquia_loc');
	$direccion = $this->input->post ('direccion_loc');

	
		echo $salida = ($this->localidad_model->insertar_datos_localidad($nombre,$responsable,$email,$telefono,$parroquia,$direccion));
	}
	
	public function ver_datos_localidad() {

		$id=$this->input->post('id');

		$salida=$this->localidad_model->listar_datos_localidad($id);

		if($salida == -1){

			echo "No se encontro";
		
		} 
		else {

			echo json_encode($salida);

		}
	}   
	
	public function listar()
	{
		
			echo json_encode($this->localidad_model->listar());
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
