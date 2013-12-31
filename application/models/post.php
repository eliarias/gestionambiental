<?php
class Post extends CI_Model {


    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }

    /**
     * obtiene todos las noticias de un usuario
     */
    public function obtener_poridUsuario ($id = 0){
        $query = $this->db->get_where('posts', array('usuarioId' => $id));
        return $query->result();

    }

    /**
     * Inserta una nuevo post
     */
    public function insertar($titulo, $categoria, $cuerpo, $usuario){
        $record = array('titulo' => $titulo, 'cuerpo' => $cuerpo, 'categoriaId' => $categoria, 'usuarioId' => $usuario, 'creadoEl' => date("Y-m-d H:m:s"));
        $this->db->insert("posts", $record);

    }

    public function all(){

        $this->db->select('*');    
        $this->db->from('posts');
        $this->db->join('usuarios', 'posts.usuarioId = usuarios.usuarioId');
        $query = $this->db->order_by('postId', 'desc');
        $query = $this->db->get();
    
        return $query->result();
    }


}