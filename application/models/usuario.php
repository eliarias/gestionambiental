<?php
class Usuario extends CI_Model {


    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }

    /**
     * obtener
     */
    public function obtener_usuario($usuario = "", $password = ""){
        $query = $this->db->get_where('usuarios', array('nickname' => $usuario, 'password' => $password));
        return $query->result();

    }

}