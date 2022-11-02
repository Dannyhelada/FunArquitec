<?php
require_once "controllers/get.controller.php";
$endPoint = $routes_array[2];
$response = new GetController();
// if($endPoint == "verConexion"){
//     print_r($response -> verConexion());
// }
if(str_contains($endPoint, "empleado"))
{   
    
        echo json_encode($response -> verEmpleado());
    
    
}