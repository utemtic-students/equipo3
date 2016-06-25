<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Smart extends CI_Controller {
	function __construct(){
		parent::__construct();
		
	
	}
	function index(){
		$this->load->view('smart/index1');
		$this->load->view('smart/index2');
	}
	function login(){
        $this->load->view('smart/login');	
	}
	function principal1(){
		$this->load->view('smart/principal1');
		$this->load->view('smart/principal1.1');
	}
    
    function login_acceder(){
        $this->load->model('smart/usuario_model');
        if(isset($_POST['contra']))
        {
            $login=$this->usuario_model->login($_POST['correo'],$_POST['contra']);
						//echo $login;
					  if($login["Rol"] == 1)
            {
                redirect('smart/principal1.1');
            }
            else if ($login["Rol"] == 2)
            {
               redirect('administrador/index');
            }
			else{
				redirect('smart/login');
			}
        }
    }
}

?>