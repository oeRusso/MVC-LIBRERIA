<?php

    class EstandarError extends Controller{
        
        public function __construct()
        {
            parent::__construct();
            $this->view->mensaje = "Hubo un error en la solicitud o no existe la pagina"; //aqui la variable va antes de cargar la vista pq cuando se carga la vista la variable q contiene menmsaje ya debe existir

            $this->view->render('error/index');

        }
    }

?>