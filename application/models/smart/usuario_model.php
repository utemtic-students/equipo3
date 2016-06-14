<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario_model extends CI_Model {
	public $variable;

	public function_construct()
	{
		parent::_construct();
	}
	public function login($correo,$contra){
		$this->db->where('correo',$correo);
		$this->db->where('contra',$cortra);
		$q = $this->db->get('login');
		if ($q->num_rows()>0) {
			return true;
		}else{
			return false;
		}
	}
}

?>