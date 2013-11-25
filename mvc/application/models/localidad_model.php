<?php class Localidad_model extends CI_Model {


    function __construct()
    {
        // Call the Model constructor
        parent::__construct();

        
        $this->load->database();


    }
public function insertar_datos_localidad($nombre,$responsable,$email,$telefono,$parroquia,$direccion){

	

	$query = $this->db->query("INSERT INTO localidad(nombre_localidad,representante_localidad,email_representante_localidad,telefono_representante_localidad,parroquia_localidad,direccion_localidad) 
                                       VALUES ('$nombre','$responsable','$email','$telefono','$parroquia','$direccion')");

									   
}

public function listar_datos_localidad($nombre){

            /* Query Datos Personales  */
            $query1 = $this->db->query("SELECT nombre_localidad,representante_localidad,email_representante_localidad,telefono_representante_localidad
										FROM localidad
										WHERE nombre_localidad = '$nombre'");

            /* Query Datos Academicos */
            $query2 = $this->db->query("SELECT parroquia_localidad
										FROM localidad
										WHERE nombre_localidad = '$nombre'");

            $salida =  array('estado'=>"1",'datos_representante' =>$query1->result_array(),'datos_ubicacion' =>$query2->result_array());



                if ($query1->num_rows() > 0 || $query2->num_rows() > 0)
                {

                    return $salida;
            
                }else{

                    $salida =  array('estado' =>"-1");    
                    
                    return $salida;
                }
                    
        }


public function listar(){

            $query = $this->db->query('SELECT id_localidad,nombre_localidad FROM localidad ORDER BY id_localidad ASC' );


            $data ="";

                if ($query->num_rows() > 0)
                {
                             
                    return $query->result_array();
            
                }else{

                    return -1;
                }
                    
        
        }

    

}
