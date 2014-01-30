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
            'direccion_prestador' => $datos["direccion"],
            'no_exp_prestador' => $datos["expediente"],
            'escuela_prestador' => $datos["escuela"],
            'mencion_prestador' => $datos["mencion"],
            'semestre_prestador' => $datos["semestre"]));

        if($query){
            return "0";
        }
        else{
            return "-1";
        }
    }  


    public function actualizar_prestador($datos) {

        $this->db->where('ci_prestador', $datos["cedula"]);
        $query = $this->db->update('prestador', array(
            'ci_prestador' => $datos["cedula"],
            'nombre_prestador' => $datos["nombre"],
            'Apellido_prestador' => $datos["apellido"],
            'email_prestador' => $datos["email"],
            'celular_prestador' => $datos["celular"],
            'telefono_prestador' => $datos["telefono"],
            'direccion_prestador' => $datos["direccion"],
            'no_exp_prestador' => $datos["expediente"],
            'escuela_prestador' => $datos["escuela"],
            'mencion_prestador' => $datos["mencion"],
            'semestre_prestador' => $datos["semestre"]));

        if($query){
            return "0";
        }
        else{
            return "-1";
        }
    }


    public function buscar_prestador($q,$o,$e){


        if($e=="Todas las escuelas"){

                $escuela="";

        }else{

            $escuela=$e;
        }

        if($o== "cedula"){
            $filtro="ci_prestador";

            $sql="SELECT ci_prestador, nombre_prestador, Apellido_prestador
            FROM prestador 
            WHERE $filtro=$q AND escuela_prestador='$escuela'";

        }else if($o=="nombre"){
            $filtro="nombre_prestador";
            $sql="SELECT ci_prestador, nombre_prestador, Apellido_prestador
            FROM prestador 
            WHERE  escuela_prestador='$escuela' AND ($filtro LIKE '".$q."%'
                OR Apellido_prestador LIKE '".$q."%')";
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



public function asociar_proyecto($f_proyecto,$proyecto,$prestador,$lunes,$martes,$miercoles,$jueves,$viernes,$sabado,$domingo){
  
  $query2 = $this->db->query("SELECT ci_prestador
                              FROM participa
                              WHERE ci_prestador='$prestador' AND estado_proy='1'");
  $query3 = $this->db->query("SELECT * 
                              FROM proyecto
                              WHERE id_proyecto='$proyecto' AND estado_proyecto='activo'");
  if ($query2->num_rows()<1 AND $query3->num_rows()>0) {
      $query1 = $this->db->query("SELECT ci_asesor,ci_coord
                              FROM proyecto
                              WHERE id_proyecto = '$proyecto' and estado_proyecto='activo'");
      $fecha_ini = $query3->row()->fecha_ini;
      $asesor = $query1->row()->ci_asesor;
      $coordinador = $query1->row()->ci_coord;
      $query = $this->db->query("INSERT INTO participa(ci_prestador,id_proyecto,ci_coord,ci_asesor,fecha_ini_proyecto,estado_proy,lunes,martes,miercoles,jueves,viernes,sabado,domingo)
                             VALUES ('$prestador','$proyecto','$coordinador','$asesor','$fecha_ini','1','$lunes','$martes','$miercoles','$jueves','$viernes','$sabado','$domingo')");

      return "1";
  }else{
      
  }
}


/*pantalla consultar proyecto */

public function insertar_datos_reportar_horas ($id_prestador,$n_horas,$fecha,$observaciones,$id_proyecto,$estado_proyecto,$realizado_por){

    $query = $this->db->query(" SELECT ci_asesor,ci_coord FROM proyecto WHERE id_proyecto = $id_proyecto");

                $query_filas=$query->row();

                                $ci_asesor = $query_filas->ci_asesor;
                                $ci_coord = $query_filas->ci_coord;

    $query_2= $this->db->query("INSERT INTO control_horas(fecha, cant_horas, ci_prestador, id_proyecto, ci_coord, ci_asesor, observaciones_proyecto, estado_proy_pres, realizado_por)
                                VALUES ('$fecha',$n_horas,$id_prestador,$id_proyecto,$ci_coord,$ci_asesor,'$observaciones','$estado_proyecto','$realizado_por')");

        if($query && $query_2){

            return "0";
        }else{

            return "-1";
        }                              
}

    public function horario_trabajo($id_prestador,$id_proyecto){

              $query1 = $this->db->query(" SELECT *
                                          FROM  participa 
                                          WHERE ci_prestador = $id_prestador AND id_proyecto = $id_proyecto ");


                if($query1->num_rows()>0){

                    return $query1->result_array();
                }else{
                    $salida = '-1';
                }



            }

    public function datos_horas_insertadas ($id_prestador,$id_proyecto){

              $query1 = $this->db->query(" SELECT observaciones_proyecto, ci_prestador, cant_horas, fecha  , realizado_por
                                           FROM control_horas
                                           WHERE ci_prestador = $id_prestador AND id_proyecto = $id_proyecto ");


                if($query1->num_rows()>0){

                    return $query1->result_array();
                }else{
                    $salida = '-1';
                }



            }
            
            public function suma_horas($id_prestador,$id_proyecto){

              $query1 = $this->db->query(" SELECT SUM(cant_horas) AS sum1
                                           FROM control_horas
                                           WHERE ci_prestador = $id_prestador AND id_proyecto = $id_proyecto ");


               
              if ($query1->num_rows() > 0)
                {

                return $query1->result_array(); //&& $query2->result_array();


            
                }else{    
                    
                    return $salida = '-1';
                }


            }


            public function suma_horas_totales($id_prestador){

              $query2 = $this->db->query("SELECT SUM(cant_horas) AS sum1 
                                           FROM control_horas
                                           WHERE ci_prestador = $id_prestador");


               
              if ($query2->num_rows() > 0)
                {

                return $query2->result_array();


            
                }else{    
                    
                    return $salida = '-1';
                }


            }

            public function datos_coordinador_asociado($id){

                $query = $this->db->query("SELECT ci_coord
                                             FROM proyecto
                                             WHERE id_proyecto = $id");


                    $cedula = ($query->row()->ci_coord);

                $query2 = $this->db->query("SELECT nombre_coord,apellido_coord
                                            FROM coordinador
                                            WHERE ci_coord = $cedula");



                        if ($query2->num_rows() > 0){

                        $salida =  array('estado'=>"1",'datos_proyecto' =>$query2->row());


                        return $salida;

                        }else{

                        $salida =  array('estado' =>"-1");    

                        return $salida;
        }



            }

            public function cambiar_estado_proyecto($ci,$id){

                    $query = $this->db->query("UPDATE participa 
                                               SET estado_proy = '0' 
                                               WHERE ci_prestador = $ci AND id_proyecto = $id");

                    if($query){

                        return "0";
                    }else{

                        return "-1";
                    }
            }
            public function datos_participa($ci,$id,$asesor){
        $sql="SELECT fecha_ini_proyecto, lunes, martes, miercoles, jueves, viernes, sabado, domingo
                                        FROM participa 
                                        WHERE id_proyecto='$id' AND ci_prestador='$ci' AND ci_asesor='$asesor'";
        $query = $this->db->query($sql);
        if($query->num_rows()>0){

            return $query->result_array();
        }else{

            return "-1";
        }
    }
    //-----------------------------------------------buscar nombre de asesor
    public function asesorcito($ci_asesor){
             $sql="SELECT nombre_asesor, apellido_asesor, celular_asesor, telefono_asesor
                                        FROM asesor 
                                        WHERE ci_asesor='$ci_asesor'";
            $query = $this->db->query($sql);
            if($query->num_rows()>0){

                return $query->result_array();
            }else{

                return "-1";
            }   
    }
    //---------------------------------------------------------------
    public function listar_id_loc($ci_asesor,$id_proyecto){
        $sql="SELECT id_localidad
              FROM ejecuta
              WHERE ci_asesor='$ci_asesor' AND id_proyecto='$id_proyecto'";
         $query = $this->db->query($sql);
            if($query->num_rows()>0){
                $prueba=$query->result_array();
                $query1 = $prueba[0]['id_localidad'];
                $sql2="SELECT nombre_institucion, direccion_localidad, email_representante_localidad, telefono_representante_localidad, nombre_localidad
                        FROM localidad
                        WHERE id_localidad=$query1";
                $query2=$this->db->query($sql2);
                if($query2->num_rows()>0){
                    return $query2->result_array();

                }
            }else{

                return "-1";
            } 
    }

    public function nombre_comunidad($id){


            $sql = ("SELECT nombre_localidad
                     FROM localidad
                     WHERE id_localidad = ( SELECT id_localidad
                                            FROM  ejecuta
                                            WHERE id_proyecto = $id )");

            $query2 = $this->db->query($sql);


            if($query2->num_rows()>0){
                return $query2->result_array();
            }else{
                return "-1";
            }
    }


    public function nombre_asesor($id){


            $sql = ("SELECT nombre_asesor
                      FROM asesor
                      WHERE ci_asesor = ( SELECT ci_asesor
                                          FROM ejecuta
                                          WHERE id_proyecto = $id )");

            $query2 = $this->db->query($sql);


            if($query2->num_rows()>0){
                return $query2->result_array();
            }else{
                return "-1";
            }
    }


}    
