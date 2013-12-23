<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {
	function __construct(){
		parent::__construct();


	}

	public function index()
	{
		$usuario = $this->session->all_userdata();
		//Valida si hay un usuario en sessión
		if($usuario['usuario']){

			$this->load->view("admin/index.php");
		}else{

			redirect("login");
		}
		

	}

	//Cierra sesión y redirije a login
	public function cerrar(){
		$this->session->sess_destroy();
		redirect("login");
	}


}