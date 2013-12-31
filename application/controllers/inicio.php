<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Inicio extends CI_Controller {
	function __construct(){
		parent::__construct();
		

	}

	public function index()
	{
		
		$this->load->model('post');
		$data['posts'] = $this->post->all();
		$this->load->view('inicio/index.php', $data);

	}


}