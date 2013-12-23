<?php
class Categoria extends CI_Model {


    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }

    /**
     * obtiene todos las noticias de un usuario
     */
    public function obtener_todo (){
        $query = $this->db->get('categorias');
        $opciones = array("" => 'Seleccione una categoría');
        foreach ($query->result() as $row) {
           $opciones[$row->categoriaId] = $row->nombreCategoria;
        }
        return $opciones;
    }


}