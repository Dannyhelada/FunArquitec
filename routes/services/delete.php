<?php
require_once "controllers/delete.controller.php";
$endPoint = $routes_array[2];
$response = new DeleteController();

if($endPoint == "empleado")
{
    $body = json_decode(file_get_contents("php://input"), true);
    $valor = $body["valor"];
    $campo = $body["campo"];
    echo $response -> eliminarEmpleado($valor, $campo);
}
