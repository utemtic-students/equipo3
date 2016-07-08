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
		$consulta = $this->db->query("SELECT * FROM login");

		return $consulta;
	}
	public function get_by_id($id)
    {
        $this->db->from($this->table);
        $this->db->where('id',$id);
        $query = $this->db->get();
 
        return $query->row();
    }
    public function delete_by_id($id)
    {
    	$this->db->from('login');
        $this->db->where('IdUser', $id);
        $this->db->delete();
    }

}
?>
