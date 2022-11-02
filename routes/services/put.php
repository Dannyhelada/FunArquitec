<?php
require_once "controllers/put.controller.php";
$endPoint = $routes_array[2];
$response = new PutController();
if($endPoint == "verConexion"){
    print_r($response -> verConexion());
}
else if($endPoint == "empleado")
{
    $body = json_decode(file_get_contents("php://input"), true);
    $Id = $body["Id"];
    $dato = $body["dato"];
    $campo = $body["campo"];
    echo $response -> modificarEmpleado($Id, $dato, $campo);
}
