<?php
require_once "conexion.php";
class PostModel
{
    static public function verConexion(){
        return Conexion::conectar();
    }

    static public function agregarEmpleado( $Identificacion, $Nombre, $Apellido, $Cargo, $Edad, $Telefono){
        $sql = "INSERT INTO `empleado` ( `Id`,`Identificacion`, `Nombre`, `Apellido`, `Cargo`, `Edad`, `Telefono`) 
                VALUES (NULL, '".$Identificacion."', '".$Nombre."', '".$Apellido."', '".$Cargo."', '".$Edad."', '".$Telefono."');";
        $stmt = Conexion::conectar()->prepare($sql);
        if($stmt -> execute()){
            return "correcto";
        }
        else {
            return "incorrecto";
        }
    }
}