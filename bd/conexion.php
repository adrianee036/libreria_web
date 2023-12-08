<?php 

class DBLibreria{

    private function obtenerConexion(){
        $conexion = new PDO("mysql:host=localhost;dbname=id21601879_libreria","id21601879_niano","Bread03298@");
        return $conexion;
    }

    public function obtenerLibros (){
        $pdoConexion = $this->obtenerConexion();
        $resultado = [];
        if (is_object($pdoConexion)){
            $sql = "SELECT * FROM libros";
            $resultado = $pdoConexion->query($sql);
        }
        return $resultado;
    }
    
    public function obtenerAutores (){
        $pdoConexion = $this->obtenerConexion();
        $resultado = [];
        if (is_object($pdoConexion)){
            $sql = "SELECT * FROM autor";
            $resultado = $pdoConexion->query($sql);
        }
        return $resultado;
    }
    
}

    
?>