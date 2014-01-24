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

	
	public function asesor() 
	{
		$this->load->view($this->controller.'asesor');
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

		    $asesor = $this->input->post('ci_asesor');

		    $coordinador = $this->input->post('ci_coord');


		     $array = array_merge($datos, $informacion);

		    $id = $this->proyecto_model->registrar_proyecto($array,$asesor,$coordinador);

		   // echo $id;

		  	$this->generar_reporte($id,$estado);


		   }




	 public function actualizar(){

		    $informacion = json_decode($this->input->post('texto'),true);

		    $datos = json_decode($this->input->post('datos'),true);

		    $estado = $this->input->post('estado');

		    $asesor = $this->input->post('ci_asesor');

		    $coordinador = $this->input->post('ci_coord');

		    $id = $this->input->post('id');

		    $array = array_merge($datos, $informacion);

		    $id = $this->proyecto_model->actualizar_proyecto($id,$array,$asesor,$coordinador);

		    echo $id;

		  //	$this->generar_reporte($id,$estado);


		   }


	public function insertar_asesor(){
		$nombre = $this->input->post('nombre_ase');
		$apellido = $this->input->post('apellido_ase');
		$email = $this->input->post('email_ase');
		$cedula = $this->input->post('cedula_ase');
		$telefono = $this->input->post('telefono_ase');
		$direccion = $this->input->post('direccion_ase');
		$celular = $this->input->post('celular_ase');
		$salida = $this->proyecto_model->insertar_asesor($nombre,$apellido,$email,$cedula,$celular,$telefono,$direccion);
		if($salida === 1){
			echo("Asesor no insertado");
			
		}else{
			echo("Asesor ingresado con exito");
		}
	}

		public function ver_datos_asesor(){
		$query  = $this->input->post('q');
		$option = $this->input->post('o');
		//$id=$this->input->post('cedula_asesor');
		
		$salida=$this->proyecto_model->listar_datos_asesor($query,$option);
		if($salida == -1){
			echo "-1";
		}else{
			echo json_encode($salida);
		}
	}



	public function listar_a_x_proyecto(){

		$id_asesor= $this->input->post('id_asesor');

		$salida = $this->proyecto_model->listar_a_x_pro($id_asesor);

		echo json_encode($salida);

	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
