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


	public function login_success($info_user){



			$this->session->set_userdata('isLoggedIn', "1");
			$this->session->set_userdata('user_name', $info_user[0]["cedula"]);

			$user_name = $this->usuario_model->get_info_user($info_user[0]["cedula"],$info_user[0]["tipo"]);

			$this->session->set_userdata('name', $user_name[0]["nombre_coord"]);
			$this->session->set_userdata('last_name', $user_name[0]["apellido_coord"]);

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
			$this->session->sess_destroy();

			redirect("/");

	}



}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
