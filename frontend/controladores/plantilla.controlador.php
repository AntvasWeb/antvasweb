<?php

class ControladorPlantilla {

    public function ctrMostrarPlantilla(){

        include 'vistas/plantilla.php';
    }

    public function ctrEstiloPlantilla(){

        $tabla = "plantilla";
        $respuesta = ModeloPlantilla::mdlEstiloPlantilla($tabla);
        return $respuesta;
    }
}