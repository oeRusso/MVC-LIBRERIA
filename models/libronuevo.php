<?php

class LibroNuevo extends Model{

    
    public function __construct(){
        parent::__construct();
    }

    public function insert($datos){

        try {
            $query = $this->db->connect()->prepare("INSERT INTO libros (matricula,nombre,categoria,autor) VALUES (:matricula,:nombre,:categoria,:autor)");   

            $query->execute(['matricula' => $datos['matricula'], 'nombre' => $datos['nombre'],'categoria' => $datos['categoria'], 'autor' => $datos['autor']]);

            return true;
                
    
        } catch (PDOException $e) {
        
            return false;
        }
        
       
    }
}
?>