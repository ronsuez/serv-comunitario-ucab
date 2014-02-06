<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Reportes extends CI_Controller {
 
    public function index()
    {

     $view = $this->input->post("reporte");

   
      $filename="reporte_".date("Y-m-d_h:i:s");          
    // As PDF creation takes a bit of memory, we're saving the created file in /downloads/reports/
    $pdfFilePath = FCPATH."application/reports/$filename.pdf"; 
   // if (file_exists($pdfFilePath) == FALSE)
    //{
    ini_set('memory_limit','32M'); // boost the memory limit if it's low ;)
    $html = $view; // render the view into HTML
 
    $this->load->library('pdf');
    $pdf = $this->pdf->load();
    $pdf->SetFooter($_SERVER['HTTP_HOST'].'|{PAGENO}|'.date(DATE_RFC822)); // Add a footer for good measure ;)
    
    $css=file_get_contents(FCPATH."application/views/css/reporte.css");
    //$css_cc=file_get_contents(FCPATH."application/views/css/carta_culminacion.css");

    $pdf->WriteHTML($css,1);

    $pdf->WriteHTML($html,2); // write the HTML into the PDF
    $pdf->Output($pdfFilePath, 'F'); // save to file because we can
   ////}else{


        echo base_url()."application/reports/".$filename.".pdf";
       
    //}  
 

    }
}