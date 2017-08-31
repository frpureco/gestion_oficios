<?php
// este es el controlador ejecutado por defecto en el proyecto.

defined('BASEPATH') OR exit('No direct script access allowed');
class superU extends CI_Controller {

/* Algunos helpers y librerias ya fueron cargadas en el 
    archivo autoload.php */

    function __construct(){
        parent::__construct();
        // carga el modelo de sesiones
        $this->load->model('sesiones_model');
    }
        
   public function index(){
       $this->load->view('headers/librerias');//carga las librerias de bootstrap y jquery.
       $this->load->view('headers/cabecera');//crea el header para el login
       $this->load->view('login');
       $this->load->view('footer');       
    }

    //metodo usado en el inicio de sesion.
    function ingresar (){

        // validando campos
        $this->form_validation->set_rules('user','Usuario','required');
        $this->form_validation->set_rules('pass','Contraseña','required|min_length[8]');

// si se validan las entradas, entonces
        if ($this->form_validation->run() === TRUE) {
            
            $data=array(
                'usuario'=>$this->input->post('user'),
                'contraseña'=>$this->input->post('pass')
            );
            
            //ejecuta el metodo de login del modelo sesiones      
            $ingresar=$this->sesiones_model->login($data);
            
                if ($ingresar) {
                    $new_user_data=[
                        'usuario' => $data['usuario'],
                        'logueado' => TRUE
                    ];
                    $this->session->set_userdata($new_user_data);
                    //var_dump($new_user_data);
                    echo json_encode([
                        'resp' => $ingresar
                    ]);
                }
                else{
                    echo json_encode([
                        'resp' => $ingresar
                    ]);
                }

        }
        else{
            echo json_encode([
                'resp' => validation_errors()
            ]);
        }
                               
        
        
        // if ($ingresar) {
        //     $this->mostrar_alta_oficios($data);
        // }
    }

/* metodo para dar de alta los oficios 
    utiliza se comunica con el lado del cliente usando ajax.
    envia como respuesta en formata JSON true si se 
    ingresaron correctamente los datos en la BD.
    */
    function registrarOficios(){
        $direccion="C:/xamp/htdocs/gestion_oficios/uploads/";
        
        /* upload_path' => ruta donde se guarda el archivo,
            'allowed_types' => extención válida para los archivos*/

            
        $config=[
            'upload_path' => './uploads/',
            'allowed_types' => 'pdf'
        ];

        // carga la libreria upload y se agrega la configuracion
        $this->load->library('upload',$config); 

        if ($this->upload->do_upload('pdf')) {
                        
            $dat_pdf=$this->upload->data();
            $data=[
                'asunto' => $this->input->post('asunto'),
                'fechao' => $this->input->post('f_oficio'),
                'direccion_pdf' => $direccion.$dat_pdf['file_name']
                //'observaciones' => $this->input->post('')
            ];           

        $registroo= $this->sesiones_model->subir_oficios($data);
            
        }else {
            $this->upload->display_errors();
        }            
        echo json_encode([
                        'subioo' => $registroo
                        ]);
 
    }

    function salir()
    {
        
        if (session_destroy()) {

            echo json_encode([
                'resp' => TRUE
            ]);
        }
    }

    function mostrar_alta_oficios() {
        
        //seguridad para las URL-
        // de forma que no se pueda acceder mediante la url sin hacer login

        if ($this->session->has_userdata('logueado')) {
            # code...
            $this->load->view('headers/librerias');//carga las librerias de bootstrap y jquery.
            $this->load->view('headers/cabecera');
            $this->load->view('altas/oficios');
            $this->load->view('footer');
        }else{
            redirect(base_url());
        }
          
    }
}