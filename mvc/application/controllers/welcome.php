<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

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

			$this->controller="welcome/";

		}


	public function welcome_message() {
		$this->load->view($this->controller.'welcome_message');
	}


	public function index()
	{
	

		$page_struct= array('header'=>$this->load->view('header','',TRUE) , 'footer'=>$this->load->view('footer','',TRUE));

		$this->load->view($this->controller.'login',$page_struct);
	}


	public function registro(){

		
		$page_struct= array('header'=>$this->load->view('header','',TRUE) , 'footer'=>$this->load->view('footer','',TRUE));

		$this->load->view($this->controller.'registro_form',$page_struct);
	}

	public function acerca_de()
	{
	
		$this->load->view($this->controller.'acerca_de');
	}


	public function dashboard()
	{

		  if( !$this->session->userdata('isLoggedIn') ) {
        		
        		redirect('/'); //redirige a la pagina de inicio de sesion
    	
    		}else {
        
				$page_struct= array('header'=>$this->load->view('header','',TRUE) , 'footer'=>$this->load->view('footer','',TRUE));

				$this->load->view($this->controller.'dashboard',$page_struct);

   			 }
		
	}


}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
