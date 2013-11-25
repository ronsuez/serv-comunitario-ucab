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

public function insertar_datos($datos){
        $query = $this->db->insert('prestador', array(
                'ci_prestador' => $datos["cedula"],
                'nombre_prestador' => $datos["nombre"],
                'Apellido_prestador' => $datos["apellido"],
                'email_prestador' => $datos["email"],
                'celular_prestador' => $datos["celular"],
                'telefono_prestador' => $datos["telefono"],
                'no_exp_prestador' => $datos["expediente"],
                'escuela_prestador' => $datos["escuela"],
                'semestre_prestador' => $datos["semestre"],
                'mencion_prestador' => "1",
                'direccion_prestador' => $datos["direccion"]));


            if($query){
                return "0";
            }
            else{
                return "-1";
            }
 }  



public function buscar_prestador($q,$o){

            if($o== "cedula"){
                $filtro="ci_prestador";
                  $sql="SELECT ci_prestador, nombre_prestador, Apellido_prestador
                                        FROM prestador 
                                        WHERE $filtro=$q";

            }else if($o=="nombre"){
                $filtro="nombre_prestador";
                  $sql="SELECT ci_prestador, nombre_prestador, Apellido_prestador
                                        FROM prestador 
                                        WHERE $filtro LIKE '".$q."%'
                                        OR Apellido_prestador LIKE '".$q."%'";
            }

        

            $query = $this->db->query($sql);

            if($query->num_rows()>0){

                return $query->result_array();
            }else{

                return "-1";
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

public function buscar_proyectos_prestador($ci_prestador){
        $sql = "SELECT proyecto.id_proyecto, proyecto.nombre_proyecto
                FROM   participa, proyecto  
                WHERE  participa.ci_prestador = $ci_prestador 
                AND    proyecto.id_proyecto   = participa.id_proyecto";

        $query=$this->db->query($sql,$ci_prestador);


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
