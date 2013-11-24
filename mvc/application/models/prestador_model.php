<?php class Prestador_model extends CI_Model {


    function __construct()
    {
        // Call the Model constructor
        parent::__construct();

        
        $this->load->database();


    }


public function listar_datos_prestador($cedula){

            /* Query Datos Personales  */
            $query1 = $this->db->query("SELECT ci_prestador, nombre_prestador, Apellido_prestador, email_prestador, celular_prestador, telefono_prestador, direccion_prestador
                                        FROM  `prestador` 
                                        WHERE ci_prestador = $cedula");

            /* Query Datos Academicos */
            $query2 = $this->db->query("SELECT no_exp_prestador, escuela_prestador, semestre_prestador, mencion_prestador
                                        FROM  `prestador` 
                                        WHERE ci_prestador = $cedula");

            $salida =  array('estado'=>"1",'datos_personales' =>$query1->result_array(),'datos_academicos' =>$query2->result_array());



                if ($query1->num_rows() > 0 || $query2->num_rows() > 0)
                {

                    return $salida;
            
                }else{

                    $salida =  array('estado' =>"-1");    
                    
                    return $salida;
                }
                    
        
        }



public function listar_x_pro($id_proyecto){


        $sql = "SELECT participa.ci_prestador, nombre_prestador, apellido_prestador
                  FROM prestador,participa 
                  WHERE participa.id_proyecto = ? AND
                        prestador.ci_prestador = participa.ci_prestador";



            $query=$this->db->query($sql,$id_proyecto);


             if ($query->num_rows() > 0)
                {

                    return $query->result_array();
            
                }else{

                    $salida =  "-1";    
                    
                    return $salida;
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
