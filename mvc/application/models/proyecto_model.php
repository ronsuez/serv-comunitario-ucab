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
                                WHERE nombre_proyecto LIKE  '%".$query."%' ");

                if ($query->num_rows() > 0)
                {
                            

                    return $query->result_array();
            
                }else{

                    return -1;
                }
                    
      
    }

    public function registrar_proyecto($info){

            

                      

            $nombre_proyecto = $info[0]["value"];
            $suscribe = $info[1]["value"];
            $ejecuta = $info[2]["value"];
            $estado = $info[3]["value"];
            $diagnostico_proyecto = $info[4]["value"];
            $justificacion_proyecto = $info[5]["value"];
            $impacto_proyecto = $info[6]["value"];
            $obj_generales_proyecto = $info[7]["value"];
            $obj_especificos_proyecto = $info[8]["value"];
            $metas_proyecto = $info[9]["value"];
            $producto_proyecto = $info[10]["value"];
            $plan_trabajo_proyecto = $info[11]["value"];
            $recursos_proyecto = $info[12]["value"];
            $cronograma_proyecto = $info[13]["value"];




            $date = date("Y-m-d");


            $query = $this->db->query("INSERT INTO proyecto(fecha_ini,nombre_proyecto,ci_coord,ci_asesor,diagnostico_proyecto,justificacion_proyecto,impacto_proyecto,obj_generales_proyecto,obj_especificos_proyecto,metas_proyecto,producto_proyecto,plan_trabajo_proyecto,recursos_requeridos_proyecto,cronograma_proyecto,estado_proyecto) 
                                       VALUES ('$date','$nombre_proyecto',$suscribe,$ejecuta,'$diagnostico_proyecto','$justificacion_proyecto','$impacto_proyecto','$obj_generales_proyecto','$obj_especificos_proyecto','$metas_proyecto','$producto_proyecto','$plan_trabajo_proyecto','$recursos_proyecto','$cronograma_proyecto','$estado')");

            if ($query)
                return $this->get_id();
            else
                return $this->db->_error_name();

    }

    

}
