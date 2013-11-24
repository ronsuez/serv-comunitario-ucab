<?php class Localidad_model extends CI_Model {


    function __construct()
    {
        // Call the Model constructor
        parent::__construct();

        
        $this->load->database();


    }


public function listar(){

            $query = $this->db->query('SELECT coordenadas,nombre  FROM localidad ORDER BY coordenadas ASC' );


            $data ="";

                if ($query->num_rows() > 0)
                {
                                foreach ($query->result_array() as $row)
                                {
                                    $data.= "<option value='$row[coordenadas]'>$row[nombre]</option>";
                                }

                    return $data;
            
                }else{

                    return -1;
                }
                    
        
        }

    

}