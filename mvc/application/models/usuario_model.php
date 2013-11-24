<?php class Usuario_model extends CI_Model {


    function __construct()
    {
        // Call the Model constructor
        parent::__construct();

        
        $this->load->database();


    }


public function check_user($user,$pass){

    
<<<<<<< HEAD
    $query = $this->db->query("SELECT cedula,tipo FROM  usuario WHERE cedula = '$user' AND contrasena = '$pass' ");
=======
    $query = $this->db->query("SELECT cedula,tipo FROM  usuario WHERE user = '$user' AND contrasena = '$pass' ");
>>>>>>> 2d6419be3502ba156b09ba6b324ce23478e43dff

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

<<<<<<< HEAD
                 $query=$this->db->query("SELECT * FROM coordinador WHERE ci='$id'");
=======
                 $query=$this->db->query("SELECT * FROM coordinador WHERE ci_coord='$id'");
>>>>>>> 2d6419be3502ba156b09ba6b324ce23478e43dff
                
                }

                return $query->result_array();          

        }

    

<<<<<<< HEAD
}
=======
}
>>>>>>> 2d6419be3502ba156b09ba6b324ce23478e43dff
