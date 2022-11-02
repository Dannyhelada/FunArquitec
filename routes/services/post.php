<?php
require_once "controllers/post.controller.php";
$endPoint = $routes_array[2];
$response = new PostController();
if($endPoint == "verConexion"){
    print_r($response -> verConexion());
}
else if($endPoint == "empleado")
{
    $body = json_decode(file_get_contents("php://input"), true);
    $Identificacion = $body["Identificacion"];
    $Nombre = $body["Nombre"];
    $Apellido = $body["Apellido"];
    $Cargo = $body["Cargo"];
    $Edad = $body["Edad"];
    $Telefono = $body["Telefono"];
    echo $response -> agregarEmpleado($Identificacion, $Nombre, $Apellido, $Cargo, $Edad, $Telefono);
}

