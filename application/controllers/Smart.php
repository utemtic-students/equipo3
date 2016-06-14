<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Smart extends CI_Controller {
	function __construct(){
		parent::__construct();
		
	
	}
	function index(){
		$this->load->view('smart/index1');
		$this->load->view('smart/index2');
		//$this->load->view('smart/login');
		//$this->load->model('smart/script_index');

	}
	function login(){
			$this->load->view('smart/login');

		if (isset($_POST['contra'])) {
		$this->load->model('usuario_model');
		if ($this->usuario_model->login($_POST['correo'],$_POST['contra'])) {
			redirect('Welcome');
			}else{
				redirect('login#bad=contra');
			}	
		}
		
		
	}
	
	
}

?>