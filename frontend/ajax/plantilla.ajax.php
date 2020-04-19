<?php

require_once '../controladores/plantilla.controlador.php';
require_once '../modelos/plantilla.modelo.php';

class AjaxPlantilla{

    public function ajaxEstiloPlantilla(){

        $repuesta = ControladorPlantilla::ctrEstiloPlantilla();

        echo json_encode($repuesta, true);

    }

}

$objeto = new AjaxPlantilla();
$objeto -> ajaxEstiloPlantilla();
