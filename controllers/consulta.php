<?php

    class Consulta extends Controller{

        
        public function __construct()
        {
            parent::__construct();
           //puedo acceder a este metodo de la vista pq el controlador padre instancia a la vista y este controlador hijo la hereda
            // echo "<p>Nuevo controlador main</p>";
        } 

        function render(){
            $this->view->render('consulta/index');
        }

        
    }
?>