<?php
require_once "models/get.model.php";
    class getController{

        static public function verEmpleado(){
            return GetModel::verEmpleado();
        }

        
    }