<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {
	function __construct(){
		parent::__construct();
		

	}

	public function index()
	{
		$this->load->helper("form");
		$this->load->view("login/index.php");

	}

	/**
	 *	Este método, ejecuta toda la validación de usuario
	 *	e inicio de sesión.
	 */
	public function entrar(){
		//Obtiene el nombre de usuario y contraseña
		$usuario = $this->input->post('usuario');
		$password =  $this->input->post('password');
		
		//Valida entrada de datos 
		if (strlen($usuario) == 0 || strlen($password) == 0){
			redirect("login");//
		}


		//Carga el Modelo
		$this->load->model("Usuario");

		//Obtiene un usuario
		$resul = $this->Usuario->obtener_usuario($usuario, $password);

		$data_usuario = null;

		$existe = FALSE; //Bandera para validar si existen registros

		foreach ($resul as $fila) {
			$existe = TRUE;
			$data_usuario = array(
				 'usuario' 		=> $fila->nickname,
				 'nombre'  		=> $fila->nombre,
				 'apellido1' 	=> $fila->apellidoUno,
				 'apellido2' 	=> $fila->apellidoDos,
				 'usuarioId'	=> $fila->usuarioId
				);
		}

		if ($existe){
			//Agrega la sesión del usuario
			$this->session->set_userdata($data_usuario);
			redirect("admin");


		}

	}	



}