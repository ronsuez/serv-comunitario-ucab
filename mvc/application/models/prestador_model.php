<?php class Prestador_model extends CI_Model {


    function __construct()
    {
        // Call the Model constructor
        parent::__construct();

        
        $this->load->database();


    }


    public function listar_datos_prestador($cedula){

        /* Query Datos Personales  */
        $query1 = $this->db->query("SELECT ci, nombre, apellido, email, celular, telefono, direccion 
            FROM  `prestador` 
            WHERE ci = $cedula");

        /* Query Datos Academicos */
        $query2 = $this->db->query("SELECT no_exp, escuela, semestre, mencion
            FROM  `prestador` 
            WHERE ci = $cedula");

        $salida = $query1->result_array();

        if ($query1->num_rows() > 0 || $query2->num_rows() > 0)
        {

            return $salida;
            
        }
        else {

            return -1;
        }

        
    }
    
    
   //funcion para consultar los datos del coordinador
   public function listar_datos_coordinador($cedula){


        $query1 = $this->db->query("SELECT ci_coord, nombre_coord, apellido_coord, email_coord, celular_coord, telefono_coord, escuela_coord 
                                        FROM  `coordinador` 
                                        WHERE ci_coord = $cedula");
                                        
        $salida =  array('estado'=>"1",'datos_coordinador' =>$query1->result_array());


        if ($query1->num_rows() > 0 )
                {

                    return $salida;
            
                }else{

                    $salida =  array('estado' =>"-1");    
                    
                    return $salida;
                }
    }



    public function insertar_datos($nombre, $apellido, $celular, $email, $telefono, $direccion, $expediente, $escuela, $mencion)
    {
        // ci nombre  Apellido    email   celular telefono    no_exp  escuela semestre    mencion direccion
        $query1 = $this->db->query("INSERT INTO prestador VALUES (999, '$nombre', '$apellido', '$email', $celular, $telefono, $expediente, '$escuela', 1, '$mencion', '$direccion')");
    }

    

}

/*SELECT Nombre
FROM  `prestador` 
WHERE CI_prestador =24541299;

SELECT Apellido
FROM  `prestador` 
WHERE CI_prestador =24541299
*/
