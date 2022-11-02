<?php
require_once "conexion.php";

class GetModel{
    static public function verEmpleado(){
        $sql = "SELECT * FROM empleado;";
        $stmt = Conexion::conectar()->prepare($sql);
        if($stmt->execute()){
            $results = $stmt-> fetchAll(PDO::FETCH_OBJ);
            return $results;
        }
        else {
            return "La sentencia no se pudo ejecutar";
        }
    }

    
}