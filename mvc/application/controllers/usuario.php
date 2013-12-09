<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Usuario extends CI_Controller {

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
	private $cedula;

	function __construct(){

		parent::__construct();

			//$this->load->helper('author_helper');

		$this->controller="usuario/";

		$this->load->model('usuario_model');

	}


	public function index()
	{

		//$this->load->view($this->controller.'panel');
	}



	public function completar_datos(){

		
		$user = $this->session->userdata('user_name');

		$tipo = $this->usuario_model->get_tipo_user($user);

		$page_struct= array('header'=>$this->load->view('header','',TRUE) , 'footer'=>$this->load->view('footer','',TRUE), 'tipo'=>$tipo->tipo);

		$this->load->view($this->controller.'completar_datos',$page_struct);
	}


	//Se llama una vez que ha sido exitoso el logeo
	public function login_success($info_user){



		$this->session->set_userdata('isLoggedIn', "1");
		$this->session->set_userdata('user_name', $info_user[0]["user"]);
		$this->session->set_userdata('cedula', $info_user[0]["cedula"]);
		
		$user_name = $this->usuario_model->get_info_user($info_user[0]["cedula"],$info_user[0]["tipo"]);

		$tipo = $info_user[0]["tipo"];

		$user= $info_user[0]["user"];


		if($tipo == "DI"){

			$this->session->set_userdata('name', $user_name[0]["nombre_di"]);
			$this->session->set_userdata('last_name', $user_name[0]["apellido_di"]);
			$this->session->set_userdata('escuela', $user_name[0]["escuela_di"]);

		}
		elseif ($tipo == "CO") {

			$this->session->set_userdata('name', $user_name[0]["nombre_coord"]);
			$this->session->set_userdata('last_name', $user_name[0]["apellido_coord"]);
			$this->session->set_userdata('escuela', $user_name[0]["escuela_coord"]);
		}
		elseif ($tipo == "PR") {
			$this->session->set_userdata('name', $user_name[0]["nombre_pr"]);
			$this->session->set_userdata('last_name', $user_name[0]["apellido_pr"]);
			$this->session->set_userdata('escuela', "la Comunidad");
		}
				// var_dump($user_name);


		if($user=="admin"){

			$this->session->set_userdata("panel_admin","1");

		}else{
			$this->session->set_userdata("panel_admin","0");
		}


		redirect("/dashboard");

			
			//echo json_encode(array('status' =>"0"));

	}

	public function login_failed($info_user){

		
		redirect("/?login=".$info_user);

			//echo json_encode(array('status' =>"0"));

	}


	//Checkeo de logeo
	public function login_attempt()
	{


		$user = $this->input->post("user");

		$pass = $this->input->post("pass");

		$salida =$this->usuario_model->check_user($user,$pass);

			
		if(is_array($salida)){

			return $this->login_success($salida);

		}else{

			return $this->login_failed($salida);

		}


	}

	public function log_out()
	{


		$this->session->set_userdata('isLoggedIn', "0");
		$this->session->set_userdata('user_name', "");
		$this->session->set_userdata('escuela', "");
		$this->session->sess_destroy();

		redirect(base_url());

	}

	public function insertar_usuario()
	{
		$datos = array("cedula" => $this->input->post('cedula'),
			"user" => $this->input->post('user'),
			"pass" => $this->input->post('pass'),
			"tipo" => $this->input->post('tipo'));
		

		$salida = $this->usuario_model->insertar_datos_usuario($datos);

		if (!$salida) {
			redirect("/?user=".$this->input->post('user'));
		}
		else{
			redirect("/registro_form?error=1");
		}
	}


	public function completar_datos_usuario()
	{
		$user = $this->session->userdata('user_name');

		$cedula = $this->session->userdata('cedula');

		$tipo = $this->usuario_model->get_tipo_user($user);

		$datos = array("cedula" => $cedula,
					   "nombre" => $this->input->post('nombre'),
					   "apellido" => $this->input->post('apellido'),
					   "email" => $this->input->post('email'),
					   "celular" => $this->input->post('celular'),
					   "telefono" => $this->input->post('telefono'),
					   "escuela" => $this->input->post('escuela'));

		$salida = $this->usuario_model->completar_datos_usuario($datos, $tipo->tipo);


		if (!$salida) {

			$this->session->set_userdata('name', $this->input->post('nombre'));
			$this->session->set_userdata('last_name', $this->input->post('apellido'));
			$this->session->set_userdata('escuela', $this->input->post('escuela'));

			redirect("/dashboard");
		}
		else{
			redirect("/completar_datos?error=1&salida=".$salida."&user=".$user."&tipo=".$tipo->tipo."&ci=".$cedula);
		}
	}


	public function listar() {

		$query  = $this->input->post('q');
		$option = $this->input->post('o');

		//echo "server->".$query."->".$option;

		$salida= $this->usuario_model->buscar_usuario($query,$option);


			if($salida!="-1"){

				echo json_encode($salida);
	
			}else{

				echo "-1";
			}
	}

	public function get_info_user() {

		$cedula  = $this->input->post('cedula');
		$tipo = $this->input->post('tipo');

		$salida= $this->usuario_model->get_info_user($cedula,$tipo);

		echo json_encode($salida);
	}



}
  

  
/* End of file welcome.php */

/* Location: ./application/controllers/welcome.php */
