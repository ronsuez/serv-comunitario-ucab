
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

	public function mapa()
	{
	
		$this->load->view($this->controller.'ver_mapa');
	}
	
	public function insertar_datos_localidad(){			

	$nombre = $this->input->post('nombre_loc');
	$responsable = $this->input->post('responsable_loc');
	$email = $this->input->post('email_loc');
	$telefono = $this->input->post('telefono_loc');	
	$parroquia = $this->input->post ('parroquia_loc');
	$direccion = $this->input->post ('direccion_loc');
	$latitud = $this->input->post ('latitud_loc');
	$longitud= $this->input->post ('longitud_loc');

	
		echo $salida = ($this->localidad_model->insertar_datos_localidad($nombre,$responsable,$email,$telefono,$parroquia,$direccion,$latitud,$longitud));
	

	}

	public function modificar_datos_localidad(){			

	$nombre = $this->input->post('nombre_loc1');
	$responsable = $this->input->post('responsable_loc1');
	$email = $this->input->post('email_loc1');
	$telefono = $this->input->post('telefono_loc1');	
	$parroquia = $this->input->post ('parroquia_loc1');
	$direccion = $this->input->post ('direccion_loc1');
	
		echo $salida = ($this->localidad_model->modificar_datos_localidad($nombre,$responsable,$email,$telefono,$parroquia,$direccion));
	

	}

// esta funcion es para buscar loclaidades
	public function listar_localidad(){

		$query  = $this->input->post('q');
		$option = $this->input->post('o');

		//echo "server->".$query."->".$option;

		$salida= $this->localidad_model->buscar_localidad($query,$option);


			if($salida!="-1"){

				echo json_encode($salida);
	
			}else{

				echo "-1";
			}

	}
	
	public function ver_datos_localidad() {

		$id=$this->input->post('id');

		$salida=$this->localidad_model->listar_datos_local($id);

		if($salida == -1){

			echo json_encode(array('estado'=>"-1"));
		
		} 
		else {

			echo json_encode($salida);

		}
	}   
	

	// esta funcio  es para poblar el mapa
	public function listar()
	{
		
			echo json_encode($this->localidad_model->listar());
	}


	//funcion para listar los proyectos en ejecucion en una localidad

	public function pro_en_ejec(){

			$id=$this->input->post('id');

		$salida=$this->localidad_model->listar_proyectos_asociados($id);

		echo json_encode($salida);


	}




}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
