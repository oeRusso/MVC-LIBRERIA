<?php

    class Consulta extends Controller{

      

        public function __construct()
        {
            parent::__construct();
            $this->view->datos = [];


           /*puedo acceder a este metodo de la vista pq el controlador padre instancia a la vista y este controlador hijo la hereda*/
        } 

        function render(){
            $alumnos = $this->model->get();
            $this->view->datos= $alumnos;
            $this->view->render('consulta/index');
        }

        
    }
?>