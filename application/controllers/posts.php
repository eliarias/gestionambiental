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
		$data['posts'] = $this->post->obtener_porid(1);
		$data['categorias'] = $this->categoria->obtener_todo();
		$data['contenido'] = array('titulo' => '', 'categoria' => '0', 'cuerpo' => '');
		$this->load->view("posts/nuevo.php", $data);
	}


	public function insertar(){
		redirect('posts/nuevo');

	}


}