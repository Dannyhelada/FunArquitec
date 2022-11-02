<?php
require_once "models/post.model.php";
    class PostController
    {
        static public function verConexion(){
            return PostModel::verConexion();
        }
        static public function agregarEmpleado( $Identificacion, $Nombre, $Apellido, $Cargo, $Edad, $Telefono){
            return PostModel::agregarEmpleado( $Identificacion, $Nombre, $Apellido, $Cargo, $Edad, $Telefono);
        }
    }