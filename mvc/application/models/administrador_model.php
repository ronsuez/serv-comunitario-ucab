<?php class Administrador_model extends CI_Model {


	function __construct()
	{
        // Call the Model constructor
		parent::__construct();


		$this->load->database();


	}


	public function registrar_datos_usuario($datos, $tipo) {

		//se registran los datos de usuario
		$query = $this->db->insert('usuario', array(
				'cedula' => $datos["cedula"],
				'user' => $datos["user"],
				'contrasena' => $datos["pass"],
				'tipo' => $datos["tipo"]));

//se registran los datos de usuario dependiendo del tipo
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
			return "0";
		}
		else{
			return "-1";
		}
	}

	public function actualizar_datos_usuario($datos, $tipo) {


		//se actualizan los datos de usuario
		
			$this->db->where('cedula', $datos["cedula"]);
			$query = $this->db->update('usuario', array(
				'cedula' => $datos["cedula"],
				'user' => $datos["user"],
				'contrasena' => $datos["pass"],
				'tipo' => $datos["tipo"]));

		if ($tipo == "CO") {
			$this->db->where('ci_coord', $datos["cedula"]);
			$query = $this->db->update('coordinador', array(
				'ci_coord' => $datos["cedula"],
				'nombre_coord' => $datos["nombre"],
				'apellido_coord' => $datos["apellido"],
				'celular_coord' => $datos["celular"],
				'telefono_coord' => $datos["telefono"],
				'email_coord' => $datos["email"],
				'escuela_coord' => $datos["escuela"]));

		}

		if ($tipo == "DI") {
			$this->db->where('ci_di', $datos["cedula"]);
			$query = $this->db->update('director', array(
				'ci_di' => $datos["cedula"],
				'nombre_di' => $datos["nombre"],
				'apellido_di' => $datos["apellido"],
				'celular_di' => $datos["celular"],
				'telefono_di' => $datos["telefono"],
				'email_di' => $datos["email"],
				'escuela_di' => $datos["escuela"]));
		}

		if ($tipo == "PR") {
			$this->db->where('ci_pr', $datos["cedula"]);
			$query = $this->db->update('proyeccion_comunidad', array(
				'ci_pr' => $datos["cedula"],
				'nombre_pr' => $datos["nombre"],
				'apellido_pr' => $datos["apellido"],
				'celular_pr' => $datos["celular"],
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

	public function asignar_coord_principal($ci) {

		$this->db->where("cedula", $ci);

		$this->db->select('cedula, principal');

		$query = $this->db->get('usuario');
		
		$fila = $query->row();

		if ($fila->principal){
			return -1;
		}
		else {
			$this->db->where('cedula', $fila->cedula);
			$this->db->update('usuario', array('principal' => 1));
			return 0;
		}
	}


	public function desasignar_coord_principal($ci) {

		$this->db->where("cedula", $ci);

		$this->db->select('cedula, principal');

		$query = $this->db->get('usuario');
		
		$fila = $query->row();

		if ($fila->principal){ //si esta en 1 lo lo designa como secundario
			
			$this->db->where('cedula', $fila->cedula);
			$this->db->update('usuario', array('principal' => 0));
			return 0;
		}
		else { //si no es coordinador principal
			return -1;

		}
	}


	public function habilitar_coord($ci) {

		$this->db->where("cedula", $ci);

		$this->db->select('cedula, estado');

		$query = $this->db->get('usuario');
		
		$fila = $query->row();

		if ($fila->estado){

			return "-1";
		}
		else {

			$this->db->where('cedula', $fila->cedula);
			$this->db->update('usuario', array('estado' => 1));
			return "0";
			
		}
	}

	public function deshabilitar_coord($ci) {

		$this->db->where("cedula", $ci);

		$this->db->select('cedula, estado');

		$query = $this->db->get('usuario');
		
		$fila = $query->row();

		if ($fila->estado){

			$this->db->where('cedula', $fila->cedula);
			$this->db->update('usuario', array('estado' => 0));
			return "0";
		}
		else {
			return "-1";
			
		}
	}

	public function obtener_correo_coord($ci){

		$this->db->where("ci_coord", $ci);

		$this->db->select('email_coord');

		$query = $this->db->get('coordinador');
		
		$fila = $query->row();

		return $fila->email_coord;

	}



	

}