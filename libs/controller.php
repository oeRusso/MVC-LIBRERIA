<?php

class Controller{

    private $model;

    protected $view; //Esto no es necesario dado q como la variable esta en el constructictor la clase padre puede heredarlo tranquilamente y funciona, pero marca un error molesto indicando q no encuentra la variable por eso lo declaro asi como protejido. pq si lo declaro como privado va tirar un error pq no va encontrar la propiedad ya q las propiedades privadas de la clase padre no heredan las clases hijas

    public function __construct(){
        // echo "<p>Controlador base</p>"; 
        $this->view = new View(); 
    }

    function loadModel($model){
        $url = 'models/'.$model.'model.php';
       
        if(file_exists($url)){
            require $url;

            $modelName = $model.'Model';
            $this->model= new $modelName;
        }
    }
}


?>

