<?php

    require_once 'models/libronuevo.php';
    class Nuevo extends Controller{

        private $model;
        private $mensaje;
   
        public function __construct()
        {
            parent::__construct();
            $this->model = new LibroNuevo();
            $this->view->mensaje = '';
        } 
        
        function render(){
            $this->view->render('nuevo/index');
        }

        function registrarAlumno(){

            $matricula = $_POST['matricula'];
            $nombre = $_POST['nombre'];
            $categoria = $_POST['categoria'];
            $autor = $_POST['autor'];

            $mensaje= '';

           if( $this->model->insert(['matricula' => $matricula, 'nombre' => $nombre, 'categoria' => $categoria,'autor' =>$autor])){
            $mensaje= 'Nuevo alumno creado';
           }else{
            $mensaje = 'La matricula ya existe';
           }
            
           $this->view->mensaje = $mensaje;
           $this->render();
           
        }
    
    }
?>