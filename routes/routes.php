<?php
//captura la url de la peticion
    $routes_array = $_SERVER['REQUEST_URI'];
    $routes_array =explode("/", $routes_array);
    $routes_array =array_filter($routes_array);
//si es la url base sin ningun endpoint pasa esto
    if(count($routes_array) == 1){
        $arrayResponse = array(
            'status'=> 200,
            'mensaje' => "Usted ingreso correctamente a nuestra aplicacion por favor escriba el endpoint que desea utilizar"
        );

        echo json_encode($arrayResponse, http_response_code($arrayResponse['status']));

    }
//validamos los endpoint que nos llegan
    else if (count($routes_array) == 2){
            if($_SERVER['REQUEST_METHOD'] == 'GET'){
                include "services/get.php";
            }
            else if($_SERVER['REQUEST_METHOD'] == 'POST'){
                include "services/post.php";
            }
            else if($_SERVER['REQUEST_METHOD'] == 'PUT'){
                include "services/put.php";
                
            }
            else if($_SERVER['REQUEST_METHOD'] == 'DELETE'){
                include "services/delete.php";
            }
            else{
               
            }

    }