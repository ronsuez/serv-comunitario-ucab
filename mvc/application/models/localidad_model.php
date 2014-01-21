
<?php class Localidad_model extends CI_Model {


    function __construct()
    {
        // Call the Model constructor
        parent::__construct();

        
        $this->load->database();


    }
public function insertar_datos_localidad($nombre,$responsable,$email,$telefono,$parroquia,$direccion,$latitud,$longitud){

    

    $query = $this->db->query("INSERT INTO localidad(nombre_localidad,representante_localidad,email_representante_localidad,telefono_representante_localidad,parroquia_localidad,direccion_localidad,latitud_localidad,longitud_localidad) 
                                       VALUES ('$nombre','$responsable','$email','$telefono','$parroquia','$direccion','$latitud','$longitud')");

        if($query){

            return "0";
        }else{

            return "-1";
        }                              
}

public function listar_datos_localidad($nombre){

            /* Query Datos Personales  */
            $query1 = $this->db->query("SELECT nombre_localidad,representante_localidad,email_representante_localidad,telefono_representante_localidad
                                        FROM localidad
                                        WHERE nombre_localidad = '$nombre'");

            /* Query Datos Academicos */
            $query2 = $this->db->query("SELECT parroquia_localidad,latitud_localidad,longitud_localidad
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

public function modificar_datos_localidad ($nombre,$responsable,$email,$telefono,$parroquia,$direccion){

    

    $query = $this->db->query(" UPDATE Localidad
                                SET nombre_localidad='$nombre',
                                ,representante_localidad='$responsable',
                                email_representante_localidad='$email',
                                telefono_representante_localidad='$telefono',
                                parroquia_localidad='$parroquia',
                                direccion_localidad='$direccion'
                                WHERE nombre_localidad='$nombre'");

        if($query){

            return "0";
        }else{

            return "-1";
        }                              
}

  


public function buscar_localidad($q,$o){

            if($o== "cedula"){
                $filtro="id_localidad";
                  $sql="SELECT id_localidad, nombre_localidad, direccion_localidad
                                        FROM localidad 
                                        WHERE $filtro=$q";

            }else if($o=="nombre"){
                $filtro="nombre_localidad";
                  $sql="SELECT id_localidad, nombre_localidad, direccion_localidad
                                        FROM localidad 
                                        WHERE $filtro LIKE '".$q."%'
                                        OR direccion_localidad LIKE '".$q."%'";
            }

        

            $query = $this->db->query($sql);

            if($query->num_rows()>0){

                return $query->result_array();
            }else{

                return "-1";
            }
    }

public function listar(){

            $query = $this->db->query('SELECT id_localidad,nombre_localidad,latitud_localidad,longitud_localidad FROM localidad ORDER BY id_localidad ASC' );


            $data ="";

                if ($query->num_rows() > 0)
                {
                             
                    return $query->result_array();
            
                }else{

                    return -1;
                }
                    
        
        }

        public function listar_proyectos_asociados($id){


                $sql = "SELECT coordinador.escuela_coord,
                              localidad.nombre_localidad,
                              proyecto.nombre_proyecto

            FROM coordinador,ejecuta, localidad,proyecto
  
            WHERE coordinador.ci_coord=ejecuta.ci_coord AND  ejecuta.id_localidad='$id'  AND
                     localidad.id_localidad=ejecuta.id_localidad AND 
                     proyecto.id_proyecto=ejecuta.id_proyecto";

               $query = $this->db->query($sql);
               
                if ($query->num_rows() > 0)
                {
                             
                    return $query->result_array();
            
                }else{

                    return -1;
                }

        }


    public function listar_datos_local($id){

        /* Query Datos Personales  */
        $query1 = $this->db->query("SELECT *
            FROM localidad
            WHERE id_localidad = '$id'");


        

        if ($query1->num_rows() > 0 )
        {

            $salida =  array('estado'=>"1",'datos_localidad' =>$query1->row());


            return $salida;
            
        }else{

            $salida =  array('estado' =>"-1");    

            return $salida;
        }

        
    }

}
