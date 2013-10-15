<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Administracion extends CI_Controller {
	function __construct(){
		parent::__construct();
		

	}


	//Muestra el index de administración.
	public function index()
	{
		$this->load->view('plantilla/plantilla.php');
		


	}


}