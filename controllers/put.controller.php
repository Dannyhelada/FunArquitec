<?php
require_once "models/put.model.php";
    class PutController
    {
       
        static public function modificarEmpleado($id, $dato, $campo){
            return PutModel::modificarEmpleado($id, $dato, $campo);
        }
    }