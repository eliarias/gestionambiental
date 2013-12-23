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
    public function obtener_porid ($id = 0){
        $query = $this->db->get_where('posts', array('usuarioId' => $id));
        return $query->result();

    }

    /**
     * Inserta una nuevo post
     */
    public function insertar(){
        $data['contenido'] = array('titulo' => 'Prueba', 'categoria' => '2', 'cuerpo' => 'Esto es lo que pasó');
        redirect("posts/nuevo", $data);

    }


}