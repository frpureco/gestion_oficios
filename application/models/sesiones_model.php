<?
defined('BASEPATH') OR exit('No direct script access allowed');
class Sesiones_model extends CI_Model {

    function __construct() {
        parent::__construct();        
    }

    // método que hace la consulta en la base de datos para la existencia de los usuarios.
    function login($data){
        $usuario=false;
       
        // se jeuta la instruccion where para hacer la busqueda con condiciones.
        /* al metodo where se le envia un array asociativo con las condiciones
        y al mismo tiempo se hace usu del metodo decrypt que regresa la contraseña decodificada.
        */
        $this->db->where([
            'nombre' => $data['usuario'],
            'contraseña' => $this->decrypt($data['contraseña'])
        ]);      
        
        $query = $this->db->get('usuarios');
        
        $row=$query->row();
        if (isset($row)) {
            $usuario=true;
        }
       
        return $usuario;
    }

    // data => es los datos a insertar en la base de datos
    // retorna true or false para saber si se ingresaron los datos
    // en la base de datos
    function subir_oficios($data)
    {
        
        // primero hacemos la clausula WHERE
        $subir=$this->db->insert(
            'oficios',
                [
                    'fecha_oficio' => $data['fechao'],
                    'asunto' => $data['asunto'],
                    'ruta_pdf' => $data['direccion_pdf']
                ]
        );
        return $subir;
    }

    // metodo que decodifica la contraseña en hash de MD5
    // parametro de entrada: Contaseña ingresada por el usuario.
    // valor devuelto: Contraseña decodificada en MD5.
    private function decrypt($contraseña_encrpt)
    {
        return md5($contraseña_encrpt);
    }
}