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


   public function reg_producto($data){


           $id=$this->get_new_id();

          if($this->db->insert('producto', array( 'id_producto'=>$id->id, 
                                                  'descripcion'=> $data['desc'],
                                                  'cantidad'=> $data['cant'],
                                                  'fabricante'=> $data['fabricante'],
                                                  'categoria'=> $data['categoria'],
                                                  'nombre'=> $data['nombre'],
                                                  'precio'=>$data['precio']

                                      ))){

                          return 1;
                    }else{

                        return 0;
                    }

          

    }


    public function listar(){

            $query = $this->db->query('SELECT id_fab,fabricante  FROM fabricante ORDER BY fabricante ASC' );


            $data ="";

                if ($query->num_rows() > 0)
                {
                                foreach ($query->result_array() as $row)
                                {
                                    $data.= "<option value='$row[id_fab]'>$row[fabricante]</option>";
                                }

                    return $data;
            
                }else{

                    return -1;
                }
                    
      
    }

    public function registrar_proyecto($info,$dato){

            foreach($dato as $item){
                if ($item->name == "titulo_proyecto")
                    $nombre_proyecto = $item->value;
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

            $query = $this->db->query("INSERT INTO proyecto(nombre_proyecto,ci_coord,ci_asesor,diagnostico_proyecto,justificacion_proyecto,impacto_proyecto,obj_generales_proyecto,obj_especificos_proyecto,metas_proyecto,producto_proyecto,plan_trabajo_proyecto,recursos_requeridos_proyecto,cronograma_proyecto) 
                                       VALUES ('$nombre_proyecto',13,12,'$diagnostico_proyecto','$justificacion_proyecto','$impacto_proyecto','$obj_generales_proyecto','$obj_especificos_proyecto','$metas_proyecto','$producto_proyecto','$plan_trabajo_proyecto','$recursos_proyecto','$cronograma_proyecto')");

            if ($query)
                return "bien";
            else
                return $this->db->_error_name();

    }

    

}
