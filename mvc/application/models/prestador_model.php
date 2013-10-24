<?php class Prestador_model extends CI_Model {


    function __construct()
    {
        // Call the Model constructor
        parent::__construct();

        
        $this->load->database();


    }


public function listar_datos_prestador($cedula){

            /* Query Datos Personales  */
            $query1 = $this->db->query("SELECT CI_prestador, Nombre, Apellido, Email, Celular, Telefono, Direccion 
                                        FROM  `prestador` 
                                        WHERE CI_prestador = $cedula");

            /* Query Datos Academicos */
            $query2 = $this->db->query("SELECT No_exp, Escuela, Semestre, Mencion
                                        FROM  `prestador` 
                                        WHERE CI_prestador = $cedula");

            $salida = array('datos_personales' => $query1->result_array(), 'datos_academicos' =>$query2->result_array());

                if ($query1->num_rows() > 0 || $query2->num_rows() > 0)
                {

                    return $salida;
            
                }else{

                    return -1;
                }
                    
        
        }

    

}

/*SELECT Nombre
FROM  `prestador` 
WHERE CI_prestador =24541299;

SELECT Apellido
FROM  `prestador` 
WHERE CI_prestador =24541299
*/