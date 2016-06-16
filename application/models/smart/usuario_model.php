<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario_model extends CI_Model {
	/*public $variable;*/

	public function __construct()
	{
		parent::__construct();
	}
	public function login($correo,$contra){
		$this->db->where('correo',$correo);
		$this->db->where('contra',$contra);
		$c = $this->db->get('login');
		if ($c->num_rows()>0) {
			return true; 
		}else{
			return false;   
		}
	}
}

?>