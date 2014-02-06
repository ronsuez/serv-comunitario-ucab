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


		$this->load->model("proyecto_model");
		
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

	public function actualizar_prestador() {
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


		$salida=$this->prestador_model->actualizar_prestador($datos);

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
	
	public function verificar_proyecto(){
		$id=$this->input->post('id');
		$ci=$this->input->post('ci');
		$salida=$this->prestador_model->verificar_estado_proyecto($id,$ci);
		echo json_encode($salida);
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
		$realizado_por = $this->input->post('realizado_por');

		echo $salida = ($this->prestador_model->insertar_datos_reportar_horas($id_prestador,$n_horas,$fecha,$observaciones,$id_proyecto,$estado_proyecto,$realizado_por));

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

public function preparar_datos_reporte($datos_prestador = false ,$datos_proyecto = false , $nombre_proyecto = false, $nombre_comunidad = false, $nombre_asesor = false, $tipo ){

				$array = array("datos"=>$datos_prestador['datos_prestador'],"nombre"=>$datos_proyecto['datos_proyecto'], "nombre_pro"=>$nombre_proyecto, "info_comunidad"=>$nombre_comunidad , "nombre_asesor"=>$nombre_asesor);
		

			 echo $this->load->view($this->controller.$tipo,$array,TRUE);

	}
   

   	public function generar_ch($ci = false ,$id = false , $estado = false){


			$tipo = "control_horas";


				if($this->input->post('id_proyecto')){ 

					$id = $this->input->post('id_proyecto');
				}

				if($this->input->post('ci')){

					$ci = $this->input->post('ci');
				}

  

			 $datos_prestador=$this->prestador_model->listar_datos_prestador($ci);
			 $datos_proyecto=$this->prestador_model->datos_coordinador_asociado($id);
			 $nombre_proyecto = $this->prestador_model->datos_proyecto($id);
			 

			 $this->preparar_datos_reporte($datos_prestador,$datos_proyecto,$nombre_proyecto,0,0,$tipo);
		 		

	}


	public function generar_cc($ci = false ,$id = false , $estado = false){


			$tipo = "carta_culminacion";


				if($this->input->post('id_proyecto')){ 

					$id = $this->input->post('id_proyecto');
				}

				if($this->input->post('ci')){

					$ci = $this->input->post('ci');
				}

  

			 $datos_prestador=$this->prestador_model->listar_datos_prestador($ci);
			 $datos_proyecto=$this->prestador_model->datos_coordinador_asociado($id);
			 $nombre_proyecto = $this->prestador_model->datos_proyecto($id);
			 

			 $this->preparar_datos_reporte($datos_prestador,$datos_proyecto,$nombre_proyecto,0,0,$tipo);
		 		

	}





	public function generar_nc($ci = false , $estado = false){

		$tipo = "notificacion_culminacion";

		if($this->input->post('id_proyecto')){ 

			$id = $this->input->post('id_proyecto');
		}

		if($this->input->post('ci')){

			$ci = $this->input->post('ci');
		}



		$datos_prestador=$this->prestador_model->listar_datos_prestador($ci);
		$datos_proyecto=$this->prestador_model->datos_coordinador_asociado($id);
		$nombre_proyecto = $this->prestador_model->datos_proyecto($id);
		$nombre_comunidad = $this->prestador_model->nombre_comunidad($id);
		$nombre_asesor = $this->prestador_model->nombre_asesor($id);

		
		$this->preparar_datos_reporte($datos_prestador,$datos_proyecto,$nombre_proyecto,$nombre_comunidad,$nombre_asesor,$tipo);


	}

	public function finalizar_proyecto(){

		$ci  = $this->input->post('id_prestador');
		$id = $this->input->post('id_proyecto');

		$salida =$this->prestador_model->cambiar_estado_proyecto($ci,$id);
			if($salida == -1){
			echo "-1";
		}else{
			echo "0";
		}
	}
	
	//-------------------------------------------------------------------------------------------
	    public function generar_constancia_inscripcion_proyecto($ci = false ,$id = false , $estado = false){


            $tipo = "constancia_de_inscripcion_proyecto";


                if($this->input->post('id')){ 

                    $id = $this->input->post('id');
                }

                if($this->input->post('ci')){

                    $ci = $this->input->post('ci');
                }

  

             $datos_prestador=$this->prestador_model->listar_datos_prestador($ci);
             $datos_proyecto=$this->proyecto_model->listar_proyectos($id);
             $cedula_ase=$datos_proyecto[0]['ci_asesor'];
             $array=$this->prestador_model->asesorcito($cedula_ase);
             $array2=$this->prestador_model->listar_id_loc($datos_proyecto[0]['ci_asesor'],$datos_proyecto[0]['id_proyecto']);
             $array3=$this->prestador_model->datos_participa($ci,$id,$datos_proyecto[0]['ci_asesor']);
            // $horas=$this->prestador_model->suma_horas($ci,$id);             //var_dump($array2);
             //var_dump($array3);
             //var_dump($horas);
             $this->datos_reporte_proyecto($datos_prestador,$datos_proyecto,$array,$array2,$array3,$horas,$tipo);
                

    }

    public function datos_reporte_proyecto($datos_prestador = false ,$datos_proyecto = false , $asesor = false, $localidad = false, $participa = false, $horas=false, $tipo ){
                $array = array("datos"=>$datos_prestador['datos_prestador'],"datos_proyecto"=>$datos_proyecto,"datos_localidad"=>$localidad,"datos_asesor"=>$asesor,"datos_participa"=>$participa,"suma_horas"=>$horas);
                     echo $this->load->view($this->controller.$tipo,$array,TRUE);

    }
//--------------------------------------------------------------------------------------------------------------------------------------------------------------------------
 public function generar_notificacion_asignacion($ci = false ,$id = false , $estado = false){


            $tipo = "carta_notificacion_asignacion";


                if($this->input->post('id')){ 

                    $id = $this->input->post('id');
                }

                if($this->input->post('ci')){

                    $ci = $this->input->post('ci');
                }

  

             $datos_prestador=$this->prestador_model->listar_datos_prestador($ci);
             $datos_proyecto=$this->proyecto_model->listar_proyectos($id);
             $cedula_ase=$datos_proyecto[0]['ci_asesor'];
             $array=$this->prestador_model->asesorcito($cedula_ase);
             $array2=$this->prestador_model->listar_id_loc($datos_proyecto[0]['ci_asesor'],$datos_proyecto[0]['id_proyecto']);
             $array3=$this->prestador_model->datos_participa($ci,$id,$datos_proyecto[0]['ci_asesor']);
             //$horas=$this->prestador_model->suma_horas($ci);             //var_dump($array2);
             //var_dump($array);
             //var_dump(horas);
             $this->datos_notificacion_proyecto($datos_prestador,$datos_proyecto,$array,$array2,$tipo);
                

    }

    public function datos_notificacion_proyecto($datos_prestador = false ,$datos_proyecto = false , $asesor = false, $localidad = false, $tipo ){
                $array = array("datos"=>$datos_prestador['datos_prestador'],"datos_proyecto"=>$datos_proyecto,"datos_localidad"=>$localidad,"datos_asesor"=>$asesor);
                     echo $this->load->view($this->controller.$tipo,$array,TRUE);

    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
