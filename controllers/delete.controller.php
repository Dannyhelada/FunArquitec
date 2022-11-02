<?php
require_once "models/delete.model.php";
    class DeleteController
    {
        static public function eliminarEmpleado($valor, $campo){
            return DeleteModel::eliminarEmpleado($valor, $campo);
        }
    }