<?php class Usuario_model extends CI_Model {


    function __construct()
    {
        // Call the Model constructor
        parent::__construct();

        
        $this->load->database();


    }


public function check_user($user,$pass){

    
    $query = $this->db->query("SELECT cedula,tipo FROM  usuario WHERE user = '$user' AND contrasena = '$pass' ");

      $salida = $query->result_array();

                if ($query->num_rows() > 0)
                {

                    return $salida;
            
                }else{

                return -1;
                }
                    
        
        }

        public function get_info_user($id,$tipo){


                if($tipo == "CO"){

                 $query=$this->db->query("SELECT * FROM coordinador WHERE cedula='$id'");
                
                }

                return $query->result_array();          

        }

    

}
