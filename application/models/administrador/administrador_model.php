<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Administrador_model extends CI_Model {
	

	public function __construct()
	{
		parent::__construct();
        $this->load->database();
	}
	public function agregar($correo,$contra,$usuario,$rol){
		$data = array(
		'Correo' => $correo,
		'Contrasena' => $contra,
		'N_usuario' => $usuario,
		'Rol' => $rol,	
		);
		
		$this->db->insert('login',$data);
		redirect('administrador/form_agregar_usuario');
	}

	function verDatos(){
		$query = $this->db->get('login');
		if ($query ->num_rows() > 0) {
			return $query;
		}else{
			return FALSE;
		}
	}

}
?>
