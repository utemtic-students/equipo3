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
    
    function login_acceder(){
        $this->load->model('smart/usuario_model');
        
        
        if(isset($_POST['contra']))
        {
			
            if($this->usuario_model->login($_POST['correo'],$_POST['contra'])){
                redirect('principal1');
            }else{
               $this->load->view('smart/login');
            }
            
        }
    }
	
	
}

?>