<?php class Administrador_model extends CI_Model {


	function __construct()
	{
        // Call the Model constructor
		parent::__construct();


		$this->load->database();


	}


	public function registrar_datos_usuario($datos, $tipo) {

		if ($tipo == "CO") {
			$query = $this->db->insert('coordinador', array(
				'ci_coord' => $datos["cedula"],
				'nombre_coord' => $datos["nombre"],
				'apellido_coord' => $datos["apellido"],
				'celular_coord' => $datos["celular"],
				'telefono_coord' => $datos["telefono"],
				'email_coord' => $datos["email"],
				'escuela_coord' => $datos["escuela"]));

			$query = $this->db->insert('usuario', array(
				'cedula' => $datos["cedula"],
				'user' => $datos["nombre"],
				'contrasena' => $datos["pass"],
				'tipo' => $datos["tipo"]));
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

			$query = $this->db->insert('usuario', array(
				'cedula' => $datos["cedula"],
				'user' => $datos["nombre"],
				'contrasena' => $datos["pass"],
				'tipo' => $datos["tipo"]));
		}

		if ($tipo == "PR") {
			$query = $this->db->insert('proyeccion_comunidad', array(
				'ci_pr' => $datos["cedula"],
				'nombre_pr' => $datos["nombre"],
				'apellido_pr' => $datos["apellido"],
				'celular_pr' => $datos["celular"],
				'telefono_pr' => $datos["telefono"],
				'email_pr' => $datos["email"]));

			$query = $this->db->insert('usuario', array(
				'cedula' => $datos["cedula"],
				'user' => $datos["nombre"],
				'contrasena' => $datos["pass"],
				'tipo' => $datos["tipo"]));
		}

		if($query){
			return "0";
		}
		else{
			return "-1";
		}
	}

}