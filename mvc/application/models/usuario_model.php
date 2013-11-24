<?php class Usuario_model extends CI_Model {


    function __construct()
    {
        // Call the Model constructor
        parent::__construct();

        
        $this->load->database();


    }


public function check_user($user,$pass){

    
    $query = $this->db->query("SELECT user,cedula,tipo FROM  usuario WHERE user = '$user' AND contrasena = '$pass' ");

      $salida = $query->result_array();

                if ($query->num_rows() > 0)
                {

                    return $salida;
            
                }else{

                return -1;
                }
                    
        
        }

public function get_tipo_user($user){

            $sql = "SELECT tipo FROM  usuario WHERE  user = '$user'";
            $resultado = $this->db->query($sql);
            
            if ($resultado) {
                return $resultado->result_array();
            }
        }


        public function get_info_user($id,$tipo){


                if($tipo == "CO"){
                 $query=$this->db->query("SELECT * FROM coordinador WHERE ci_coord='$id'");

                return $query->result_array(); 
                }
                else if ($tipo == "DI") {
                    $query=$this->db->query("SELECT * FROM director WHERE ci_di='$id'");
                }
                elseif ($tipo == "PR") {
                    $query=$this->db->query("SELECT * FROM proyeccion_comunidad WHERE ci_pr='$id'");
                }

                if($query){
                    return $query->result_array();
                }
                else{
                    return "-1";
            }
         
        }



        public function insertar_datos_usuario($datos){
          
            $query = $this->db->insert('usuario', array(
                'cedula' => $datos["cedula"],
                'user' => $datos["user"],
                'contrasena' => $datos["pass"],
                'tipo' => $datos["tipo"]));

            if($query){
                return "0";
            }
            else{
                return "-1";
            }
        }

        public function completar_datos_usuario($datos, $tipo){

            if ($tipo == "CO") {
                $query = $this->db->insert('coordinador', array(
                                           'nombre_coord' => $datos["nombre"],
                                           'apellido_coord' => $datos["apellido"],
                                           'celular_coord' => $datos["cedular"],
                                           'telefono_coord' => $datos["telefono"],
                                           'email_coord' => $datos["email"],
                                           'escuela_coord' => $datos["escuela"]));
            }

            if ($tipo == "DI") {
                $query = $this->db->insert('director', array(
                                           'nombre_di' => $datos["nombre"],
                                           'apellido_di' => $datos["apellido"],
                                           'celular_di' => $datos["cedular"],
                                           'telefono_di' => $datos["telefono"],
                                           'email_di' => $datos["email"],
                                           'escuela_di' => $datos["escuela"]));
            }

            if ($tipo == "PR") {
                $query = $this->db->insert('proyeccion_comunidad', array(
                                           'nombre_pr' => $datos["nombre"],
                                           'apellido_pr' => $datos["apellido"],
                                           'celular_pr' => $datos["cedular"],
                                           'telefono_pr' => $datos["telefono"],
                                           'email_pr' => $datos["email"]));
            }

            if($query){
                return "0";
            }
            else{
                return "-1";
            }

        }

    

}
