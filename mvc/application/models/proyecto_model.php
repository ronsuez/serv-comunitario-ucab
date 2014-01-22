<?php class Proyecto_model extends CI_Model {


    function __construct()
    {
        // Call the Model constructor
        parent::__construct();

        $this->load->database();

    }


public function get_id(){
        
         $query = $this->db->query("SELECT id_proyecto AS id FROM proyecto ORDER BY id_proyecto DESC LIMIT 1");

                if ($query->num_rows() > 0)
                {
                            
                    $id=$query->row()->id;

                 return $id;
            
                }else{

                    return -1;
                }
    }




    public function listar_proyectos($id_proyecto){

        


            $query = $this->db->query("SELECT  *  FROM proyecto WHERE id_proyecto='$id_proyecto' " );

                if ($query->num_rows() > 0)
                {
                            
            
                 return $query->result_array();

                
            
                }else{

                    return -1;
                }
                    
      
    }


     public function buscar_proyectos($query){

            $query = $this->db->query("SELECT  id_proyecto,nombre_proyecto  FROM proyecto 
                                WHERE nombre_proyecto LIKE  '".$query."%' ");

                if ($query->num_rows() > 0)
                {
                            

                    return $query->result_array();
            
                }else{

                    return -1;
                }
                    
      
    }

    public function registrar_proyecto($info,$ci_coord = false , $ci_asesor = false){

                

                      

            $nombre_proyecto = $info[0]["value"];
            $suscribe = $info[1]["value"];
            $ejecuta = $info[2]["value"];
            $estado = "activo";
            $diagnostico_proyecto = $info[3]["value"];
            $justificacion_proyecto = $info[4]["value"];
            $impacto_proyecto = $info[5]["value"];
            $obj_generales_proyecto = $info[6]["value"];
            $obj_especificos_proyecto = $info[7]["value"];
            $metas_proyecto = $info[8]["value"];
            $producto_proyecto = $info[9]["value"];
            $plan_trabajo_proyecto = $info[10]["value"];
            $recursos_proyecto = $info[11]["value"];
            $cronograma_proyecto = $info[12]["value"];

            $date = date("Y-m-d");


            $query = $this->db->query("INSERT INTO proyecto(fecha_ini,nombre_proyecto,ci_coord,ci_asesor,diagnostico_proyecto,justificacion_proyecto,impacto_proyecto,obj_generales_proyecto,obj_especificos_proyecto,metas_proyecto,producto_proyecto,plan_trabajo_proyecto,recursos_requeridos_proyecto,cronograma_proyecto,estado_proyecto) 
                                       VALUES ('$date','$nombre_proyecto',$ci_coord,$ci_asesor,'$diagnostico_proyecto','$justificacion_proyecto','$impacto_proyecto','$obj_generales_proyecto','$obj_especificos_proyecto','$metas_proyecto','$producto_proyecto','$plan_trabajo_proyecto','$recursos_proyecto','$cronograma_proyecto','$estado')");

            if ($query)
                
                $id_proyecto = $this->get_id();
 
            

            $query_ejecuta = $this->db->query("INSERT INTO ejecuta VALUES ($id_proyecto,$ci_coord,$ci_asesor,$ejecuta)");


                    if($query_ejecuta){
                        return $this->get_id();
                    }

            else
                return "-1";

    }

    
      public function listar_datos_asesor($q,$o){

            /* Query Datos Personales  */         
            if($o== "cedula"){
                $filtro="ci_asesor";
                  $sql="SELECT ci_asesor, nombre_asesor, apellido_asesor
                                        FROM asesor 
                                        WHERE $filtro=$q";

            }else if($o=="nombre"){
                $filtro="nombre_asesor";
                  $sql="SELECT ci_asesor, nombre_asesor, apellido_asesor
                                        FROM asesor
                                        WHERE $filtro LIKE '".$q."%'
                                        OR apellido_asesor LIKE '".$q."%'";
            }

            $query = $this->db->query($sql);

            if($query->num_rows()>0){

                return $query->result_array();
            }else{

                return "-1";
            }        
        }

        public function insertar_asesor($nombre,$apellido,$email,$cedula,$celular,$telefono,$direccion){
          $query = $this->db->query("INSERT INTO asesor(ci_asesor,nombre_asesor,apellido_asesor,email_asesor,celular_asesor,telefono_asesor,direccion_asesor)
                                     VALUES ('$cedula','$nombre','$apellido','$email','$celular','$telefono','$direccion')");
          return $query;
        }

    

}
