<?php class Proyecto_model extends CI_Model {


    function __construct()
    {
        // Call the Model constructor
        parent::__construct();

        $this->load->database();

    }


   public function get_new_id(){


        $id_query = $this->db->query("SELECT nextval('id_producto_seq') AS id ");

        $id= $id_query->row();

        return $id;
    }


    public function listar_proyectos($id_proyecto){

            $query = $this->db->query("SELECT  *  FROM proyecto WHERE id_proyecto='$id_proyecto' " );


            $data ="";

                if ($query->num_rows() > 0)
                {
                            

                    return $query->result_array();
            
                }else{

                    return -1;
                }
                    
      
    }

    public function registrar_proyecto($info,$dato){

            foreach($dato as $item){
                if ($item->name == "titulo_proyecto")
                    $nombre_proyecto = $item->value;
             if ($item->name == "suscribe")
                    $suscribe = $item->value;
            if ($item->name == "ejecuta")
                    $ejecuta = $item->value;        
            
            if ($item->name == "estado")
                    $estado = $item->value;        
                      

                }

            foreach($info as $item2){
                if ($item2->name == "text-diagnostico")
                    $diagnostico_proyecto=$item2->value;
                if ($item2->name == "text-justificacion")
                    $justificacion_proyecto=$item2->value;
                if ($item2->name == "text-impacto")
                    $impacto_proyecto=$item2->value;
                if ($item2->name == "text-objetivos-g")
                    $obj_generales_proyecto=$item2->value;
                if ($item2->name == "text-objetivos-e")
                    $obj_especificos_proyecto=$item2->value;
                if ($item2->name == "text-metas")
                    $metas_proyecto=$item2->value;
                if ($item2->name == "text-producto")
                    $producto_proyecto=$item2->value;
                if ($item2->name == "text-plan-trabajo")
                    $plan_trabajo_proyecto=$item2->value;
                if ($item2->name == "text-recursos")
                    $recursos_proyecto=$item2->value;
                if ($item2->name == "text-cronograma")
                    $cronograma_proyecto=$item2->value;
            }

            $date = date("Y-m-d");


            $query = $this->db->query("INSERT INTO proyecto(fecha_ini,nombre_proyecto,ci_coord,ci_asesor,diagnostico_proyecto,justificacion_proyecto,impacto_proyecto,obj_generales_proyecto,obj_especificos_proyecto,metas_proyecto,producto_proyecto,plan_trabajo_proyecto,recursos_requeridos_proyecto,cronograma_proyecto,estado_proyecto) 
                                       VALUES ('$date','$nombre_proyecto',$suscribe,$ejecuta,'$diagnostico_proyecto','$justificacion_proyecto','$impacto_proyecto','$obj_generales_proyecto','$obj_especificos_proyecto','$metas_proyecto','$producto_proyecto','$plan_trabajo_proyecto','$recursos_proyecto','$cronograma_proyecto','$estado')");

            if ($query)
                return "bien";
            else
                return $this->db->_error_name();

    }

    

}
