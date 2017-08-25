<?
defined('BASEPATH') OR exit('No direct script access allowed');
class Sesiones extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->load->database();
    }

    function login($data){
        $usuario=false;
        // foreach ($data as $datos) {
        //     echo $datos;
        // }

        // $this->db->query("select ");
        $sentencia="
        SELECT * FROM usuarios WHERE 
        nombre= '$data[usuario]' AND 
        contraseña =". "md5($data[contraseña])";
        
        $query = $this->db->query($sentencia);
        
        $row=$query->row();
        if (isset($row)) {
            $usuario=true;
        }
        return $usuario;
    }
}