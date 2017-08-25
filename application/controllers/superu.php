<?php
// este es el controlador ejecutado por defecto en el proyecto.
defined('BASEPATH') OR exit('No direct script access allowed');
class superU extends CI_Controller {

    function __construct(){
        parent::__construct();
        // carga el helper de los formularios
        $this->load->helper('form');
        // carga el modelo de sesiones
        $this->load->model('sesiones');
    }
        

   public function index(){

       $this->load->view('headers/librerias');//carga las librerias de bootstrap y jquery.
       $this->load->view('headers/cabecera');//crea el header para el login
       $this->load->view('login');
       $this->load->view('footer');
       
    }

    //metodo usado en el inicio de sesion.
    function ingresar (){
    //se guardan los datos de la sesiion del cliente
        $data=array(
            'usuario'=>$this->input->post('user'),
            'contraseña'=>$this->input->post('pass')
        );
        //ejecuta el metodo de login del modelo sesiones      
        $ingresar=$this->sesiones->login($data);

        if ($ingresar) {
            $this->load->view('headers/librerias');//carga las librerias de bootstrap y jquery.
            $this->load->view('bienvenido',$data);
            $this->load->view('footer');
        }
    }
}