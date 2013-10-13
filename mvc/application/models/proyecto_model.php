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

    

}