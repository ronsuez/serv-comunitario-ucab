<?php class Usuario_model extends CI_Model {


    function __construct()
    {
        // Call the Model constructor
        parent::__construct();

        
        $this->load->database();


    }
   

public function check_user($user,$pass){

    
    $query = $this->db->query("SELECT user,cedula,tipo FROM  usuario WHERE user = '$user' AND contrasena = '$pass' AND estado = 1");

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
                return $resultado->row();
            }else{

              return "-1";
            }
        }


        public function get_info_user($id,$tipo){


                $query_usuario = $this->db->query("SELECT user,contrasena,tipo FROM usuario WHERE cedula='$id'");
                if($tipo == "CO"){
                 $query=$this->db->query("SELECT * FROM coordinador WHERE ci_coord='$id'");
                }
                else if ($tipo == "DI") {
                    $query=$this->db->query("SELECT * FROM director WHERE ci_di='$id'");
                }
                elseif ($tipo == "PR") {
                    $query=$this->db->query("SELECT * FROM proyeccion_comunidad WHERE ci_pr='$id'");
                }

                if($query){
                    return array("datos_usuario"=>$query_usuario->row(),"datos_p_usuario"=>$query->row());
                    
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
                                           'ci_coord' => $datos["cedula"],
                                           'nombre_coord' => $datos["nombre"],
                                           'apellido_coord' => $datos["apellido"],
                                           'celular_coord' => $datos["celular"],
                                           'telefono_coord' => $datos["telefono"],
                                           'email_coord' => $datos["email"],
                                           'escuela_coord' => $datos["escuela"]));
            }

            if ($tipo == "DI") {
                $query = $this->db->insert('director', array(
                                           'ci_di' => $datos["cedula"],
                                           'nombre_di' => $datos["nombre"],
                                           'apellido_di' => $datos["apellido"],
                                           'celular_di' => $datos["celular"],
                                           'telefono_di' => $datos["telefono"],
                                           'email_di' => $datos["email"],
                                           'escuela_di' => $datos["escuela"]));
            }

            if ($tipo == "PR") {
                $query = $this->db->insert('proyeccion_comunidad', array(
                                           'ci_pr' => $datos["cedula"],
                                           'nombre_pr' => $datos["nombre"],
                                           'apellido_pr' => $datos["apellido"],
                                           'celular_pr' => $datos["celular"],
                                           'telefono_pr' => $datos["telefono"],
                                           'email_pr' => $datos["email"]));
            }

            if($query){
                return 0;
            }
            else{
                return $tipo."-1";
            }

        }


        public function buscar_usuario($q,$o){

            if($o== "cedula"){
                $filtro="cedula";
                  $sql="SELECT cedula, user, tipo
                                        FROM usuario
                                        WHERE $filtro=$q";

            }else if($o=="user"){
                $filtro="user";
                  $sql="SELECT cedula, user, tipo
                                        FROM usuario 
                                        WHERE $filtro LIKE '".$q."%'";
            }

        

            $query = $this->db->query($sql);

            if($query->num_rows()>0){

                return $query->result_array();
            }else{

                return "-1";
            }
    }

    public function traer_usuarios(){


        $sql_directores="SELECT ci_di,escuela_di,apellido_di,nombre_di FROM director";

        $sql_coordinadores="SELECT ci_coord,escuela_coord,apellido_coord,nombre_coord FROM coordinador";

        $sql_proyeccion="SELECT ci_pr,apellido_pr,nombre_pr FROM proyeccion_comunidad";


              $q1=$this->db->query($sql_directores);

              $q2=$this->db->query($sql_coordinadores);

              $q3=$this->db->query($sql_proyeccion);

              return array('directores'=>$q1->result_array(),'coordinadores'=>$q2->result_array(),'proyeccion'=>$q3->result_array());



    } 
    

}
