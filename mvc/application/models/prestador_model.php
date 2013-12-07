<?php class Prestador_model extends CI_Model {


    function __construct()
    {
        // Call the Model constructor
        parent::__construct();

        
        $this->load->database();


    }


public function listar_datos_prestador($cedula){

            /* Query Datos Personales  */
            $query1 = $this->db->query("SELECT *
                                        FROM  prestador
                                        WHERE ci_prestador = $cedula");


        

                if ($query1->num_rows() > 0 || $query2->num_rows() > 0)
                {

                $salida =  array('estado'=>"1",'datos_prestador' =>$query1->row());


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


public function datos_proyecto($id){

            $sql="SELECT nombre_proyecto, fecha_ini, estado_proyecto, id_proyecto 
                  FROM  proyecto
                  WHERE id_proyecto = $id";

                  $query=$this->db->query($sql,$id);


             if ($query->num_rows() > 0)
                {

                    return $query->result_array();
            
                }else{

                    $salida =  "-1";    
                    
                    return $salida;
                }

        }


            public function b_nombres_proyectos($ci_prestador){

                $sql = "SELECT proyecto.id_proyecto, proyecto.nombre_proyecto
                        FROM participa, proyecto
                        WHERE participa.ci_prestador = $ci_prestador
                        AND proyecto.id_proyecto = participa.id_proyecto";

                $query = $this->db->query($sql,$ci_prestador);

                if($query->num_rows()>0){

                    return $query->result_array();
                }else{
                    $salida = '-1';
                }



            }
            
            
            //--------------------------------------------------------
public function listar_datos_asesor($cedula){

            /* Query Datos Personales  */
            $query1 = $this->db->query("SELECT ci_asesor, nombre_asesor, apellido_asesor, email_asesor, celular_asesor, telefono_asesor, direccion_asesor
                                        FROM  asesor
                                        WHERE ci_asesor = $cedula");

            


                if ($query1->num_rows() > 0)
                {

                    $salida =  array('estado'=>"1",'datos_personales' =>$query1->result_array());


                    return $salida;
            
                }else{

                    $salida =  array('estado' =>"-1");    
                    
                    return $salida;
                }
                    
        
        }


	public function verificar_estado_proyecto($nombre_proy,$cedula_asesor){
		$query1 = $this->db->query("SELECT id_proyecto
									FROM  proyecto 
									WHERE nombre_proyecto = '$nombre_proy' and ci_asesor=$cedula_asesor and estado_proyecto='activo'" );
		
 
        if ($query1->num_rows() > 0){

            $salida = array('estado'=>$query1->result_array());
        
			$query1 = "1";
			return $query1;
		}else{
			$salida = "1";
			return $salida;
		}
	
	}
	
	public function insertar_asesor($nombre,$apellido,$email,$cedula,$celular,$telefono,$direccion){
		$query = $this->db->query("INSERT INTO asesor(ci_asesor,nombre_asesor,apellido_asesor,email_asesor,celular_asesor,telefono_asesor,direccion_asesor)
								  VALUES ('$cedula','$nombre','$apellido','$email','$celular','$telefono','$direccion')");
		return $query;
	}


	public function asociar_proyecto($asesor,$proyecto,$prestador){
		$query1 = $this->db->query("SELECT id_proyecto
									FROM proyecto
									WHERE nombre_proyecto = '$proyecto' and ci_asesor = $asesor and estado_proyecto='activo'");
		
		$id_proyecto = $query1->row()->id_proyecto;
		$query2 = $this->db->query("SELECT escuela_prestador
									FROM prestador
									WHERE ci_prestador = $prestador");
		$escuela = $query2->row()->escuela_prestador;
		$query3 = $this->db->query("SELECT ci_coord 
									FROM coordinador
									WHERE escuela_coord='$escuela'");
		$coordinador = $query3->row()->ci_coord;
		$query = $this->db->query("INSERT INTO participa(ci_prestador,id_proyecto,ci_coord,ci_asesor)
									VALUES ('$prestador','$id_proyecto','$coordinador','$asesor')");
		return $query;
	
	}

}    






/*SELECT Nombre
FROM  `prestador` 
WHERE CI_prestador =24541299;

SELECT Apellido
FROM  `prestador` 
WHERE CI_prestador =24541299
*/
