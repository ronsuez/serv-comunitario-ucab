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

		$page_struct= array('header'=>$this->load->view('header','',TRUE) , 'footer'=>$this->load->view('footer','',TRUE), 'tipo'=>$tipo);

		$this->load->view($this->controller.'completar_datos',$page_struct);
	}

	public function login_success($info_user){



		$this->session->set_userdata('isLoggedIn', "1");
		$this->session->set_userdata('user_name', $info_user[0]["user"]);

		$user_name = $this->usuario_model->get_info_user($info_user[0]["cedula"],$info_user[0]["tipo"]);

		if($user_name == -1){

			$this->session->set_userdata('name', "admin");
			$this->session->set_userdata('last_name', "admin");

			$this->session->set_userdata('escuela',"admin");

		}
		else{
			$this->session->set_userdata('name', $user_name[0]["nombre_coord"]);
			$this->session->set_userdata('last_name', $user_name[0]["apellido_coord"]);

			$this->session->set_userdata('escuela', $user_name[0]["escuela_coord"]);

		}
				// var_dump($user_name);


		redirect("/dashboard");

			//echo json_encode(array('status' =>"0"));

	}

	public function login_failed($info_user){

		
		redirect("/?login=".$info_user);

			//echo json_encode(array('status' =>"0"));

	}

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

		redirect("/");

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
		$datos = array("nombre" => $this->input->post('nombre'),
					   "apellido" => $this->input->post('apellido'),
					   "email" => $this->input->post('email'),
					   "celular" => $this->input->post('celular'),
					   "telefono" => $this->input->post('telefono'),
					   "escuela" => $this->input->post('escuela'));
		

		$salida = $this->usuario_model->completar_datos_usuario($datos);

		// if (!$salida) {
		// 	redirect("/?user=".$this->input->post('user'));
		// }
		// else{
		// 	redirect("/registro_form?error=1");
		// }
	}



}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
