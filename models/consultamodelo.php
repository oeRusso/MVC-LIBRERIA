<?php

require_once 'models/libro.php';
class ConsultaModelo extends Model{

    
    public function __construct(){
        parent::__construct();
    }

    public function get(){

        $items = [];

        try {
            $query = $this->db->connect()->query("SELECT * FROM libros");

            while ($row = $query->fetch()) {
                $item = new Libro();
                $item->matricula = $row['matricula'];
                $item->nombre = $row['nombre'];
                $item->categoria = $row['categoria'];
                $item->autor = $row['autor'];

                array_push($items, $item);

            }
            
            return $items;

        } catch (PDOException $e) {
            return [];
        }

       
       
    }
}
?>