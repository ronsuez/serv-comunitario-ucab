<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Administrador extends CI_Controller {

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

		$this->controller="administrador/";

		$this->load->model("usuario_model");

		$this->load->model("administrador_model");

		$this->load->library('postmark');

	}


	public function index()
	{
	
		$this->load->view($this->controller.'ge_administrador');
	}

	public function admin_usuarios()
	{

		$this->load->view($this->controller.'ge_administrador');
	}

	public function modificar()
	{

		$this->load->view($this->controller.'modificar');
	}


	public function admin_coordinadores()
	{
	
		$this->load->view($this->controller.'admin_coordinadores');
	}


	public function registrar_usuario()
	{

		$this->load->view($this->controller.'reg_mod_usuario');
	}
	

	public function ver_usuarios()
	{

			 $salida=$this->usuario_model->traer_usuarios();
	
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


	public function send_mail($email,$title,$html) {

		$this->postmark->from( 'info@rsuezdev.com', 'servcom-ucab' );
		$this->postmark->to($email);

		$this->postmark->subject($title);
		$this->postmark->message($html);


		$retorno = $this->postmark->send();

		if ($retorno)
			return 1;
		else
			return 0;


	}
   
	public function registrar_datos_usuario() {

		$datos = array(
				'user' => $this->input->post('user'),
				'cedula' => $this->input->post('cedula'),
				'user' => $this->input->post('user'),
				'pass' => $this->input->post('pass'),
                'tipo' => $this->input->post('tipo_usuario'),
                'nombre' => $this->input->post('nombre'),
                'apellido' => $this->input->post('apellido'),
                'email' => $this->input->post('email'),
                'celular' => $this->input->post('celular'),
                'telefono' => $this->input->post('telefono'),
                'escuela' => $this->input->post('escuela'));


        $email = $datos['email'];

        $user = $datos['user'];

        $pass = $datos['pass'];

        $cuerpo = "Su username es: ".$user." y su contraseña es: ".$pass;
 
        $tipo = $this->input->post('tipo_usuario');

		$salida = $this->administrador_model->registrar_datos_usuario($datos, $tipo);

		if(!$salida){

			if($this->send_mail($email,"Bienvenido a Servcom",$cuerpo)){

				echo "0";
			}else
			{
				echo "-1";
			}
		}else
			{
				echo "-1";
		}
			

	}

	public function actualizar_datos_usuario() {

		$datos = array(
				'cedula' => $this->input->post('cedula'),
				'user' => $this->input->post('user'),
				'pass' => $this->input->post('pass'),
                'tipo' => $this->input->post('tipo_usuario'),
                'nombre' => $this->input->post('nombre'),
                'apellido' => $this->input->post('apellido'),
                'email' => $this->input->post('email'),
                'celular' => $this->input->post('celular'),
                'telefono' => $this->input->post('telefono'),
                'escuela' => $this->input->post('escuela'));

        $tipo = $this->input->post('tipo_usuario');

		$salida = $this->administrador_model->actualizar_datos_usuario($datos, $tipo);

		echo $salida;
	}


	public function def_coordinador() {

		$cedula = $this->input->post('ci');

		$salida = $this->administrador_model->asignar_coord_principal($cedula);

		echo $salida;

	}


	public function deshab_coordinador() {

		$cedula = $this->input->post('ci');
	
		$msga = "Se deshabilito el usuario ".$cedula;
		$msgc = "Ha sido deshabilitado";

		$salida = $this->administrador_model->deshabilitar_coord($cedula);

		$correo = $this->administrador_model->obtener_correo_coord($cedula);

		if($salida=="0"){
			
			if($this->send_mail($correo,"Notificación",$msgc)){
				echo "0";
			}else
			{
				echo "-1";
			}

		}else
			{
				echo "-1";
		}

	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
