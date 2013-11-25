<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Proyecto extends CI_Controller {

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

			$this->controller="proyecto/";

			$this->load->model("proyecto_model");

		}


	public function index()
	{
	
		$this->load->view($this->controller.'ge_proyecto');
	}

	public function inscribir()
	{
	
		$this->load->view($this->controller.'insertar_proyecto');
	}

	public function modificar()
	{
	
		$this->load->view($this->controller.'modificar');
	}

	
	

	public function ver_datos_coordinador()
	{
	 				$id2=$this->input->post('id2');

			 		$salida=$this->proyecto_model->listar_datos_coordinador($id2);
	
			
			 echo json_encode($salida);
		 		
			 
	}


		public function ver_proyectos()
	{
	 				$id=$this->input->post('id_proyecto');

			 		$salida=$this->proyecto_model->listar_proyectos($id,"consultar");
	
			
			 echo json_encode($salida);
		 		
			 
	}


		public function buscar()
	{
	 				if($this->input->post('query'))
	 					$id=$this->input->post('query');
	 				else
	 					redirect("/dashboard");

			 		$salida=$this->proyecto_model->buscar_proyectos($id);
	
			
			 echo json_encode($salida);
		 		
			 
	}

	public function preparar_datos_reporte($data,$estado){

				$array = array("datos"=>$data, "estado"=>$estado);


			 echo $this->load->view($this->controller."ver_proyecto",$array,TRUE);

	}
   


	public function generar_reporte($id = false , $estado = false){


				if($this->input->post('id_proyecto')){ 

					$id = $this->input->post('id_proyecto');
				}
  

			 $salida=$this->proyecto_model->listar_proyectos($id);
	
		
			 $this->preparar_datos_reporte($salida,$estado);
		 		

	}



	 public function registrar(){

		    $informacion = json_decode($this->input->post('texto'),true);

		    $datos = json_decode($this->input->post('datos'),true);

		    $estado = $this->input->post('estado');


		     $array = array_merge($datos, $informacion);

		    $id = $this->proyecto_model->registrar_proyecto($array);

		   // echo $id;

		  	$this->generar_reporte($id,$estado);


		   }



}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
