<?php
require_once "conexion.php";
class DeleteModel
{
    static public function verConexion(){
        return Conexion::conectar();
    }

    static public function eliminarEmpleado($valor, $campo){
        $sql = "DELETE from empleado WHERE ".$campo." = '".$valor."';";
        $stmt = Conexion::conectar()->prepare($sql);
        if($stmt -> execute()){
            return "correcto";
        }
        else {
            return "incorrecto";
        }
    }
}