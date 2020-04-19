/* ------ ------ ------ ------ ------
    PLANTILLA
 ------ ------ ------ ------ ------ */

$.ajax({

    url:"ajax/plantilla.ajax.php",
    success:function(respuesta){

        colores =JSON.parse(JSON.parse(respuesta).colores);
        let colorPrimario   = colores.colorPrimario;
        let colorSecundario = colores.colorPrimario;
        let colorTercero    = colores.colorTercero;
        let colorCuarto     = colores.colorCuarto;
        let colorQuinto     = colores.colorQuinto;
        let colorRgba1      = colores.colorRgba1;

        $(":root").css({ "--color-primario" : colorPrimario,
                        "--color-secundario" : colorSecundario,
                        "--color-tercero" : colorTercero,
                        "--color-Cuarto" : colorCuarto,
                        "--color-quinto" : colorQuinto,
                        "--color-rgba1" : colorRgba1 });

    }
})