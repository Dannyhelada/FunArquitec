<?php
require_once "conexion.php";
class PutModel
{
    static public function modificarEmpleado($Id, $dato, $campo){
        $sql = "UPDATE empleado SET ".$campo." = '".$dato."' WHERE Id = '".$Id."'";
        $stmt = Conexion::conectar()->prepare($sql);
        if($stmt -> execute()){
            return "correcto";
        }
        else {
            return "incorrecto";
        }
    }
}