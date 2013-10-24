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



	 public function registrar(){

		    $informacion = json_decode($this->input->post('texto'));

		    $datos = json_decode($this->input->post('datos'));

		      foreach ($datos as $item) {
		              echo $item->name." :".$item->value."<br>";

		              echo "<br>";
		        }

		        echo ("<br>informacion <br>");

		      foreach ($informacion as $item2) {
		        
		              echo $item2->name." :".$item2->value."<br>";

		              echo "<br>";
		        }

		      

		    }



}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */