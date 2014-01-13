<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class UploadHandler extends CI_Controller {

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

	public function __construct()
	
	   {
	      parent::__construct();
	      $this->load->model('files_model');
	      $this->load->database();
	      $this->load->helper('url');
	   }



	public function index()
	{
	
		$this->load->view($this->controller.'panel');
	}

	public function upload_file()
{
   $status = "";
   $msg = "";
   $file_element_name = 'userfile';
    
   if ($this->input->post('name'))
   {
      $status = "error";
      $msg = "Please enter a title";
   }else{
   	 $title=$this->input->post('name');
   }
    
  

    
   if ($status != "error")
   {
      $config['upload_path'] = './files/';
      $config['allowed_types'] = 'gif|jpg|png|doc|txt';
      $config['max_size']  = 1024 * 8;
      $config['encrypt_name'] = TRUE;
 
      $this->load->library('upload', $config);
 
      if (!$this->upload->do_upload($file_element_name))
      {
         $status = 'error';
         $msg = $this->upload->display_errors('', '');
      }
      else
      {
         $data = $this->upload->data();
         $file_id = $this->files_model->insert_file($data['file_name'], $title);
         $filename=$data['file_name'];
         if($file_id)
         {
            $status = "success";
            $msg = "File successfully uploaded";
         }
         else
         {
            unlink($data['full_path']);
            $status = "error";
            $msg = "Something went wrong when saving the file, please try again.";
         }
      }
      @unlink($_FILES[$file_element_name]);
   }
   echo json_encode(array('status' => $status, 'msg' => $msg, 'filename'=> $filename));


}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
