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
		
		$this->load->model("files_model");


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

	public function set_photo() {

			$cedula=$this->input->post('ci');

		echo json_encode($this->files_model->set_photo($cedula));
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

		$datos = array(
                'cedula' => $this->input->post('cedula'),
                'nombre' => $this->input->post('nombre'),
                'apellido' => $this->input->post('apellido'),
                'email' => $this->input->post('email'),
                'celular' => $this->input->post('telefono_cel'),
                'telefono' => $this->input->post('telefono_hab'),
                'direccion' => $this->input->post('direccion'),
                'expediente' => $this->input->post('expediente'),
                'escuela' => $this->input->post('escuela'),
                'mencion' => $this->input->post('mencion'),
                'semestre' => $this->input->post('semestre'));


		$salida=$this->prestador_model->insertar_datos($datos);

		echo $salida;
	}


	public function listar_x_proyecto(){

		$id_proyecto= $this->input->post('id_proyecto');

		$salida = $this->prestador_model->listar_x_pro($id_proyecto);

		echo json_encode($salida);

	}
  
	public function listar_prestador(){

		$query  = $this->input->post('q');
		$option = $this->input->post('o');
		$escuela = $this->input->post('esc');

		//echo "server->".$query."->".$option;

		$salida= $this->prestador_model->buscar_prestador($query,$option,$escuela);


			if($salida!="-1"){

				echo json_encode($salida);
	
			}else{

				echo "-1";
			}

	}

	public function consultar_proyectos_inscritos(){

		$ci_prestador = $this->input->post('ci');
		$option = $this->input->post('option');

		$salida= $this->prestador_model->buscar_proyectos_prestador($ci_prestador);

		if ($salida!="-1"){

			if($option=="1"){
				echo json_encode($salida);	
			}else{
				echo "0"; //tiene proyectos asignados
			}
			
		}else{
			echo "-1";//no tiene proyectos asignados
		}

	}

	
	public function verdetalles(){

		$nombre= $this->input->post('id');

		$salida= $this->prestador_model->datos_proyecto($nombre);


			if($salida!="-1"){

				echo json_encode($salida);
	
			}else{

				echo "-1";
			}
		//echo json_encode($salida);


	}

	public function consultar_nombre_proyecto(){

			$ci_prestador = $this->input->post('ci');
			$salida = $this->prestador_model->b_nombres_proyectos($ci_prestador);

			if($salida!="-1"){

				echo json_encode($salida);
	
			}else{

				echo "No se encontro nada";
			}
	}
	//-----------------------------funciones de asignar proyecto.php
	public function ver_datos_asesor(){
		$query  = $this->input->post('q');
		$option = $this->input->post('o');
		//$id=$this->input->post('cedula_asesor');
		
		$salida=$this->prestador_model->listar_datos_asesor($query,$option);
		if($salida == -1){
			echo "-1";
		}else{
			echo json_encode($salida);
		}
	}
	
	public function verificar_proyecto(){
		$id=$this->input->post('id');
		$ci=$this->input->post('ci');
		$salida=$this->prestador_model->verificar_estado_proyecto($id,$ci);
		echo json_encode($salida);
	}
	public function insertar_asesor(){
		$nombre = $this->input->post('nombre_ase');
		$apellido = $this->input->post('apellido_ase');
		$email = $this->input->post('email_ase');
		$cedula = $this->input->post('cedula_ase');
		$telefono = $this->input->post('telefono_ase');
		$direccion = $this->input->post('direccion_ase');
		$celular = $this->input->post('celular_ase');
		$salida = $this->prestador_model->insertar_asesor($nombre,$apellido,$email,$cedula,$celular,$telefono,$direccion);
		if($salida == -1){
			echo("Asesor no insertado");
			
		}else{
			echo("Asesor ingresado con exito");
		}
	}
	
	public function asociar_proyecto(){
		$f_proyecto = $this->input->post('fecha_proyecto');
		$proyecto = $this->input->post('codigo_proyecto');
		$prestador = $this->input->post('cedula_pres');
		$lunes = $this->input->post('lu');
		$martes = $this->input->post('ma');
		$miercoles = $this->input->post('mier');
		$jueves = $this->input->post('jue');
		$viernes = $this->input->post('vier');
		$sabado = $this->input->post('sa');
		$domingo = $this->input->post('dom');
		
		$salida = $this->prestador_model->asociar_proyecto($f_proyecto,$proyecto,$prestador,$lunes,$martes,$miercoles,$jueves,$viernes,$sabado,$domingo);
		
			echo json_encode($salida);
		
	}

	
public function insertar_datos_reportar_horas(){			

	$id_prestador = $this->input->post('id_prestador');
	$n_horas = $this->input->post('horas_realizadas_proyecto');
	$fecha = $this->input->post('fecha_avance');
	$observaciones = $this->input->post('observaciones_proyecto');
	$id_proyecto = $this->input->post('idproyecto');
	$estado_proyecto = $this->input->post('estadoact');	
	

	
		echo $salida = ($this->prestador_model->insertar_datos_reportar_horas($id_prestador,$n_horas,$fecha,$observaciones,$id_proyecto,$estado_proyecto));
	

	}

public function datos_horas_insertadas(){

$id_prestador = $this->input->post("id_prestador");
$id_proyecto = $this->input->post("id_proyecto");

$salida = $this->prestador_model->datos_horas_insertadas($id_prestador,$id_proyecto);

echo json_encode($salida);

}
public function horario_trabajo(){

	$id_prestador = $this->input->post("id_prestador");
	$id_proyecto = $this->input->post("id_proyecto");

	$salida = $this->prestador_model->horario_trabajo($id_prestador,$id_proyecto);

echo json_encode($salida);

}

public function suma_horas(){

		$id_prestador = $this->input->post("id_prestador");
		$id_proyecto = $this->input->post("id_proyecto");

		$salida = $this->prestador_model->suma_horas($id_prestador,$id_proyecto);

	echo json_encode($salida);

	}

	public function suma_horas_totales(){

		$id_prestador = $this->input->post("id_prestador");

		$salida = $this->prestador_model->suma_horas_totales($id_prestador);

	echo json_encode($salida);

	}



/*reportes*/

public function preparar_datos_reporte($data,$estado){

				$array = array("datos"=>$data['datos_prestador'], "estado"=>$estado);


			 echo $this->load->view($this->controller."carta_culminacion",$array,TRUE);

	}
   


	public function generar_cc($id = false , $estado = false){


				if($this->input->post('id')){ 

					$id = $this->input->post('id');
				}
  

			 $salida=$this->prestador_model->listar_datos_prestador($id);
	
		
			 $this->preparar_datos_reporte($salida,$estado);
		 		

	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
