<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Posts extends CI_Controller {
	function __construct(){
		parent::__construct();
		
		$usuario = $this->session->all_userdata();
		//Valida si hay un usuario en sessión
		if(!$usuario['usuario']){
			redirect("login");
		}			

	}

	public function index()
	{
		$this->load->view("posts/index.php");
	}

	public function nuevo(){
		$this->load->helper("form");
		$this->load->model("categoria");
		$this->load->model("post");
		$userSession = $this->session->all_userdata();
		$usuarioId = $userSession['usuarioId'];


		$data['posts'] = $this->post->obtener_poridUsuario($usuarioId);
		$data['categorias'] = $this->categoria->obtener_todo();
		$data['contenido'] = array('titulo' => '', 'categoria' => '0', 'cuerpo' => '');
		$this->load->view("posts/nuevo.php", $data);
	}


	public function insertar(){
		$titulo = $this->input->post('titulo');
		$categoria = $this->input->post('categoria');
		$cuerpo = $this->input->post('name1');

		$userSession = $this->session->all_userdata();
		$usuarioId = $userSession['usuarioId'];

		$this->load->model("post");	
		$this->post->insertar($titulo, $categoria, $cuerpo, $usuarioId);

		redirect("posts/nuevo");
		
	}

	public function editar($id){

		$this->load->helper("form");
		$this->load->model("categoria");
		$this->load->model("post");
		$userSession = $this->session->all_userdata();
		$usuarioId = $userSession['usuarioId'];

		$data['posts'] = $this->post->obtener_poridUsuario($usuarioId);
		$data['categorias'] = $this->categoria->obtener_todo();
		$data['contenido'] = array('titulo' => '', 'categoria' => '0', 'cuerpo' => '');
		
		$this->load->view("posts/nuevo.php", $data);

	}


}