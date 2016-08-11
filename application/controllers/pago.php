<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pago extends CI_Controller {
	function __construct(){
		parent::__construct();
		
	
	}
	function index(){
				$this->load->view('pago/principal2');
				$this->load->view('pago/principal2.2');		
	}
}
?>