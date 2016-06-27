<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario_model extends CI_Model {
	/*public $variable;*/

	public function __construct()
	{
		parent::__construct();
        $this->load->database();
	}
	public function login($correo,$contra){
		$this->db->where('Correo',$correo);
		$this->db->where('Contrasena',$contra);
		$c = $this->db->get('login');
		if ($c->num_rows()>0) 
		{
			return  $c->row_array();
		}
	}
}
?>
