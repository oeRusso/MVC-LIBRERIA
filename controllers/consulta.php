<?php

require 'models/consultamodelo.php';
    class Consulta extends Controller{

      private $model;
      protected $view;
     
        public function __construct()
        {
            parent::__construct();
            
            $this->model = new ConsultaModelo();
            $this->view->libros = [];

           /*puedo acceder a este metodo de la vista pq el controlador padre instancia a la vista y este controlador hijo la hereda*/
        } 

        function render(){
             $libros = '';
            $libros = $this->model->get();
            $this->view->libros = $libros;
            $this->view->render('consulta/index');
        }

    }
?>